<?php
if ($this->session->userdata('currently_logged_in'))
    include dirname(__DIR__, 1) . '/sections/header-user.php';
else
    include dirname(__DIR__, 1) . '/sections/header.php';

?>

<div class="card mt-3">
    <div class="card-header bg-primary text-white font-weight-bolder bg-success"><p class="text-uppercase">Anket 1</p>
    </div>

</div>
<div class="container mt-5">
    <div class="d-flex">
        <form action="olusanAnket" method="post">
            <label>soru</label>
            <input type="text" class="form-control" name="qnCount" id="qnCount">
            <label>sık sayısı</label>
            <input type="text" class="form-control" name="optCount" id="optCount">
            <button type="submit" class="btn btn-primary col-4" id="createQn">create qn</button>
        </form>
    </div>


    <?php include dirname(__DIR__, 1) . '/sections/footer.php'; ?>

