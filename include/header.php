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
  <!-- <script type="text/javascript" src="js/all-plugins.js"></script>
  <script type="text/javascript" src="js/plugins-activate.js"></script> -->
</head>

<body id="page-top">
  <!-- Navigation -->
  <section>
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top menu">
      <a class="navbar-brand" href="#"><h3 class="main-color">Shopping</h3></a>
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
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <?php echo $_SESSION['loginuser']['name']; ?>
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
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
      </div>
    </nav>
  </section>