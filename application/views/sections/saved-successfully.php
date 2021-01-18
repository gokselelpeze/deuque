<?php
if ($this->session->userdata('currently_logged_in'))
    include dirname(__DIR__, 1) . '/sections/header-user.php';
else
    include dirname(__DIR__, 1) . '/sections/header.php';

?>
<div class="container">
    <img src="<?php echo base_url()?>assets/img/success.png" class="mx-auto d-block" width="20%">
    <h1 class="text-center text-info">Your Answers has been successfully sent!.</h1>
        <a href="<?php echo base_url()?>">Return to Homepage</a></h4>
</div>
<?php include dirname(__DIR__, 1) . '/sections/footer.php'; ?>
