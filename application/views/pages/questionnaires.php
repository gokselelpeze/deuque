<?php
if ($this->session->userdata('currently_logged_in'))
    include dirname(__DIR__, 1) . '/sections/header-user.php';
else
    include dirname(__DIR__, 1) . '/sections/header.php';
$recentQuestionnaires = json_decode(json_encode($recentQns), true);
$popularQuestionnaires = json_decode(json_encode($popularQns), true);
?>
<div class="jumbotron">
    <h3 class="mt-2">Start a new Questionnaire</h3>
    <div class="container mt-5  text-center">
        <div class="card-deck">
            <div class="card">
                <a href="questionnaire/blank">
                    <img class="card-img-top"
                         src="https://ssl.gstatic.com/docs/templates/thumbnails/forms-blank-googlecolors.png"
                         alt="Card image cap">
                </a>
                <div class="card-body">
                    <h5 class="card-title">Blank</h5>
                </div>
            </div>
            <div class="card">
                <img class="card-img-top"
                     src="https://ssl.gstatic.com/docs/templates/thumbnails/1mNJe_n2CMclvGS8ZCBFUQxx_PSODuzFa6uEQ1JABtBA_400_1.png"
                     alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Contact Information</h5>
                </div>
            </div>
            <div class="card">
                <img class="card-img-top"
                     src="https://ssl.gstatic.com/docs/templates/thumbnails/1u4pEuXuGo7hc95_keiXytm5qcK4WBDSEoVvJUeU8Z6Y_400_1.png"
                     alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Event Registration</h5>
                </div>
            </div>
            <div class="card">
                <img class="card-img-top"
                     src="https://ssl.gstatic.com/docs/templates/thumbnails/1X7ygiTcf4-KU8dzSt0j2DX7748qBoz8VsmOEcpkWIK4_400.png"
                     alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Party Invite</h5>
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>
    <div class="my-3 p-3 bg-white rounded shadow-sm">
        <?php

        echo '<h6 class="border-bottom border-gray pb-2 mb-0">Recently Created Questionnaires</h6>';
        foreach ($recentQuestionnaires as $row)
        {
            $rand = str_pad(dechex(rand(0x000000, 0xFFFFFF)), 6, 0, STR_PAD_LEFT);

            echo '            <div class="media text-muted pt-3">
                <svg class="bd-placeholder-img mr-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg"
                     preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32">
                    <title>Placeholder</title>
                    <rect width="100%" height="100%" fill="'.'#'.$rand.'" />
                    <text x="50%" y="50%" fill="'.'#'.$rand.'" dy=".3em"></text>
                </svg>
                <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                    <a href="'.base_url().'fill/'.$row['questionnaire_id'].'">
                        <strong class="d-block text-gray-dark">'.$row['questionnaire_name'].'</strong>
                    </a>
                    '.$row['questionnaire_subtext'].'
                </p>
                
            </div>';
        }
        ?>
        <small class="d-block text-right mt-3">
            <a href="#">All updates</a>
        </small>
    </div>
    <br>
    <br>
    <div class="my-3 p-3 bg-white rounded shadow-sm">
        <?php

        echo '<h6 class="border-bottom border-gray pb-2 mb-0">Popular Questionnaires</h6>';
        foreach ($popularQuestionnaires as $row)
        {
            $rand = str_pad(dechex(rand(0x000000, 0xFFFFFF)), 6, 0, STR_PAD_LEFT);

            echo '            <div class="media text-muted pt-3">
                <svg class="bd-placeholder-img mr-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg"
                     preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32">
                    <title>Placeholder</title>
                    <rect width="100%" height="100%" fill="'.'#'.$rand.'" />
                    <text x="50%" y="50%" fill="'.'#'.$rand.'" dy=".3em"></text>
                </svg>
                <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                    <a href="'.base_url().'fill/'.$row['questionnaire_id'].'">
                        <strong class="d-block text-gray-dark">'.$row['questionnaire_name'].'</strong>
                    </a>
                    '.$row['questionnaire_subtext'].'
                </p>
                
            </div>';
        }
        ?>
        <small class="d-block text-right mt-3">
            <a href="#">All updates</a>
        </small>
    </div>
    </div>
</div>
<div>


</div>

<?php include dirname(__DIR__, 1) . '/sections/footer.php';?>
