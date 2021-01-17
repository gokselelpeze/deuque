<?php
if ($this->session->userdata('currently_logged_in'))
    include dirname(__DIR__, 1) . '/sections/header-user.php';
else
    include dirname(__DIR__, 1) . '/sections/header.php';
?>
<div class="container">
    <div class="pt-5 mt-5">
        <h1 class="text-center">Sign up</h1>
        <div class="row">
            <div class="col-md-5 mx-auto">
                <div class="card card-body">

                    <form id="submitForm" method="post" class="needs-validation" oninput='passconf.setCustomValidity(passconf.value != password.value ? "Passwords do not match." : "")' novalidate>
                        <input type="hidden" name="_csrf" value="7635eb83-1f95-4b32-8788-abec2724a9a4">
                        <div class="d-flex">
                            <div class="form-group required mr-1">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name" required>
                                <div class="valid-feedback">Valid.</div>
                                <div class="invalid-feedback">Please fill out this field.</div>
                            </div>
                            <div class="form-group">
                                <label for="surname">Surname</label>
                                <input type="text" class="form-control" id="surname" name="surname" placeholder="Enter Surname" required>
                                <div class="valid-feedback">Valid.</div>
                                <div class="invalid-feedback">Please fill out this field.</div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" class="form-control text-lowercase" id="username" name="username" placeholder="Enter Username(min 3 characters)" required>
                            <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback">Please fill out this field.</div>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" class="form-control text-lowercase" id="email" name="email" placeholder="Enter mail(e.g. someone@domain.com)" required>
                            <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback">Please fill out this field.</div>
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Enter password(min 6 characters)" required >
                            <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback">Please fill out this field.</div>
                        </div>
                        <div class="form-group">
                            <label for="passconf">Password Again</label>
                            <input type="password" class="form-control" id="passconf" name="passconf" placeholder="Enter your password again" required >
                            <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback">Password doesn't match!.</div>
                        </div>
                        <div class="form-group pt-1">
                            <button class="btn btn-primary btn-block" type="submit" value="Submit">Sign up</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    // Disable form submissions if there are invalid fields
    (function() {
        'use strict';
        window.addEventListener('load', function() {
            // Get the forms we want to add validation styles to
            var forms = document.getElementsByClassName('needs-validation');
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    })();
</script>
<?php include dirname(__DIR__, 1) . '/sections/footer.php';?>
