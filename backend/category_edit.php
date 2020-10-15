<?php 
session_start();
if (isset($_SESSION['loginuser']) && $_SESSION['loginuser']['role_name']=="admin") {
include 'include/header.php';
include 'dbconnect.php';

$id = $_GET['id'];

$sql = "SELECT * FROM categories WHERE categories.id=:category_id";
$stmt = $pdo->prepare($sql);
$stmt->bindParam(':category_id',$id);
$stmt->execute();
$categories=$stmt->fetch(PDO::FETCH_ASSOC);

// var_dump($categories);

?>


	<!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Categories Edit</h1>
		<a href="categories_list.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-backward fa-sm text-white-50"></i> Go Back</a>
	</div>

	<div class="row">
		<div class="offset-md-2 col-md-8">
			<form action="category_update.php" method="POST" enctype="multipart/form-data">
				<input type="hidden" name="id" value="<?php echo $categories['id']; ?>">
				<div class="form-group">
					<label for="name">Categories Name</label>
					<input type="text" name="name" id="name" class="form-control" value="<?php echo($categories['name']);?>">
				</div>
				<div class="form-group">
					<label for="photo">Categoris Logo</label>
					<input type="file" name="photo" id="photo" class="form-control-file" accept="image/*">
					<input type="hidden" name="oldphoto" id="oldphoto" value="<?php echo($categories['logo']);?>">
					<img src="<?php echo($categories['logo']);?>" width="150" height="150">
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