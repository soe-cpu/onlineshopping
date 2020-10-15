<?php 
session_start();
if (isset($_SESSION['loginuser']) && $_SESSION['loginuser']['role_name']=="admin") {
include 'include/header.php';

?>


	<!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Brand Create</h1>
		<a href="brand_list.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-backward fa-sm text-white-50"></i> Go Back</a>
	</div>

	<div class="row">
		<div class="offset-md-2 col-md-8">
			<form action="add_brand.php" method="POST" enctype="multipart/form-data">
				<div class="form-group">
					<label for="name">Brand Name</label>
					<input type="text" name="name" id="name" class="form-control">
				</div>
				<div class="form-group">
					<label for="photo">Photo</label>
					<input type="file" name="photo" id="photo" class="form-control-file" accept="image/*">
				</div>
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