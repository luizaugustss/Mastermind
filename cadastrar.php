<?php
		include('conexao.php');
    
		$usuario = $_POST["usuario"];
        $senha = $_POST["senha"];
        $nome = $_POST["nome"];
        $telefone = $_POST["telefone"];
        $sql = "INSERT INTO jogador (nome,senha,telefone,usuario) VALUES ";
		$sql = $sql ."('$nome','$senha','$telefone','$usuario');";	
        $consulta=mysqli_query($conexao, $sql);
        if($consulta == 1){
            header("Location:login.html");
        }
		else{
			echo "Não foi possível inserir!" ."<br>";
			echo "Resultado= " .$resultado ."<br>";
			echo "Error: " . $sql . "<br>" . mysqli_error($conexao);
		}
		mysqli_close($conexao);
?>