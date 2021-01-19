<?php
if ($this->session->userdata('currently_logged_in'))
    include dirname(__DIR__, 1) . '/sections/header-user.php';
else
    include dirname(__DIR__, 1) . '/sections/header.php';

?>
<div class="container mt-5">
    <img src="<?php echo base_url()?>assets/img/oops.png" class="mx-auto d-block m-5" width="20%">
    <h1 class="text-center text-info">You can't edit a published questionnaire!.</h1>
    <h4 class="text-center text-danger">If you want, create a new one from
        <a href="<?php echo base_url().'questionnaire/blank'?>">here!</a></h4>
</div>
<?php include dirname(__DIR__, 1) . '/sections/footer.php'; ?>
