<!DOCTYPE html>
<html>
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Register</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url('/assets/vendor/bootstrap/css/bootstrap.min.css')?>" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Plugin CSS -->
    <link href="<?php echo base_url('/assets/vendor/magnific-popup/magnific-popup.css')?>" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url('/assets/css/freelancer.min.css')?>" rel="stylesheet">

  </head>
<body>
<section id="register">
      <div class="container">
        <h2 class="text-center text-uppercase text-secondary mb-0">Register Account</h2>
        <hr class="mb-5">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <form name="sentMessage" id="contactForm" novalidate="novalidate">
              <div class="control-group">
                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                  <label>First Name</label>
                  <input class="form-control" id="fname" type="text" placeholder="First Name" required="required" data-validation-required-message="Please enter your First Name.">
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="control-group">
                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                  <label>Last Name</label>
                  <input class="form-control" id="lname" type="text" placeholder="Last Name" required="required" data-validation-required-message="Please enter your Last Name.">
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="control-group">
                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                  <label>Password</label>
                  <input class="form-control" id="pass" type="password" placeholder="Password" required="required" data-validation-required-message="Please enter your password.">
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="control-group">
                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                  <label>Password2</label>
                  <input class="form-control" id="pass2" type="password" placeholder="Re-type password" required="required" data-validation-required-message="Please enter your password again.">
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="control-group">
                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                  <label>Email</label>
                  <input class="form-control" id="email" type="text" placeholder="Email" required="required" data-validation-required-message="Please enter your email">
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="control-group">
                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                  <label>Birthdate</label>
                  <input class="form-control" id="email" type="date" placeholder="Birthdate" required="required" data-validation-required-message="Please enter your Birthdate">
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <br>
              <div id="success"></div>
              <div class="form-group">
                <button type="submit" class="btn btn-primary btn-xl" id="sendMessageButton">Submit</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
        <!-- Bootstrap core JavaScript -->
    <script src="<?php echo base_url('/assets/vendor/jquery/jquery.min.js')?>"></script>
    <script src="<?php echo base_url('/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')?>"></script>

    <!-- Plugin JavaScript -->
    <script src="<?php echo base_url('/assets/vendor/jquery-easing/jquery.easing.min.js')?>"></script>
    <script src="<?php echo base_url('/assets/vendor/magnific-popup/jquery.magnific-popup.min.js')?>"></script>

    <!-- Contact Form JavaScript -->
    <script src="<?php echo base_url('/assets/js/jqBootstrapValidation.js')?>"></script>
    <script src="<?php echo base_url('/assets/js/contact_me.js')?>"></script>

    <!-- Custom scripts for this template -->
    <script src="<?php echo base_url('/assets/js/freelancer.min.js')?>"></script>

</body>
</html>