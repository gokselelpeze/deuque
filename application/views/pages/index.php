<?php
if ($this->session->userdata('currently_logged_in'))
    include dirname(__DIR__, 1) . '/sections/header-user.php';
else
    include dirname(__DIR__, 1) . '/sections/header.php';
?>
<!--        <div class="jumbotron text-center justify-content-center">-->
<!--            <h1>Create and Share Your Questions</h1>-->
<!--            <p>The easy way to create questionnaire,create analyze, take questionnaires</p>-->
<!--        </div>-->
    <div class="jumbotron">
        <div class="d-flex text-center justify-content-center">

            <div class="col text-left ml-5">
                <h1>Where the world <br> produces questionnaires</h1>
                <p>
                    Millions of people and companies create, share and analyze<br>
                    their questionnaires on DeuQue before making a decision. <br>
                    The world's largest and most advanced questionnaire platform
                </p>
<!--                BURADA EMAILI ALIP SIGN UP A GIDICEK EMAIL FILLENCEK OTO-->
                <form action="signup" method="post" class="form-inline mt-2 mt-md-0">
                    <input class="form-control mr-sm-2" name="emailSign" type="text" placeholder="Email Address">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Sign Up Now</button>
                </form>
            </div>
            <div class="col">
                <img src="<?php echo base_url() ?>assets/img/deuque.png">
            </div>
        </div>

        <div class=" justify-content-left">

        </div>
        <div class="mt-5">
            <?php include dirname(__DIR__, 1) . '/sections/customer-reviews.php'; ?>

        </div>

    </div>


<?php include dirname(__DIR__, 1) . '/sections/footer.php'; ?>