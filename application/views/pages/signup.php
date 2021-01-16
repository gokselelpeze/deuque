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

                            <form id="submitForm" action="../login" method="post" data-parsley-validate=""
                                  data-parsley-errors-messages-disabled="true" novalidate="" _lpchecked="1"><input
                                        type="hidden" name="_csrf" value="7635eb83-1f95-4b32-8788-abec2724a9a4">
                                <div class="form-group required">
                                    <label for="username">Username</label>
                                    <input type="text" class="form-control text-lowercase" id="username" required
                                           name="username" value="">
                                </div>
                                <div class="form-group required">
                                    <label for="email">Email</label>
                                    <input type="text" class="form-control text-lowercase" id="email" required
                                           name="email" value="">
                                </div>
                                <div class="form-group required">
                                    <label class="d-flex flex-row align-items-center" for="password">Password</label>
                                    <input type="password" class="form-control" required id="password" name="password"
                                           value="">
                                </div>
                                <div class="form-group required">
                                    <label class="d-flex flex-row align-items-center" for="password">Password
                                        Again</label>
                                    <input type="password" class="form-control" required id="passwordAgain"
                                           name="passwordAgain" value="">
                                </div>
                                <div class="form-group pt-1">
                                    <button class="btn btn-primary btn-block" type="submit">Sign up</button>
                                </div>
                            </form>
                            <p class="small-xl pt-3 text-center">
                                <a href="../login">Go back to login page</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<?php include dirname(__DIR__, 1) . '/sections/footer.php';?>
