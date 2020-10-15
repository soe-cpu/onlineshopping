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

	$sql ="UPDATE categories SET name=:cat_name, logo=:cat_logo WHERE categories.id=:cat_id";
	$stmt=$pdo->prepare($sql);
	$stmt->bindParam(':cat_id',$id);
	$stmt->bindParam(':cat_name',$name);
	$stmt->bindParam(':cat_logo',$fullpath);
	$stmt->execute();

	header("location:category_list.php");
 ?>