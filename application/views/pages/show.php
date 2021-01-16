<?php
if ($this->session->userdata('currently_logged_in'))
    include dirname(__DIR__, 1) . '/sections/header-user.php';
else
    include dirname(__DIR__, 1) . '/sections/header.php';
?>
<div class="container mt-5 py-4">
    <h2 class="text-center">Anket Adı</h2>
    <h3 class="text-center">Anket Açıklaması</h3>
    <form></form>
    <div class="form-group border border-info rounded p-3">
        <h3>Soru Adı</h3>
        <h4>Soru Açıklaması</h4>
        <div class="form-check">
            <label class="form-check-label">
                <input type="radio" class="form-check-input" name="optradio">Option 1
            </label>
        </div>
        <div class="form-check">
            <label class="form-check-label">
                <input type="radio" class="form-check-input" name="optradio">Option 2
            </label>
        </div>
        <div class="form-check">
            <label class="form-check-label">
                <input type="radio" class="form-check-input" name="optradio" disabled>Option 3
            </label>
        </div>
    </div>
</div>
<?php include dirname(__DIR__, 1) . '/sections/footer.php';?>

