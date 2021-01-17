<?php
if ($this->session->userdata('currently_logged_in'))
    include dirname(__DIR__, 1) . '/sections/header-user.php';
else
    include dirname(__DIR__, 1) . '/sections/header.php';
$qnInfo = json_decode(json_encode($qn), true);
$questionsInfo = json_decode(json_encode($questions), true);
$userInfo = json_decode(json_encode($user), true);
?>
<div class="container mt-5 py-5">
    <h1 class="text-center"><?php echo $qnInfo[0]['questionnaire_name'] ?></h1>
    <h2 class="text-secondary text-center"><?php echo $qnInfo[0]['questionnaire_subtext'] ?></h2>
    <div class="ml-5 mt-3">
        <form>
            <?php foreach ($questionsInfo as $question) {
                echo '<fieldset id="' . $question['question_id'] . '">';
                echo '<h2>' . $question['question_name'] . '</h2>';
                echo '<h5 class="text-secondary">' . $question['question_subtext'] . '</h5>';
                for ($i = 0; $i < 8; $i++) {
                    if ($question['option_' . ($i + 1)] == null)
                        break;
                    echo '<div class="my-1">
            <input class="form-check-input" type="radio" name="' . $question['question_id'] . '" value="' . $question['option_' . ($i + 1)] . '">
            <label class="form-check-label" for="exampleRadios1">
                ' . $question['option_' . ($i + 1)] . '
            </label>
    </div>';
                }
                echo '</fieldset>';
            } ?>
            <button type="submit" class="btn btn-primary col-4 m-3" id="fillForm">Send</button>
        </form>
    </div>
    <h5 class="float-right"><strong>Creator:</strong> <a href="<?php echo base_url().'profile/'.$userInfo[0]['user_id'] ?>"><?php echo $userInfo[0]['user_name'] ?></a></h5>
</div>

<?php include dirname(__DIR__, 1) . '/sections/footer.php'; ?>
