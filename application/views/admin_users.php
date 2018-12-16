
    <!-- Product Grid Section -->
    <section class="portfolio" id="portfolio">
      <div class="container">
        <h2 class="text-center text-uppercase text-secondary mb-0">Products</h2>
        <hr class="star-dark mb-5">
        <div class="row">

        <?php echo form_open_multipart('Products_controller/do_upload');?>
          <input type="file" name="userfile" size="20" />
          <input type="text" name="product" placeholder="Product Name">
          <input type="text" name="product_description" placeholder="Product Description">
          <input type="number" name="price" placeholder="Product Price">
          <input type="number" name="inventory" placeholder="Inventory">
          
          <input type="submit" value="upload">
        </form>
        <br/>

        <style>
          table, tr, td , th{
            border: 1px solid black;
          }

          img{
            max-width: 50px;
            max-height: 70px
          }
        </style>
        <table>
          <tr>
            <th>ID</th>
            <th>Firstname</th>
            <th>Lastname</th>
            <th>Address</th>
            <th>Birthdate</th>
            <th>Email</th>
            <th>Account Type</th>
            <th>Account Status</th>
          </tr>
          <?php foreach($users as $i){ ?>
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
        </table>

          <!-- <div class="col-md-6 col-lg-4">
            <a class="portfolio-item d-block mx-auto" href="#portfolio-modal-1">
              <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
                <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
                  <i class="fas fa-search-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="<?php echo base_url('/assets/img/product.png')?>" alt="">
            </a>
          </div>
          <div class="col-md-6 col-lg-4">
            <a class="portfolio-item d-block mx-auto" href="#portfolio-modal-1">
              <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
                <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
                  <i class="fas fa-search-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="<?php echo base_url('/assets/img/product.png')?>" alt="">
            </a>
          </div>
          <div class="col-md-6 col-lg-4">
            <a class="portfolio-item d-block mx-auto" href="#portfolio-modal-1">
              <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
                <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
                  <i class="fas fa-search-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="<?php echo base_url('/assets/img/product.png')?>" alt="">
            </a>
          </div>
          <div class="col-md-6 col-lg-4">
            <a class="portfolio-item d-block mx-auto" href="#portfolio-modal-1">
              <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
                <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
                  <i class="fas fa-search-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="<?php echo base_url('/assets/img/product.png')?>" alt="">
            </a>
          </div>
          <div class="col-md-6 col-lg-4">
            <a class="portfolio-item d-block mx-auto" href="#portfolio-modal-1">
              <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
                <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
                  <i class="fas fa-search-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="<?php echo base_url('/assets/img/product.png')?>" alt="">
            </a>
          </div>
          <div class="col-md-6 col-lg-4">
            <a class="portfolio-item d-block mx-auto" href="#portfolio-modal-1">
              <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
                <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
                  <i class="fas fa-search-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="<?php echo base_url('/assets/img/product.png')?>" alt="">
            </a>
          </div>
        </div>
      </div>
    </section> -->

    
    <!-- Footer -->

    <footer class="footer text-center">
      <div class="container">
        <div class="row">
          <div class="col-md-4 mb-5 mb-lg-0">
            <h4 class="text-uppercase mb-4">Location</h4>
            <p class="lead mb-0">Paragayo Sinacaban , Misamis Occidental
            </p>
          </div>
          <div class="col-md-4 mb-5 mb-lg-0">
            <h4 class="text-uppercase mb-4">Around the Web</h4>
            <ul class="list-inline mb-0">
              <li class="list-inline-item">
                <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                  <i class="fab fa-fw fa-facebook-f"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                  <i class="fab fa-fw fa-google-plus-g"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                  <i class="fab fa-fw fa-twitter"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                  <i class="fab fa-fw fa-linkedin-in"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                  <i class="fab fa-fw fa-dribbble"></i>
                </a>
              </li>
            </ul>
          </div>
          <div class="col-md-4">
            <h4 class="text-uppercase mb-4">Office Hours</h4>
            <p class="lead mb-0">Monday 7:30 - 4:30<br>
              Wednesday 8:30 - 6:00<br>
              Friday 10:00 - 6:00<br>
              Saturday 8:30 - 6:00
          </div>
        </div>
      </div>
    </footer>

    <div class="copyright py-4 text-center text-white">
      <div class="container">
        <small>Copyright &copy; Honest Honey 2018</small>
      </div>
    </div>

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-to-top d-lg-none position-fixed ">
      <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top">
        <i class="fa fa-chevron-up"></i>
      </a>
    </div>

    <!-- Product Modals -->
    <div class="portfolio-modal mfp-hide" id="portfolio-modal-1">
      <div class="portfolio-modal-dialog">
        <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
          <i class="fa fa-3x fa-times"></i>
        </a>
        <div class="container text-center">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <h2 class="text-uppercase mb-0 text-light">Honest Honey</h2>
              <hr class="star mb-5">
              <img class="img-fluid mb-3" height="50%" width="50%" src="<?php echo base_url('/assets/img/product.png')?>" alt="">
              <!-- Please connect the product price into this -->
              <p class="mb-2 text-light">{{Price of Product}}</p>
              <p class="mb-5 text-light">Description of Honey will be inputed here.</p>
              <!-- ADD TO CART --> 
              <a class="btn btn-primary btn-lg rounded-pill portfolio-modal-dismiss" href="#">
                Close</a>
            </div>
          </div>
        </div>
      </div>
    </div>
