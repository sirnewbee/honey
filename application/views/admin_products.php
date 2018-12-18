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
        <table class="table table-hover">
          <thead>
            <th scope="col">Product image</th>
            <th scope="col">Product Name</th>
            <th scope="col">Price</th>
            <th scope="col">Inventory</th>
          </thead>
          <?php foreach($products as $i){ ?>
            <tbody>
            <tr scope="row">
              <input type="hidden" name="product_id" scope="row" value="<?php echo $i->product_id ?>">
              <td><?php echo'<img src="' . base_url().'uploads/' . $i->file_name . '">'; ?></td>
              <td><?php echo $i->product; ?></td>
              <td><?php echo $i->price; ?></td>
              <td><?php echo $i->inventory; ?></td>
            </tr>
            </tbody>
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

