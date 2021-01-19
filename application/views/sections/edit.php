<?php
if ($this->session->userdata('currently_logged_in'))
    include dirname(__DIR__, 1) . '/sections/header-user.php';
else
    include dirname(__DIR__, 1) . '/sections/header.php';

$qnInfo = json_decode(json_encode($qn), true);
$questionInfo = json_decode(json_encode($questions), true);
/*var_dump($questionInfo);*/
?>
<div class="container">
    <h1 class="text-center display-3"><?php echo $qnInfo[0]['questionnaire_name']?></h1>
    <div class="row">
        <?php
            for ($i = 0; $i< count($questionInfo); $i++){
                echo '
                 <div class="form-group col-12 jumbotron">
            <form method="post" action="'.base_url().'update-question/">
                <div class="form-group" style="display: none">
                    <input type="text" class="form-control" id="qnId" name="qnId" value="'.$qnInfo[0]['questionnaire_id'].'">
                </div>
                <div class="form-group" style="display: none">
                    <input type="text" class="form-control" id="qnName" name="qnName" value="'.$qnInfo[0]['questionnaire_name'].'">
                </div>
                <div class="form-group" style="display: none">
                    <input type="text" class="form-control" id="questionId" name="questionId" value="'.$questionInfo[$i]['question_id'].'">
                </div>
                <div class="form-group">
                    <label for="qnName">Question: </label>
                    <input type="text" class="form-control" placeholder="Enter Question" id="questionName" name="questionName" value="'.$questionInfo[$i]['question_name'].'">
                </div>
                <div class="form-group">
                    <label for="description">Question description: </label>
                    <input type="text" class="form-control" placeholder="Specify your question(optional)" id="questionDescription" name="questionDescription" value="'.$questionInfo[$i]['question_subtext'].'">
                </div>
                ';
                for ($j = 1; $j <=8; $j++){
                    echo '
                     <div class="form-group">
                         <label for="description">Option '.$j.': </label>
                         <input type="text" class="form-control" placeholder="Enter a answer" id="option'.$j.'" name="option'.$j.'"value = "'.$questionInfo[$i]['option_'.$j].'">
                    </div>';
                }
                echo '
                <div class="form-group float-right">
                    <button type="submit" name="action" class="btn btn-danger mx-2" id="finish" value="save'.$i.'">Save Question</button>
                </div>
            </form>
        </div>
                ';
            }
        ?>

    </div>
</div>

<?php include dirname(__DIR__, 1) . '/sections/footer.php'; ?>

