<?php
	require "config.php";
	require "./db.php";
	$db = new db;
	$tenhang = $_POST['txtname'];
	$idhang = $_POST['IDHSX'];
	$db->suahangsx($tenhang,$idhang);
	header('location:producer_detail.php');
?>