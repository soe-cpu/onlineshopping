<?php 
	include "dbconnect.php";


	$id = $_GET['id'];

	$sql = "DELETE FROM subcategories WHERE subcategories.id=:subcat_id";
	$stmt=$pdo->prepare($sql);
	$stmt->bindParam(':subcat_id',$id);
	$stmt->execute();

	if ($stmt->rowCount()) {
		header("location:subcat_list.php");
	}else{
		echo "Error";
	}


 ?>