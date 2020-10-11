<?php 
	include 'dbconnect.php';

	$name = $_POST['name'];
	$category_id = $_POST['category_id'];
	// echo "$name and $price and $discount and $brand and $subcategory and $description and $codeno<br>";
	// print_r($photo);

	$sql="INSERT INTO subcategories (name,category_id) VALUES(:subcategory_name,:category_id)";
	$stmt = $pdo->prepare($sql);
	$stmt->bindParam(':subcategory_name',$name);
	$stmt->bindParam(':category_id',$category_id);
	$stmt->execute();

	if ($stmt->rowCount()) {
		header("location:subcat_list.php");
	}else{
		echo "Error";
	}


?>