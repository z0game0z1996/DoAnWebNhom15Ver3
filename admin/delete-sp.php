<?php
	require 'config.php';
 	require_once 'db.php';
 	$db= new db;
 	$id = $_GET['id'];
 	$db->xoasanpham($id);
	header('location:index.php');
?>