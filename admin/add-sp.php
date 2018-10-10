<?php
	require 'config.php';
	require_once 'db.php';
	$db= new db;
	$tensp = $_POST['txtname'];
	$idloai = $_POST['cate_id'];
	$idhsx = $_POST['pro_id'];
	$mota = $_POST['description'];
	$giasp = $_POST['price'];


	$hinhanh = $_FILES["fileUpload"]["name"];
	echo $hinhanh;
	$target_dir = "../images/";
	$target_file = $target_dir . basename($_FILES["fileUpload"]["name"]);

	echo $idloai.$idhsx;
	if($db->themsanpham($tensp,$idloai,$idhsx,$mota,$giasp,$hinhanh)){
		if(move_uploaded_file($_FILES["fileUpload"]["tmp_name"], $target_file)){
			echo "upload thanh cong"; 
			header('location:index.php');	
		}
	}
	else {
		echo "upload khong thanh cong";
	}
?>