<?php
	$conexao = mysqli_connect("localhost","root","","senha") or die("Erro de conexÃ£o");
	if (!$conexao) {
      die("Connection failed: " . mysqli_connect_error());
	}
?>