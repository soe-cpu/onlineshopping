<?php 
  include "include/header.php";
  include "backend/dbconnect.php";
  $sql="SELECT items.*,brands.name as brand_name,subcategories.name as sub_name,categories.name as c_name FROM items INNER JOIN brands ON items.brand_id=brands.id INNER JOIN subcategories ON items.subcategory_id=subcategories.id INNER JOIN categories ON subcategories.category_id=categories.id ORDER BY items.id DESC LIMIT 8";
    $stmt=$pdo->prepare($sql);
    $stmt->execute();
    $items=$stmt->fetchAll();
    // var_dump($items);

 ?>
  <!-- Header Starts -->
  <section class="car-section">
    <!-- Carousel -->
    <div class="container-float">
      <div class="carousel slide" id="headerCarousel" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#headerCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#headerCarousel" data-slide-to="1" class=""></li>
          <li data-target="#headerCarousel" data-slide-to="2" class=""></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active img-size">
            <img src="img/w.jpg" class="d-block w-100">
            <div class="img-overlay"></div>
            <div class="carousel-caption">
              <h3>Fresh Vegetables</h3>
              <p>lsorem ipsum dolor sit amet, consectetur adipisicing elit</p>
            </div>
          </div>
          <div class="carousel-item img-size">
            <img src="img/w.jpg" class="d-block w-100">
            <div class="img-overlay"></div>
            <div class="carousel-caption">
              <h3>Fresh Meat</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
            </div>
          </div>
          <div class="carousel-item img-size">
            <img src="img/w1.jpg" class="d-block w-100">
            <div class="img-overlay"></div>
            <div class="carousel-caption">
              <h3>Fresh Fruits</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
            </div>
          </div>
        </div>      
      </div>
    </div>
  </section>
  <!-- Discount -->
  <section id="Services" class="content-section text-center">
    <div class="container">
      <div class="block-heading">        
        <div class="container my-3">
          <h2 class="animate__animated animate__bounce">NEW ARRIVAL</h2>
          <hr class="divider">
        </div>
      </div>
      <div class="row rcorners my-2">
        <?php 
          foreach ($items as $item) {
         ?>
        <div class="col-xl-3 col-lg-4 col-md-12 col-sm-12 col-xs-6 py-2">
         <div class="card se">
            <div class="container-s">
              <img src="backend/<?= $item['photo'] ?>" alt="Card image cap" style="height: 250px;">
              <div class="content">
                <h5 class="float-left px-2 my-2">Watch</h5>
              </div>              
            </div>           
            <div class="card-body ">
              <div class="container">
                <div class="row">
                  <div class="col-3">
                    <h6 class="float-left">Price:</h6>
                  </div>
                  <div class="col-9">
                    <?php  
                    if ($item['discount']==0) {
                      echo $item['price'];                  
                    ?>
                    <?php 
                    }else{
                      echo "<del class='text-danger'>".$item['price']." MMK"."</del>";
                    } ?>
                  </div>                                      
                </div>
                <div class="row">
                  <div class="col-3">
                  </div>
                  <div class="col-9">
                    <?php  
                    if (isset($item['discount'])) {
                      echo $item['discount']." MMK";    
                      }             
                     ?>
                  </div>                                      
                </div>
              </div>                                                
            </div>
            <div class="card-footer">
              <div class="row">
                <div class="col-md-6">
                  <button class="btn btn-outline-danger btn-sm float-left"><i class="fas fa-heart"></i></button>
                </div>
                <div class="col-md-6">
                  <button class="btn btn-outline-c btn-sm float-right"><i class="fas fa-cart-plus item-add addtocart"></i></button>
                </div>
              </div>             
            </div>
          </div>
        </div>
        <?php } ?>
      </div>
      <div class="row">
        <div class="col-xl-12  py-4">
          <button class="btn btn-outline-c">See More</button>
        </div>
      </div>
    </div>
  </section>
  <!-- NEW ARRIVAL -->
  <!-- <section class="content-section text-center bg-se">
    <div class="container">
      <h2 class="text-center text-dark py-2 animate__animated animate__bounce">NEW ARRIVAL</h2>
      <div class="row my-2">
        <div class="col-xl-3 col-lg-4 col-md-12 col-sm-12 col-xs-6 py-2">
         <div class="card se">
            <div class="container-s">
              <img class="card-img-top animate__animated animate__fadeIn" src="img/w.jpg" alt="Card image cap" height="200">
              <div class="content">
                <h5 class="float-left px-2 my-2">Watch</h5>
              </div>              
            </div>           
            <div class="card-body">
              <div class="container">
                <div class="row">
                  <div class="col-3">
                    <h5 class="float-left">Price:</h5>
                  </div>
                  <div class="col-9">
                    <b class="float-right">500000 MMK</b>
                  </div>                                      
                </div>
              </div>                                                
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-outline-c btn-block">Add Cart<i class="fa fa-shopping-cart  float-right py-1"></i></a>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-lg-4 col-md-12 col-sm-12 col-xs-6 py-2">
         <div class="card se">
            <div class="container-s">
              <img class="card-img-top animate__animated animate__fadeIn" src="img/w.jpg" alt="Card image cap" height="200">
              <div class="content">
                <h5 class="float-left px-2 my-2">Watch</h5>
              </div>              
            </div>           
            <div class="card-body">
              <div class="container">
                <div class="row">
                  <div class="col-3">
                    <h5 class="float-left">Price:</h5>
                  </div>
                  <div class="col-9">
                    <b class="float-right">500000 MMK</b>
                  </div>                                      
                </div>
              </div>                                                
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-outline-c btn-block">Add Cart<i class="fa fa-shopping-cart  float-right py-1"></i></a>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-lg-4 col-md-12 col-sm-12 col-xs-6 py-2">
         <div class="card se">
            <div class="container-s">
              <img class="card-img-top animate__animated animate__fadeIn" src="img/w.jpg" alt="Card image cap" height="200">
              <div class="content">
                <h5 class="float-left px-2 my-2">Watch</h5>
              </div>              
            </div>           
            <div class="card-body">
              <div class="container">
                <div class="row">
                  <div class="col-3">
                    <h5 class="float-left">Price:</h5>
                  </div>
                  <div class="col-9">
                    <b class="float-right">500000 MMK</b>
                  </div>                                      
                </div>
              </div>                                                
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-outline-c btn-block">Add Cart<i class="fa fa-shopping-cart  float-right py-1"></i></a>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-lg-4 col-md-12 col-sm-12 col-xs-6 py-2">
         <div class="card se">
            <div class="container-s">
              <img class="card-img-top animate__animated animate__fadeIn" src="img/w.jpg" alt="Card image cap" height="200">
              <div class="content">
                <h5 class="float-left px-2 my-2">Watch</h5>
              </div>              
            </div>           
            <div class="card-body">
              <div class="container">
                <div class="row">
                  <div class="col-3">
                    <h5 class="float-left">Price:</h5>
                  </div>
                  <div class="col-9">
                    <b class="float-right">500000 MMK</b>
                  </div>                                      
                </div>
              </div>                                                
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-outline-c btn-block">Add Cart<i class="fa fa-shopping-cart  float-right py-1"></i></a>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-xl-12  py-4">
          <button class="btn btn-outline-c">See More</button>
        </div>
      </div>
    </div>
  </section> -->
  <!-- <section class="content-section text-center" id="Portfolio">
    <div class="container">
      <div class="block-heading">
        <h2>Our Product</h2>
      </div>
      <div class="portfolio-wrapper clearfix">
        <a class="each-portfolio" data-fancybox="gallery" href="img/w1.jpg">
          <div class="content hover-cont-wrap">
            <div class="content-overlay"></div>
            <img class="content-image" src="img/w1.jpg">
            <div class="content-details fadeIn-bottom">
              <h5 class="p-title">Watch</h5>
              <p class="p-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
              <span class="zoom"><i class="fa fa-search-plus"></i></span>
            </div>
          </div>
        </a>
        <a class="each-portfolio" data-fancybox="gallery" href="img/w.jpg">
          <div class="content hover-cont-wrap">
            <div class="content-overlay"></div>
            <img class="content-image" src="img/w.jpg">
            <div class="content-details fadeIn-bottom">
              <h5 class="p-title">Watch</h5>
              <p class="p-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
              <span class="zoom"><i class="fa fa-search-plus"></i></span>
            </div>
          </div>
        </a>
        <a class="each-portfolio" data-fancybox="gallery" href="img/w1.jpg">
          <div class="content hover-cont-wrap">
            <div class="content-overlay"></div>
            <img class="content-image" src="img/w1.jpg">
            <div class="content-details fadeIn-bottom">
              <h5 class="p-title">Title</h5>
              <p class="p-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
              <span class="zoom"><i class="fa fa-search-plus"></i></span>
            </div>
          </div>
        </a>
        <a class="each-portfolio" data-fancybox="gallery" href="img/w1.jpg">
          <div class="content hover-cont-wrap">
            <div class="content-overlay"></div>
            <img class="content-image" src="img/w1.jpg">
            <div class="content-details fadeIn-bottom">
              <h5 class="p-title">Title</h5>
              <p class="p-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
              <span class="zoom"><i class="fa fa-search-plus"></i></span>
            </div>
          </div>
        </a>
        <a class="each-portfolio" data-fancybox="gallery" href="img/w1.jpg">
          <div class="content hover-cont-wrap">
            <div class="content-overlay"></div>
            <img class="content-image" src="img/w1.jpg">
            <div class="content-details fadeIn-bottom">
              <h5 class="p-title">Title</h5>
              <p class="p-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
              <span class="zoom"><i class="fa fa-search-plus"></i></span>
            </div>
          </div>
        </a>
        <a class="each-portfolio" data-fancybox="gallery" href="img/w1.jpg">
          <div class="content hover-cont-wrap">
            <div class="content-overlay"></div>
            <img class="content-image" src="img/w1.jpg">
            <div class="content-details fadeIn-bottom">
              <h5 class="p-title">Title</h5>
              <p class="p-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
              <span class="zoom"><i class="fa fa-search-plus"></i></span>
            </div>
          </div>
        </a>
      </div>
    </div>
  </section> -->


  <?php 
    include "include/footer.php";

   ?>