<?php 
	include "dbconnect.php";

	$id = $_POST['id'];
	$name = $_POST['name'];
	$fullpath = $_POST['oldphoto'];
	$photo = $_FILES['photo'];

	if ($photo['size']>0) {
		$basepath="img/items/";
		$fullpath=$basepath.$photo['name'];
		move_uploaded_file($photo['tmp_name'], $fullpath);
	}

	$sql ="UPDATE brands SET name=:brand_name, photo=:brand_photo WHERE brands.id=:brand_id";
	$stmt=$pdo->prepare($sql);
	$stmt->bindParam(':brand_id',$id);
	$stmt->bindParam(':brand_name',$name);
	$stmt->bindParam(':brand_photo',$fullpath);
	$stmt->execute();

	header("location:brand_list.php");
 ?>