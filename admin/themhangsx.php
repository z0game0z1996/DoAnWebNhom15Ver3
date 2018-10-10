<?php
	require 'config.php';
	require "./db.php";
	$db = new db;
	$tenhang = $_POST['txtname'];

	$db->themhangsx($tenhang);

	header('location:producer_detail.php');
 ?>