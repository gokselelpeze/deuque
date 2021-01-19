<?php
class questionnaires_model extends CI_Model
{
    public function getUsersQns($userId)
    {
        $this->db->where('user_id', $userId);
        $query = $this->db->get('questionnaires');
        return $query->result();
    }
    public function getRecentQns()
    {
        $this->db->order_by('datetime_created', 'DESC');
        $query = $this->db->get('questionnaires', 5);
        return $query->result();
    }
    public function getPopularQns()
    {
        $this->db->order_by('participant_count', 'DESC');
        $query = $this->db->get('questionnaires', 5);
        return $query->result();
    }
    public function getSearchedQns($searched)
    {
        $this->db->like('questionnaire_name', $searched, 'both');
        $this->db->or_like('questionnaire_subtext', $searched, 'both');
        $this->db->or_like('questionnaire_id', $searched, 'both');
        $query = $this->db->get('questionnaires');

        return $query->result();
    }
    public function getSearchedUsers($searched)
    {
        $this->db->like('user_name', $searched, 'both');
        $this->db->or_like('name', $searched, 'both');
        $this->db->or_like('surname', $searched, 'both');
        $query = $this->db->get('users');

        return $query->result();
    }

    public function getQnsCount($userId)
    {
        $query = $this->db->query("SELECT COUNT(*) FROM questionnaires WHERE user_id = ".$userId);
        return $query->result();
    }

    public function getUserById($userId)
    {
        $this->db->where('user_id', $userId);
        $query = $this->db->get('users');
        return $query->result();
    }

    public function getQn($qnId){
        $this->db->where('questionnaire_id', $qnId);
        $query = $this->db->get('questionnaires');
        return $query->result();
    }

    public function getQuestions($qnId){
        $this->db->where('questionnaire_id', $qnId);
        $query = $this->db->get('questions');
        return $query->result();
    }

    public function insertQn($qnId){
        $datetime = date('Y-m-d H:i:s');
        $data = array(
            'questionnaire_id' => $qnId,
            'user_id' => $this->session->userdata('user_id'),
            'questionnaire_type' => 0,
            'questionnaire_name' => $this->input->post('qnName'),
            'questionnaire_subtext' => $this->input->post('description'),
            'participant_count' => 0,
            'publish_status' => 0,
            'datetime_created' => $datetime
        );

        return $this->db->insert('questionnaires', $data);
    }
    public function insertAnswer($answers){
        if ($this->session->userdata('user_id') == null){
            $uId = rand(1000000,2147483647);
            $datetime = date('Y-m-d H:i:s');
            $data = array(
                'user_id' => $uId,
                'user_type' => 0,
                'user_name' => 'anonymous',
                'user_password' => '16541fs5d4d1s1654sdf',
                'name' => 'anonymous',
                'surname' => 'anonymous',
                'user_mail' => 'anonymous@anonymous.com',
                'user_joinDate' => $datetime
            );
            $this->db->insert('users', $data);
            $answers['uId'] = $uId;
        }
        foreach($answers as $key => $value)
        {
            if ($key != 'uId' and $key != 'qnId'){
                $data = array(
                    'user_id' => $answers['uId'],
                    'questionnaire_id' => $answers['qnId'],
                    'question_id' => $key,
                    'answer' => $value
                );
                $this->db->insert('answers', $data);
            }
        }
        $this->db->query('CALL IncreaseParticipantCountByOne(\''.($answers['qnId'].'\')'));
        return true;
    }
    public function insertQuestion(){
        $data = array(
            'question_id' => $this->input->post('questionId'),
            'questionnaire_id' => $this->input->post('qnId'),
            'question_name' => $this->input->post('questionName'),
            'question_subtext' => $this->input->post('questionDescription'),
            'option_1' => $this->input->post('option1'),
            'option_2' => $this->input->post('option2'),
            'option_3' => $this->input->post('option3'),
            'option_4' => $this->input->post('option4'),
            'option_5' => $this->input->post('option5'),
            'option_6' => $this->input->post('option6'),
            'option_7' => $this->input->post('option7'),
            'option_8' => $this->input->post('option8'),
        );
        return $this->db->insert('questions', $data);
    }
    public function updateQuestion($data){

        $this->db->set('question_name', $data['question_name']);
        $this->db->set('question_subtext', $data['question_subtext']);
        $this->db->set('option_1', $data['option_1']);
        $this->db->set('option_2', $data['option_2']);
        $this->db->set('option_3', $data['option_3']);
        $this->db->set('option_4', $data['option_4']);
        $this->db->set('option_5', $data['option_5']);
        $this->db->set('option_6', $data['option_6']);
        $this->db->set('option_7', $data['option_7']);
        $this->db->set('option_8', $data['option_8']);
        $this->db->where('question_id',  $data['question_id']);
        $this->db->where('questionnaire_id',  $data['questionnaire_id']);
        $this->db->update('questions');
    }
    public function getAnswers($qnId,$questionId){
        $this->db->where('questionnaire_id', $qnId);
        $this->db->where('question_id', $questionId);
        $this->db->select('answer');
        $answers = $this->db->get('answers');
        return $answers->result();
    }

    public function getUserAnswers($qnId,$uId){
        $this->db->where('questionnaire_id', $qnId);
        $this->db->where('user_id', $uId);
        $this->db->select('user_id');
        $answers = $this->db->get('answers');
        return $answers->result();
    }

    public function updateQnStatus($qnId){
        $this->db->set('publish_status', 1, FALSE);
        $this->db->where('questionnaire_id',$qnId);
        $this->db->update('questionnaires');
    }
    public function deleteQn($qnId): bool
    {
        $this->db->where('questionnaire_id', $qnId);
        $this->db->delete('answers');
        $this->db->where('questionnaire_id', $qnId);
        $this->db->delete('questions');
        $this->db->where('questionnaire_id', $qnId);
        $this->db->delete('questionnaires');
        return true;
    }

}
