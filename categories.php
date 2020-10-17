<?php  
include 'include/header.php';
include 'backend/dbconnect.php';

$id=$_GET['id'];
$sql="SELECT * FROM subcategories WHERE subcategories.category_id=:c_id";
$stmt=$pdo->prepare($sql);
$stmt->bindParam(':c_id',$id);
$stmt->execute();
$subcategories=$stmt->fetchAll();

?>

<section class="car-section">
<div class="container my-5">
  <h1 class="animate__animated animate__bounce">NEW ARRIVAL</h1>
  <hr class="divider">
</div>

<div class="container my-5">
  <div class="row">
    <div class="col-md-3 py-3">
      <div class="card">
        <ul class="list-group list-group-flush">
          <?php  
          foreach ($subcategories as $subcategory) {

            ?>
            <a href="subcategories.php?id=<?=$subcategory['id']?>"><li class="list-group-item"><?=$subcategory['name']?></li></a>

          <?php } ?>
          
        </ul>
      </div>
    </div>
    <div class="col-md-9">
      <div class="row">
        <?php
        foreach ($subcategories as $subcategory) {
          $sub_id=$subcategory['id'];

          $sql="SELECT items.*,brands.name as brand_name,subcategories.name as sub_name,categories.name as c_name FROM items INNER JOIN brands ON items.brand_id=brands.id INNER JOIN subcategories ON items.subcategory_id=subcategories.id INNER JOIN categories ON subcategories.category_id=categories.id WHERE items.subcategory_id=:sub_id";
          $stmt=$pdo->prepare($sql);
          $stmt->bindParam(':sub_id',$sub_id);
          $stmt->execute();
          $items=$stmt->fetchAll();

          foreach ($items as $item) {   
            ?>
            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-xs-6 py-2">
         <div class="card se">
            <div class="container-s">
              <img class="card-img-top animate__animated animate__fadeIn" src="backend/<?= $item['photo'] ?>" alt="Card image cap">
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
                  <button class="btn btn-outline-danger btn-rounded item-add float-left"><i class="fas fa-heart"></i></button>
                </div>
                <div class="col-md-6">
                  <button class="btn btn-outline-c float-right"><i class="fas fa-cart-plus addtocart"></i></button>
                </div>
              </div>             
            </div>
          </div>
        </div>
        <?php } 
      }?>
      </div>
    </div>
  </div>
  
  <div class="text-center my-5">
    <a href="product.html" class="btn btn-outline-c btn-lg">View More</a>
  </div>
</div>

<hr class="py-3">

</section>

<?php  

include 'include/footer.php';

?>