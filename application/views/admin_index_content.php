  <!-- Product Grid Section -->
    <section class="portfolio" id="portfolio">
      <div class="container">
        <h2 class="text-center text-uppercase text-secondary mb-0">Admin</h2>
        <hr class="star-dark mb-5">
        <div class="row">
          <div class="col-md-6 col-lg-4">
            <a class="portfolio-item d-block mx-auto" href="#portfolio-modal-1">
              <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
                <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
                  <i class="fas fa-search-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="<?php echo base_url('/assets/img/products/Product.jpeg')?>" alt="">
            </a>
          </div>
          <div class="col-md-6 col-lg-4">
            <a class="portfolio-item d-block mx-auto" href="#portfolio-modal-2">
              <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
                <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
                  <i class="fas fa-search-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="<?php echo base_url('/assets/img/products/Product2.jpeg')?>" alt="">
            </a>
          </div>
          <div class="col-md-6 col-lg-4">
            <a class="portfolio-item d-block mx-auto" href="#portfolio-modal-1">
              <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
                <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
                  <i class="fas fa-search-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="<?php echo base_url('/assets/img/products/Product.jpeg')?>" alt="">
            </a>
          </div> 
    </section>  
    <form action="<?php echo base_url("/index.php/Products_controller/get_product") ?>" method="post">
      <div class="form-group text-center">
              <button type="submit" class="btn btn-danger btn-xl" id="sendMessageButton">Add Product</button>
          </div> 
    </form>
    <!-- About Section -->
    <section class="bg-success text-white mb-0" id="about">
      <div class="container">
        <h2 class="text-center text-uppercase text-white">About</h2>
        <hr class="mb-5">
        <div class="row">
          <div class="col-lg-4 ml-auto">
            <p class="lead">Honest Honey by Francing’s EcoProducts is wild honey  that is gathered by local honey gatherers from the forests of the Malindang Mountain Range. It is pure honey produced by the apis dorsata spp , commonly known as giant honey bee. These bees are only found in South and Southeast Asia and are known for their aggressive and vicious defense behavior.</p>
          </div>
          <div class="col-lg-4 mr-auto">
            <p class="lead">Francing’s EcoProducts is named after the deceased wife of the resident apiculturist (“bee expert”), Evert Jan Robberts, of Sinacaban EcoFarm where Francing’s EcoProducts are produced and packaged. The “Honest” in Honest Honey is to emphasize that the product is pure and has been verified using, among others, the refractory method, to measure its moisture content and thus, its purity.</p>
          </div>
        </div>
        <section class="portfolio">
          <a class="portfolio-item d-block mx-auto" href="#portfolio-modal-about">
            <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
              <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
                <i class="fas fa-search-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="<?php echo base_url('/assets/img/About/Evert.jpeg')?>" alt="">
          </a>
        </section>
      </div>
      <form action="<?php echo base_url("/index.php/Products_controller/get_product") ?>" method="post">
      <div class="form-group text-center">
              <button type="submit" class="btn btn-danger btn-xl" id="sendMessageButton">Edit</button>
          </div> 
    </form>
    </section>

    <!-- Gallery Section -->
    <section id="gallery">
      <div class="container">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
          <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img class="d-block w-100 img-fluid" src="<?php echo base_url('/assets/img/Gallery/Gallery1.jpeg')?>" alt="">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100 img-fluid" src="<?php echo base_url('/assets/img/Gallery/Gallery2.jpeg')?>" alt="">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100 img-fluid" src="<?php echo base_url('/assets/img/Gallery/Gallery3.jpeg')?>" alt="">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100 img-fluid" src="<?php echo base_url('/assets/img/Gallery/Gallery4.jpeg')?>" alt="">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
        </div>
      </div>
           <form action="<?php echo base_url("/index.php/Products_controller/get_product") ?>" method="post">
      <div class="form-group text-center">
              <button type="submit" class="btn btn-danger btn-xl" id="sendMessageButton">Add Image</button>
          </div> 
    </form>
    </section>

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

