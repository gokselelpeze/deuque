<?php
if ($this->session->userdata('currently_logged_in'))
    include dirname(__DIR__, 1) . '/sections/header-user.php';
else
    include dirname(__DIR__, 1) . '/sections/header.php';
$qnInfo = json_decode(json_encode($qn), true);
$questionsInfo = json_decode(json_encode($questions), true);
$userInfo = json_decode(json_encode($user), true);
?>
<page size="A4">
    <nav class="d-flex justify-content-lg-center">
        <div>
            <a class="mr-5"
               href="<?php echo base_url(); ?>fill/<?php echo $qnInfo[0]['questionnaire_id'] ?>">Questions</a>
        </div>
        <div>
            <a href="<?php echo base_url(); ?>responses/<?php echo $qnInfo[0]['questionnaire_id'] ?>">Responses</a>
        </div>
    </nav>
    <div class="container mt-5 py-5">
        <h1 class="text-center"><?php echo $qnInfo[0]['questionnaire_name'] ?></h1>
        <h2 class="text-secondary text-center"><?php echo $qnInfo[0]['questionnaire_subtext'] ?></h2>
        <div class="">
            <ul class=" list-group p-2">
                <?php
                for ($i = 0; $i < 8; $i++) {
                    if ($questionsInfo[0]['option_' . ($i + 1)] != null) {
                        echo '<li class="d-flex justify-content-between list-group-item">
            <label for="option ' . $i . '">' . $questionsInfo[0]['option_' . ($i + 1)] . '</label>
                                </li>';
                    }
                }
                ?>
            </ul>
            <div class="ml-5 mt-3 pieChart">
                <script src='https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.1.4/Chart.bundle.min.js'></script>
                <script>
                    $(document).ready(function () {
                        <?php
                        $phpArray = array();
                        for ($i = 0; $i < 8; $i++) {
                            if ($questionsInfo[0]['option_' . ($i + 1)] != null)
                                $phpArray[$i] = $questionsInfo[0]['option_' . ($i + 1)];
                        }
                        ?>
                        var labelArr = <?php echo json_encode($phpArray); ?>;
                        var ctx = $("#chart-line");
                        var myLineChart = new Chart(ctx, {
                            type: 'pie',
                            data: {
                                labels: labelArr,
                                datasets: [{
                                    data: [1200, 1700, 800],
                                    backgroundColor: ["rgba(255, 0, 0, 0.5)", "rgba(100, 255, 0, 0.5)", "rgba(200, 50, 255, 0.5)"]
                                }]
                            },
                            options: {
                                title: {
                                    display: true,
                                    text: "<?php echo $questionsInfo[0]['question_name']?>"
                                }
                            }
                        });
                    });
                </script>
                <div class="page-content page-container" id="page-content">
                    <div class="padding">
                        <div class="row">
                            <div class="container-fluid d-flex justify-content-center">
                                <div class="col-sm-8 col-md-6">
                                    <div class="chartjs-size-monitor"
                                         style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;">
                                        <div class="chartjs-size-monitor-expand"
                                             style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                                            <div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div>
                                        </div>
                                        <div class="chartjs-size-monitor-shrink"
                                             style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                                            <div style="position:absolute;width:200%;height:200%;left:0; top:0"></div>
                                        </div>
                                    </div>
                                    <canvas id="chart-line" width="299" height="200" class="chartjs-render-monitor"
                                            style="display: block; width: 299px; height: 200px;"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <h5 class="float-right"><strong>Creator:</strong> <a
                    href="<?php echo base_url() . 'profile/' . $userInfo[0]['user_id'] ?>"><?php echo $userInfo[0]['user_name'] ?></a>
        </h5>
    </div>
</page>


<?php include dirname(__DIR__, 1) . '/sections/footer.php'; ?>
