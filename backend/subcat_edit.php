<?php 
session_start();
if (isset($_SESSION['loginuser']) && $_SESSION['loginuser']['role_name']=="admin") {
include 'include/header.php';
include 'dbconnect.php';

$id = $_GET['id'];

$sql = "SELECT * FROM subcategories WHERE subcategories.id=:subcategory_id";
$stmt = $pdo->prepare($sql);
$stmt->bindParam(':subcategory_id',$id);
$stmt->execute();
$subcategories=$stmt->fetch(PDO::FETCH_ASSOC);

// var_dump($subcategories);

?>


	<!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">SubCategories Edit</h1>
		<a href="subcat_list.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-backward fa-sm text-white-50"></i> Go Back</a>
	</div>

	<div class="row">
		<div class="offset-md-2 col-md-8">
			<form action="subcat_update.php" method="POST" enctype="multipart/form-data">
				<input type="hidden" name="id" value="<?php echo $subcategories['id']; ?>">
				<div class="form-group">
					<label for="name">SubCategories Name</label>
					<input type="text" name="name" id="name" class="form-control" value="<?php echo($subcategories['name']);?>">
				</div>
				<div class="form-group">
					<label for="category_id">Category_id</label>
					<input type="text" name="category_id" id="category_id" class="form-control" value="<?php echo$subcategories['category_id']; ?>">
				</div>
				<input type="submit" class="btn btn-primary float-right" value="Update">

			</form>
		</div>
	</div>





<?php 

include 'include/footer.php';

}else{
  header("location:../index.php");
}

?>