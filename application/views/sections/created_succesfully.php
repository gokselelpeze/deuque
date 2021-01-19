<?php
if ($this->session->userdata('currently_logged_in')){
    include dirname(__DIR__, 1) . '/sections/header-user.php';
    $uId = $this->session->userdata('user_id');
}
else
    include dirname(__DIR__, 1) . '/sections/header.php';

?>
<div class="container">
    <img src="<?php echo base_url()?>assets/img/success.png" class="mx-auto d-block" width="20%">
    <h1 class="text-center text-info">Your Questionnaire has been successfully saved!.<i class="fa fa-grin-beam"></i></h1>
    <h4 class="text-center text-info">To see your questionnaire link:
    <a href="<?php echo base_url().'fill/'.$qnId?>"><?php echo base_url().'fill/'.$qnId?></a></h4><br>
    <h4 class="text-center">But your survey is not online yet. You can go to your <a href="<?php echo base_url().'profile/'.$uId?>">profile</a> to publish your questionnaire</h4>
</div>
<?php include dirname(__DIR__, 1) . '/sections/footer.php'; ?>
