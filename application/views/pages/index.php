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
                <form class="form-inline">
                    <input class="form-control mr-sm-2" type="text" placeholder="Email Adress" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Sign Up Now</button>
                </form>
            </div>
            <div class="col">
                <img src="<?php echo base_url() ?>assets/img/deuque.png">
            </div>
        </div>
        <div class="my-3 p-3 bg-white rounded shadow-sm">
            <h6 class="border-bottom border-gray pb-2 mb-0">Recent updates</h6>
            <div class="media text-muted pt-3">
                <svg class="bd-placeholder-img mr-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title><rect width="100%" height="100%" fill="#007bff"/><text x="50%" y="50%" fill="#007bff" dy=".3em">32x32</text></svg>
                <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                    <strong class="d-block text-gray-dark">@username</strong>
                    Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.
                </p>
            </div>
            <div class="media text-muted pt-3">
                <svg class="bd-placeholder-img mr-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title><rect width="100%" height="100%" fill="#e83e8c"/><text x="50%" y="50%" fill="#e83e8c" dy=".3em">32x32</text></svg>
                <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                    <strong class="d-block text-gray-dark">@username</strong>
                    Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.
                </p>
            </div>
            <div class="media text-muted pt-3">
                <svg class="bd-placeholder-img mr-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title><rect width="100%" height="100%" fill="#6f42c1"/><text x="50%" y="50%" fill="#6f42c1" dy=".3em">32x32</text></svg>
                <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                    <strong class="d-block text-gray-dark">@username</strong>
                    Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.
                </p>
            </div>
            <small class="d-block text-right mt-3">
                <a href="#">All updates</a>
            </small>
        </div>
        <div class=" justify-content-left">

        </div>
        <div class="mt-5">
            <?php include dirname(__DIR__, 1) . '/sections/customer-reviews.php'; ?>

        </div>

    </div>


<?php include dirname(__DIR__, 1) . '/sections/footer.php'; ?>