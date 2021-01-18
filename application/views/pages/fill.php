<?php
if ($this->session->userdata('currently_logged_in'))
    include dirname(__DIR__, 1) . '/sections/header-user.php';
else
    include dirname(__DIR__, 1) . '/sections/header.php';
$uId = 10000;
if($this->session->userdata('user_id') != null)
    $uId = $this->session->userdata('user_id');
$qnInfo = json_decode(json_encode($qn), true);
$questionsInfo = json_decode(json_encode($questions), true);
$userInfo = json_decode(json_encode($user), true);
?>
<page size="A4">
    <nav class="d-flex justify-content-lg-center">
        <div>
            <a class="mr-5" href="<?php echo base_url();?>fill/<?php echo $qnInfo[0]['questionnaire_id'] ?>">Questions</a>
        </div>
        <div>
            <a href="<?php echo base_url();?>responses/<?php echo $qnInfo[0]['questionnaire_id']?>">Responses</a>
        </div>
    </nav>
<div class="container py-5">
    <h1 class="text-center"><?php echo $qnInfo[0]['questionnaire_name'] ?></h1>
    <h2 class="text-secondary text-center"><?php echo $qnInfo[0]['questionnaire_subtext'] ?></h2>

    <div class="ml-5 ">
        <form action="<?php echo base_url()?>send-answers" method="post">
            <div style="display: none">
                <input type="text" name="uId" value="<?php echo $uId?>"></input>
                <input type="text" name="qnId" value="<?php echo $qnInfo[0]['questionnaire_id']?>"></input>
            </div>
            <?php foreach ($questionsInfo as $question) {
                echo '<div class="question mb-5">';
                echo '<fieldset id="' . $question['question_id'] . '">';
                echo '<h2>' . $question['question_name'] . '</h2>';
                echo '<h5 class="text-secondary">' . $question['question_subtext'] . '</h5>';
                for ($i = 0; $i < 8; $i++) {
                    if ($question['option_' . ($i + 1)] == null)
                        break;
                    echo '<div class="my-1">
            <input class="form-check-input ml-1" type="radio" name="' . $question['question_id'] . '" value="' . $question['option_' . ($i + 1)] . '">
            <label class="form-check-label ml-4" for="' . $question['question_id'] . '">' . $question['option_' . ($i + 1)] . '</label>
    </div>';
                }
                echo '</fieldset>';
                echo '</div>';
            } ?>
            <button type="submit" class="btn btn-primary col-4 m-3" id="fillForm">Send Answers</button>
        </form>
    </div>
    <h5 class="float-right"><strong>Creator:</strong> <a href="<?php echo base_url().'profile/'.$userInfo[0]['user_id'] ?>"><?php echo $userInfo[0]['user_name'] ?></a></h5>
</div>
</page>

<script>
    $(document).ready(function() {
        if($("input:radio[name='yourRadioName']").is(":checked")) {
            //its checked
        }
</script>
<?php include dirname(__DIR__, 1) . '/sections/footer.php'; ?>
