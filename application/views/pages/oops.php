<!DOCTYPE html>
<html>
    <head>
        <title>DEUQUE HOMEPAGE</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/style/oops.css"/>
        <script src="<?php echo base_url(); ?>assets/style/toastr.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="error-template">
                        <h1>
                            Oops!</h1>
                        <h2>
                            404 Not Found</h2>
                        <div class="error-details">
                            Sorry, an error has occured, Requested page not found!
                        </div>
                        <div class="error-actions">
                            <a href="<?php echo base_url(); ?>" class="btn btn-primary btn-lg">
                                <i class="fa fa-home fa-lg"></i>
                                Take Me Home </a>
                            <a href="contact"class="btn btn-secondary btn-lg">
                                <i class="fa fa-headphones fa-lg"></i>
                                Contact Support </a>
                        </div>
                    </div>
                </div>
            </div>
    </body>
</html>