<?php
if ($this->session->userdata('currently_logged_in'))
    include dirname(__DIR__, 1) . '/sections/header-user.php';
else
    include dirname(__DIR__, 1) . '/sections/header.php';
?>
    <div class="container mt-5">
        <div class="row py-3">
            <div class="col-12 mt-5">
                <h4>We are a team from Dokuz Eylül University Computer Engineering students.</h4><br>
                <p>You can access our social media profiles from the links below.</p>
            </div>
            <div class="col-sm-4">
                <div class="card">
                    <img class="card-img-top" src="<?php echo base_url() ?>assets/img/ibrahim.jpg" alt="Card image"
                         style="width:100%">
                    <div class="card-body">
                        <h4 class="card-title">Halil İbrahim ÇAĞIRKAN</h4>
                        <p class="card-text">Some example text some example text. John Doe is an architect and
                            engineer</p>
                        <div class="d-flex justify-content-center">
                            <ul class="social-network social-circle">
                                <li><a href="#" target="_blank" class="icoFacebook" title="Facebook"><i
                                                class="fa fa-facebook"></i></a></li>
                                <li><a href="https://www.linkedin.com/in/çağırkan/" target="_blank" class="icoLinkedin"
                                       title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#" target="_blank" class="icoInstagram" title="Instagram"><i
                                                class="fa fa-instagram"></i></a></li>
                                <li><a href="#" target="_blank" class="icoTwitter" title="Twitter"><i
                                                class="fa fa-twitter"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card">
                    <img class="card-img-top" src="<?php echo base_url() ?>assets/img/ibrahim.jpg" alt="Card image"
                         style="width:100%">
                    <div class="card-body">
                        <h4 class="card-title">Gökhan Göksel Elpeze</h4>
                        <p class="card-text">Some example text some example text. John Doe is an architect and
                            engineer</p>
                        <div class="d-flex justify-content-center">
                            <ul class="social-network social-circle">
                                <li><a href="#" target="_blank" class="icoFacebook" title="Facebook"><i
                                                class="fa fa-facebook"></i></a></li>
                                <li><a href="https://www.linkedin.com/in/çağırkan/" target="_blank" class="icoLinkedin"
                                       title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#" target="_blank" class="icoInstagram" title="Instagram"><i
                                                class="fa fa-instagram"></i></a></li>
                                <li><a href="#" target="_blank" class="icoTwitter" title="Twitter"><i
                                                class="fa fa-twitter"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card">
                    <img class="card-img-top" src="<?php echo base_url() ?>assets/img/ibrahim.jpg" alt="Card image"
                         style="width:100%">
                    <div class="card-body">
                        <h4 class="card-title">Berhan Türkü Ay</h4>
                        <p class="card-text">Some example text some example text. John Doe is an architect and
                            engineer</p>
                        <div class="d-flex justify-content-center">
                            <ul class="social-network social-circle">
                                <li><a href="#" target="_blank" class="icoFacebook" title="Facebook"><i
                                                class="fa fa-facebook"></i></a></li>
                                <li><a href="https://www.linkedin.com/in/çağırkan/" target="_blank" class="icoLinkedin"
                                       title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#" target="_blank" class="icoInstagram" title="Instagram"><i
                                                class="fa fa-instagram"></i></a></li>
                                <li><a href="#" target="_blank" class="icoTwitter" title="Twitter"><i
                                                class="fa fa-twitter"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php include dirname(__DIR__, 1) . '/sections/footer.php'; ?>