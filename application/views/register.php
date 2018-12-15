<section id="register">
      <div class="container">
        <h2 class="text-center text-uppercase text-secondary mb-0">Register Account</h2>
        <hr class="mb-5">
        <div class="row">
          <div class="col-lg-8 mx-auto">
              <div class="control-group">
                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                <form action="<?php echo base_url('/index.php/Create_account/create_user'); ?>" method="post">

                  <label>First Name</label>
                  <input class="form-control" name="firstname" id="firstname" type="text" placeholder="First Name" data-validation-required-message="Please enter your First Name.">

                  <label>Last Name</label>
                  <input class="form-control" name="lastname" id="lastname" type="text" placeholder="Last Name" data-validation-required-message="Please enter your Last Name.">
                
                  <label>Password</label>
                  <input class="form-control" name="password" id="password" type="password" placeholder="Password" data-validation-required-message="Please enter your password.">
                
                  <label>Password2</label>
                  <input class="form-control" name="password2" id="password2" type="password" placeholder="Re-type password" data-validation-required-message="Please enter your password again.">
                
                  <label>Email</label>
                  <input class="form-control" name="email" id="email" type="text" placeholder="Email" data-validation-required-message="Please enter your email">
                
                  <label>Address</label>
                  <input class="form-control" name="address" id="address" type="text" placeholder="Address" data-validation-required-message="Please enter your email">

                  <label>Birthdate</label>
                  <input class="form-control" name="dob" id="dob" type="date" placeholder="Birthdate" data-validation-required-message="Please enter your Birthdate">
                
                  <button type="submit" class="btn btn-primary btn-xl" id="sendMessageButton">Submit</button>


                </form>
              </div>
            </div>
            
          </div>
        </div>
      </div>
    </section>