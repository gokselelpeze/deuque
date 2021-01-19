<?php
if ($this->session->userdata('currently_logged_in'))
    include dirname(__DIR__, 1) . '/sections/header-user.php';
else
    include dirname(__DIR__, 1) . '/sections/header.php';

?>
<div class="container mt-3">
    <h1 class="text-center">Create Questionnaire</h1>
    <div class="d-flex">
        <div class="form-group col-12">
            <form method="post">
                <div class="form-group">
                    <label for="qnName">Questionaire name: </label>
                    <input type="text" class="form-control" placeholder="Untitled Questionnaire" id="qnName" name="qnName">
                </div>
                <div class="form-group">
                    <label for="description">Questionaire description: </label>
                    <input type="text" class="form-control" placeholder="Description" id="description" name="description">
                </div>
                <div class="form-group float-right">
                    <button type="submit" class="btn btn-primary" id="addQuestion">Continue</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php include dirname(__DIR__, 1) . '/sections/footer.php'; ?>

