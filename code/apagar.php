<?php 
	require_once 'conexao.php';
	$id = $_GET['id'];
	$sql = "DELETE FROM `cadastroclientes` WHERE `id` = $id";
	mysqli_query($conn,$sql);

	header('Location: ../index.php');