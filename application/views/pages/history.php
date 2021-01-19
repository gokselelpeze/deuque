<?php
if ($this->session->userdata('currently_logged_in'))
    include dirname(__DIR__, 1) . '/sections/header-user.php';
else
    include dirname(__DIR__, 1) . '/sections/header.php';
$questionnaires = json_decode(json_encode($deletedQns), true);

?>

    <div class="jumbotron">
        <div class="my-3 p-3 bg-white rounded shadow-sm">
            <?php

            echo '<h6 class="border-bottom border-gray pb-2 mb-0">' . sizeof($questionnaires) . ' Questionnaire Found</h6>';
            foreach ($questionnaires as $row) {
                $rand = str_pad(dechex(rand(0x000000, 0xFFFFFF)), 6, 0, STR_PAD_LEFT);

                echo '            <div class="media text-muted pt-3">
                <svg class="bd-placeholder-img mr-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg"
                     preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32">
                    <title>Placeholder</title>
                    <rect width="100%" height="100%" fill="' . '#' . $rand . '" />
                    <text x="50%" y="50%" fill="' . '#' . $rand . '" dy=".3em"></text>
                </svg>
                <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                    <a href="' . base_url() . 'fill/' . $row['questionnaire_id'] . '">
                        <strong class="d-block text-gray-dark">' . $row['questionnaire_name'] . '</strong>
                    </a>
                    ' . $row['questionnaire_subtext'] . '
                </p>
                <a href ="' . base_url() . 'delete/' . $row['questionnaire_id'] . '">
                    <button>Delete</button>
                </a>
            </div>';
            }
            ?>
            <small class="d-block text-right mt-3">
                <a href="#">All updates</a>
            </small>
        </div>
        <br>


    </div>

<?php include dirname(__DIR__, 1) . '/sections/footer.php'; ?>