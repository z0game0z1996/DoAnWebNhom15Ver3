<?php
	require 'config.php';
	require './db.php';
	$db= new db;
	$id = $_GET['id'];
	$db->xoahangsx($id);
	header('location:producer_detail.php');
 ?>