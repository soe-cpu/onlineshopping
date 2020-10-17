<?php 
session_start();
if (isset($_SESSION['loginuser']) && $_SESSION['loginuser']['role_name']=="admin") {
include 'include/header.php';
include 'dbconnect.php';
?>


	<!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">SubCategory Create</h1>
		<a href="subcat_list.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-backward fa-sm text-white-50"></i> Go Back</a>
	</div>

	<div class="row">
		<div class="offset-md-2 col-md-8">
			<form action="add_subcat.php" method="POST" enctype="multipart/form-data">
				<div class="form-group">
					<label for="name">SubCategory Name</label>
					<input type="text" name="name" id="name" class="form-control">
				</div>
				<div class="form-group">
					<label for="category">Categories</label>
					<select class="form-control" name="category_id" id="category_id">
						<option>Choose...</option>
						<?php 
							$sql = "SELECT * FROM categories";
							$stmt = $pdo->prepare($sql);
							$stmt->execute();
							$categories = $stmt->fetchAll();
							var_dump($categories);
							foreach ($categories as $category) {
						 ?>
						 <option value="<?php echo($category['id']); ?>"><?php echo $category['name']; ?></option>
						<?php } ?>
					</select>
				</div>
				<!-- <div class="form-group">
					<label for="category_id">Category_id</label>
					<input type="text" name="category_id" id="category_id" class="form-control">
				</div> -->
				<input type="submit" class="btn btn-primary float-right" value="Save">

			</form>
		</div>
	</div>





<?php 

include 'include/footer.php';

}else{
  header("location:../index.php");
}

?>