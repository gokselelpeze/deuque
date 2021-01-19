<?php
if ($this->session->userdata('currently_logged_in')){
    include dirname(__DIR__, 1) . '/sections/header-user.php';
    $uId = $this->session->userdata('user_id');
}
else
    include dirname(__DIR__, 1) . '/sections/header.php';

?>
<div class="container">
    <img src="<?php echo base_url()?>assets/img/oops.png" class="mx-auto d-block" width="20%">
    <h1 class="text-center text-info">It looks like you have already solved this questionnaire.!.<i class="fa fa-grin-beam"></i></h1>
    <h4 class="text-center text-info">Sorry, You have been unable to solve the questionnaire more than once.</h4><br>
</div>
<?php include dirname(__DIR__, 1) . '/sections/footer.php'; ?>
