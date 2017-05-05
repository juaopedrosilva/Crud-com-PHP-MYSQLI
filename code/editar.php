<?php 
	require_once 'conexao.php';
	$id = $_GET['id'];
	$nome = $_POST['nome'];
	$sobrenome = $_POST['sobrenome'];
	$telefone = $_POST['telefone'];
	$email = $_POST['email'];

	$sql = "UPDATE `cadastroclientes` SET `nome`='$nome',`sobrenome`='$sobrenome',`telefone`='$telefone',`email`='$email' WHERE `id` = $id";
	mysqli_query($conn,$sql);

	header('Location: ../index.php');