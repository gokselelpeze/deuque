<?php
if ($this->session->userdata('currently_logged_in'))
    include dirname(__DIR__, 1) . '/sections/header-user.php';
else
    include dirname(__DIR__, 1) . '/sections/header.php';

?>
<div class="container">
    <img src="<?php echo base_url()?>assets/img/success.png" class="mx-auto d-block" width="20%">
    <h1 class="text-center text-info">Your Questionnaire has been succesfully published!.</h1>
    <h4 class="text-center text-info">You can share your questionnaire with this link</h4>
    <h4 class="text-center text-danger">Questionnaire link:
        <a href="<?php echo base_url().'fill/'.$qnId?>"><?php echo base_url().'fill/'.$qnId?></a></h4>
    <br><br>
    <p class="text-info text-center">
        <a href="javascript:history.go(-1)" title="Return to the previous page">&laquo; Go back</a>
    </p>
</div>
<?php include dirname(__DIR__, 1) . '/sections/footer.php'; ?>
