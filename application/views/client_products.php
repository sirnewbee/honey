
    <!-- Product Grid Section -->
    <section class="portfolio" id="portfolio">
      <div class="container">
        <h2 class="text-center text-uppercase text-secondary mb-0">Products</h2>
        <hr class="star-dark mb-5">

        <table class="table table-hover">
          <thead>
            <th scope="col">Product image</th>
            <th scope="col">Product Name</th>
            <th scope="col">Price</th>
            <th scope="col">Inventory</th>
            <th scope="col"></th>
          </thead>
          <?php foreach($products as $i){ ?>
            <tbody>
            <tr scope="row">
              <input type="hidden" name="product_id" scope="row" value="<?php echo $i->product_id ?>">
              <td><?php echo'<img src="' . base_url().'uploads/' . $i->file_name . '">'; ?></td>
              <td><?php echo $i->product; ?></td>
              <td><?php echo $i->price; ?></td>
              <td><?php echo $i->inventory; ?></td>
              <td><input class="btn btn-primary" type="submit" value="Add-to-cart"></td>
            </tr>
            </tbody>
          <?php } ?>
        </table>
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
              <img class="img-fluid mb-5" height="50%" width="50%" src="<?php echo base_url('/assets/img/product.png')?>" alt="">
              <p class="mb-5 text-light">Description of Honey will be inputed here.</p>
              <!-- ADD TO CART --> 
              <a class="btn btn-primary btn-lg rounded-pill portfolio-modal-dismiss" href="#">
                Add to Cart</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- My cart Modal -->
    <div class="portfolio-modal mfp-hide" id="mycart">
      <div class="portfolio-modal-dialog">
        <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
          <i class="fa fa-3x fa-times"></i>
        </a>
        <div class="container text-center">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <h2 class="text-uppercase mb-0 text-light">Your Cart</h2>
              <hr class="sstar mb-5">
              <div class="mb-5">
                <table class="table">
                  <thead class="text-light">
                    <th>Product</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Total</th>
                    <th> </th>
                  </thead>
                  <tbody class="text-light">
                    <td>
                      {{image}}
                    </td>
                    <td>
                      {{Quantity}}
                    </td>
                    <td>
                      {{Price}}
                    </td>
                    <td>
                      {{Total}}
                    </td>
                    <td>
                      <a class="btn btn-danger rounded-pill"> Delete </a>
                    </td>
                  </tbody>
                </table>
              </div>
              <!-- Checkout --> 
              <a class="btn btn-primary btn-lg rounded-pill portfolio-modal-dismiss" href="#">
                Checkout</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    