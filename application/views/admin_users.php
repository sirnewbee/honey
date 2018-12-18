

      <div class="container-fluid mt-5">
        <h2 class="text-center text-uppercase text-secondary mt-5">Products</h2>
        <hr class="star-dark mb-5">

        <table class="table table-hover">
          <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Firstname</th>
            <th scope="col">Lastname</th>
            <th scope="col">Address</th>
            <th scope="col">Birthdate</th>
            <th scope="col">Email</th>
            <th scope="col">Account Type</th>
            <th scope="col">Account Status</th>
          </tr>
          </thead>
          <?php foreach($users as $i){ ?>
          <tbody>
            <tr>
              <td><?php echo $i->account_id ?></td>
              <form action="<?php echo base_url('/index.php/Users_controller/update_users') ?>" method="POST">
                <td><input type="text" name="firstname" value="<?php echo $i->firstname; ?>"></td>
                <td><input type="text" name="lastname" value="<?php echo $i->lastname; ?>"></td>
                <td><input type="text" name="address" value="<?php echo $i->address; ?>"></td>
                <td><input type="date" name="dob" value="<?php echo $i->dob; ?>"></td>
                <td><input type="text" name="email" value="<?php echo $i->email; ?>"></td>
                <td><input type="text" name="account_type" value="<?php echo $i->account_type; ?>"></td>
                <td><input type="text" name="account_status" value="<?php echo $i->account_status; ?>"></td>
                <td><input type="Submit" value="Update"></td>
              </form>
            </tr>
          <?php } ?>
          </tbody>
        </table>

    
