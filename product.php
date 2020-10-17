<?php 

include 'include/header.php';
include 'backend/dbconnect.php';

$sql="SELECT items.*,brands.name as brand_name,subcategories.name as sub_name,categories.name as c_name FROM items INNER JOIN brands ON items.brand_id=brands.id INNER JOIN subcategories ON items.subcategory_id=subcategories.id INNER JOIN categories ON subcategories.category_id=categories.id ORDER BY items.id DESC LIMIT 8";


  $stmt=$pdo->prepare($sql);
  $stmt->execute();
  $items=$stmt->fetchAll();

?>

<section class="car-section my-4">
  <div class="container">
      <div class="block-heading">
        <h2 class="animate__animated animate__bounce">NEW ARRIVAL</h2>
      </div>
      <div class="row rcorners my-2">
        <?php 
          foreach ($items as $item) {
         ?>
        <div class="col-xl-3 col-lg-4 col-md-12 col-sm-12 col-xs-6 py-2">
         <div class="card se">
            <div class="container-s">
              <img class="card-img-top animate__animated animate__fadeIn" src="backend/<?= $item['photo'] ?>" alt="Card image cap" height="200">
              <div class="content">
                <h5 class="float-left px-2 my-2">Watch</h5>
              </div>              
            </div>           
            <div class="card-body ">
              <div class="container card-w">
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
                  <button class="btn btn-outline-danger btn-rounded"><i class="fas fa-heart"></i></button>
                </div>
                <div class="col-md-6">
                  <button class="btn btn-outline-c "><i class="fas fa-cart-plus"></i></button>
                </div>
              </div>             
            </div>
          </div>
        </div>
        <?php } ?>
      </div>
      <!-- <div class="row">
        <div class="col-xl-12  py-4">
          <button class="btn btn-outline-c">See More</button>
        </div>
      </div> -->
    </div>
</section>


<?php 
    include "include/footer.php"
 ?>