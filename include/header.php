<?php 
  session_start();
  include "backend/dbconnect.php";
  $sql = "SELECT * FROM categories";
  $stmt=$pdo->prepare($sql);
  $stmt->execute();
  $categories=$stmt->fetchAll();
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Shopping</title>
  <!--stylesheet-->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700,900" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <link href="styles/styles.css" rel="stylesheet" type="text/css">
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
  <link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">
  <link href="styles/custom-responsive-styles.css" rel="stylesheet" type="text/css">
  <!--scripts-->
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/all-plugins.js"></script>
  <script type="text/javascript" src="js/plugins-activate.js"></script>
</head>

<body id="page-top">
  <!-- Navigation -->
  <section>
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top menu">
      <a class="navbar-brand" href="#"><h5 class="main-color">Shopping</h5></a>
      <button class="navbar-toggler main-bg" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="fa fa-bars"></span>
      </button>

      <div class="collapse navbar-collapse mx-auto" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Categories
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <?php foreach ($categories as $category){


               ?>
               <a class="dropdown-item" href="categories.php?id=<?=$category['id']; ?>"><?php echo $category['name']; ?></a>
              <?php } ?>
            </div>
          </li>
          <!-- <li class="nav-item">
            <a class="nav-link" href="product.php">Product</a>
          </li> -->
          <li class="nav-item">
            <a class="nav-link" href="about.php">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.php">Contact</a>
          </li>
          <?php 
            if (isset($_SESSION['loginuser'])) {

           ?>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <?php echo $_SESSION['loginuser']['name']; ?>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown1">
              <a class="dropdown-item" href="backend/index.php">Profile</a>
              <a class="dropdown-item" href="backend/logout.php">Logout</a>                 
            </div>
          </li>
          <?php 
              }else{

          ?>
          
          <li class="nav-item">
            <a class="nav-link" href="backend/login.php">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="backend/register.php">Register</a>
          </li>
        <?php } ?>
        </ul>
        <a href="checkout.php" id="count">
              <span class="p1 fa-stack has-badge" id="item_count">
                <i class="fas fa-cart-plus text-dark"></i>
              </span>
        </a>
        <!-- <button class="btn btn-outline-c" id="count"><i class="fas fa-cart-plus"></i> <sup id="item_count"></sup></button>   -->      
        <!-- <form class="form-inline my-2 my-lg-0"> -->
          <!-- <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-c my-2 my-sm-0" type="submit">Search</button> -->
          <!-- <a class="btn btn-outline-c " id="count">
            <span class="fa-stack has-badge" id="item_count">
                <i class="fa fa-shopping-cart"></i>
              </span></a>
 -->          <!-- <li class="nav-item">
            <a href="checkout.php" class="nav-link" id="count">
              <span class="p1 fa-stack has-badge" id="item_count">
                <i class="p3 fa fa-shopping-cart fa-stack-1x xfa-inverse"></i>
              </span>
            
            </a>
          </li> -->
        <!-- </form> -->
      </div>
    </nav>
  </section>