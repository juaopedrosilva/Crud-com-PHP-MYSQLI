<?php 
	require_once 'conexao.php';
	$nome = $_POST['nome'];
	$sobrenome = $_POST['sobrenome'];
	$telefone = $_POST['telefone'];
	$email = $_POST['email'];

	$sql = "INSERT INTO `cadastroclientes`(`id`, `nome`, `sobrenome`, `telefone`, `email`) VALUES ('NULL','$nome','$sobrenome','$telefone','$email')";
	mysqli_query($conn,$sql);

	header('Location: ../index.php');