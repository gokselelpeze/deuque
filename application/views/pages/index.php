<?php
if ($this->session->userdata('currently_logged_in'))
    include dirname(__DIR__, 1) . '/sections/header-user.php';
else
    include dirname(__DIR__, 1) . '/sections/header.php';
?>
    <div class="bg-warning">
        <div class="container text-center">
            <br>
            <br>
            <br>
            <h1>Create and Share Your Questions</h1>
            <p>The easy way to create questionnaire,create analyze, take questionnaires</p>
        </div>
        <div class="jumbotron text-center bg-info">
            <?php include dirname(__DIR__, 1) . '/sections/customer-reviews.php'; ?>

        </div>
    </div>

<?php include dirname(__DIR__, 1) . '/sections/footer.php'; ?>