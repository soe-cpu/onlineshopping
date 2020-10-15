<?php 
	include "dbconnect.php";

	$id = $_POST['id'];
	$name = $_POST['name'];
	$cat_id = $_POST['category_id'];

	$sql ="UPDATE subcategories SET name=:subcat_name, category_id=:cat_id WHERE subcategories.id=:subcat_id";
	$stmt=$pdo->prepare($sql);
	$stmt->bindParam(':subcat_id',$id);
	$stmt->bindParam(':subcat_name',$name);
	$stmt->bindParam(':cat_id',$cat_id);
	$stmt->execute();

	header("location:subcat_list.php");
 ?>