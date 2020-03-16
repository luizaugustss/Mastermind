<?php

	$usuario = $_POST["usuario"];
	$senha = $_POST["senha"];
	session_start();
	$_SESSION["usuario"]=$usuario;
	include('conexao.php'); 
	
	$sql = "SELECT * FROM jogador where usuario='$usuario'";
	$resultado = mysqli_query($conexao,$sql);
	$usuarios = mysqli_num_rows($resultado);
	
	$senhabd = mysqli_fetch_array($resultado);
	
	if($usuarios==0){ 
        echo "<html>";
        echo "<body>";
        echo "<p align=\"center\">Usuário Não Encontrado!</p>";
        echo "<p align=\"center\"><a href=\"login.html\">Voltar</a></p>";
        echo "</body>";
        echo "</html>";  
	}
	else{
		if($senha != $senhabd["senha"]){

            echo "<p align=\"center\">senha Não Encontrada!</p>";
            echo "<p align=\"center\"><a href=\"login.html\">Voltar</a></p>";

		}
		else{ 
			header("Location: Menu.html"); 
		}
	}
?>