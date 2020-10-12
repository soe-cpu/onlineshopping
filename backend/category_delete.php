<?php 
	include "dbconnect.php";


	$id = $_GET['id'];

	$sql = "DELETE FROM categories WHERE categories.id=:cat_id";
	$stmt=$pdo->prepare($sql);
	$stmt->bindParam(':cat_id',$id);
	$stmt->execute();

	if ($stmt->rowCount()) {
		header("location:category_list.php");
	}else{
		echo "Error";
	}


 ?>