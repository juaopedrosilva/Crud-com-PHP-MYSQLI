<?php
    $servidor = "localhost"; // NOME DO SERVIDOR
    $usuario = "root"; // NOME DO USUARIO
	$senha = ""; //  SENHA
	$banco = "cadastro"; // NOME DO BANCO
    
    //Criar a conexao
	$conn = mysqli_connect($servidor, $usuario, $senha, $banco);
	
	if(!$conn){die("Falha na conexao: " . mysqli_connect_error());}else{/* echo "Conexao realizada com sucesso";*/ } 
?>