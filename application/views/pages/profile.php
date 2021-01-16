<?php
if ($this->session->userdata('currently_logged_in'))
    include dirname(__DIR__, 1) . '/sections/header-user.php';
else
    include dirname(__DIR__, 1) . '/sections/header.php';
?>
<div class="container">
    <div><p><label for="x"></label></p></div>
    <div><p><label for="x"></label></p></div>

    <div class="row mt-4 ml-3 justify-content-center">
        <div class="col-md-4 col-4">
            <div class="card">
                <div class="d-flex justify-content-center">
                    <img alt="" class="avatar width-full rounded-2 rounded-0"
                         src="<?php base_url() ?>assets/img/ibrahim.jpg">
                </div>
                <div>
                    <dd style="color: #AA0000;"><?php echo $this->session->userdata('username')?>
                    <dd class="profile-rank">Member
                    <dd class="questionnaire-count"><strong>Questionnaires:</strong> 4
                    <dd class="profile-joined"><strong>Joined:</strong> Wed Jul 19, 2017 1:36 am
                </div>
            </div>
        </div>
        <div class="col-8">
            <label for=""></label> <strong>QUESTIONNAIRES</strong>
            <ul class=" list-group p-2">
                <li class="d-flex justify-content-between list-group-item"><a href="#">Anket 1 : Halil</a>
                <div>
                    <button class="btn-secondary" disabled>Edit <i class="fa fa-pencil"></i></button>
                    <button class="btn-primary">Publish <i class="fa fa-toggle-on"></i></button>
                    <button class="btn-primary">Share <i class="fa fa-share-alt"></i></button>
                </div>
                </li>
            </ul>
            <div class="form-group has-search">
                <span class="fa fa-search form-control-feedback"></span>
                <input type="text" class="form-control" placeholder="Search">
            </div>
        </div>
    </div>
</div>
<?php include dirname(__DIR__, 1) . '/sections/footer.php';?>
