<!DOCTYPE html>
<html>
    <head>
        <title>DeuQue</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/style/style.css">
        <link rel='icon' href='<?php echo base_url();?>/assets/img/deuqueLogo32.png' type='image/x-icon' sizes="32x32"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    </head>
    <body>
        <nav class="navbar navbar-expand-md navbar-dark fixed-top mb-5">
            <div class="mx-auto order-0">
                <a class="navbar-brand mx-auto" href="<?php echo base_url(); ?>">
                    <img src="<?php echo base_url() ?>assets/img/deuqueLogo.png">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".dual-collapse2">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
            <div class="navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="<?php echo base_url(); ?>questionnaires">Questionnaires</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url(); ?>about-us">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url(); ?>contact">Contact</a>
                    </li>
                </ul>
            </div>
            <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
                <ul class="navbar-nav ml-auto">
                    <li>
                        <form action="search" method="post" class="form-inline mt-2 mt-md-0">
                            <input class="form-control mr-sm-2" name="searched" type="text" placeholder="Search">
                            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                        </form>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url(); ?>login">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url(); ?>signup">Sign up</a>
                    </li>
                </ul>
            </div>
        </nav>
