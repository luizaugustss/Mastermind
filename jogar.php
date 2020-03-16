

<?php
session_start();
include('conexao.php'); 
$array=$_SESSION["jogo"];
$chance=$_SESSION["chance"];
$_SESSION["chance"]= $chance-1;
$usuario = $_SESSION["usuario"];
$cor1 = $_POST["cor1"];
$cor2 = $_POST["cor2"];
$cor3 = $_POST["cor3"];
$cor4 = $_POST["cor4"];
$cores=array($cor1,$cor2,$cor3,$cor4);
$cor_correta=0;
$cor_posicao=0;
for ($i = 1; $i <= 4; $i++) {
if (in_array($cores[$i-1], $array)) { 
if($cores[$i-1]==$array[$i]){
    $cor_posicao++;  
}else{
    $cor_correta++;
}
}
}


echo "</br>";
echo "</br>";
echo"<center><h1 style=\"font-family: fantasy;font-size:72px\">  Mastermind </h1></center>";

// for ($i = 1; $i <= 4; $i++) {
//     $x=$array[$i];
//     $z=$cores[$i-1];
//     echo "<p>$x----$z</p>";
// }
// echo "<p>$chance</p>";

if($cor_posicao==4){
    echo "<img src=\"https://img.icons8.com/dusk/64/000000/party-baloons.png\"   style=\"position:absolute ;margin-left:30%; padding-top:40px;\">
    <img src=\"https://img.icons8.com/dusk/64/000000/party-baloons.png\"   style=\"position:absolute ;margin-left:70%; padding-top:40px;\">";
    echo"</br></br></br><br /><center><h2>voce ganhou!!</h2></center>";
    echo "<link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\" integrity=\"sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T\" crossorigin=\"anonymous\">";
    echo "<br /><br /><br /><center><a <button  href=\"menu.html\" class=\"btn btn-outline-secondary\" >menu</button></a></center><br />";
    
    $sql = "SELECT * FROM jogador where usuario='$usuario'";
    $resultado = mysqli_query($conexao,$sql);
    $bd= mysqli_fetch_array($resultado);
    $p_total=$bd["pontuacao"]+$chance;
    $partidas = $bd["partidas"]+1;
    $sql = "UPDATE jogador SET pontuacao='$p_total', ult_partida='$chance',partidas='$partidas'WHERE usuario = '$usuario'";
    if (mysqli_query($conexao, $sql)) {       
    } else {
        echo "Error updating record: " . mysqli_error($conexao);
    }

}else if($chance!=1){
    echo "</br></br></br><center><h2>cor: $cor_correta</h2></center>";
    echo "<center><h2>cor e posicao: $cor_posicao</h2></center>";
    $ten= $chance - 1;
     echo "<center><h2>tentativas sobrando: $ten</h2></br></center>";
    
    echo "<link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\" integrity=\"sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T\" crossorigin=\"anonymous\">";
    echo "<center><a <button  href=\"jogar.html\" class=\"btn btn-outline-secondary\" >continuar jogando</button></a></center><br />";

       
    
   
}else{
    echo "<link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\" integrity=\"sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T\" crossorigin=\"anonymous\">";
    echo "<center><a <button  href=\"menu.html\" class=\"btn btn-outline-secondary\" >menu</button></a></center><br />";
   $sql = "SELECT * FROM jogador where usuario='$usuario'";
   $resultado = mysqli_query($conexao,$sql);
   $bd= mysqli_fetch_array($resultado);
   $p_total=$bd["pontuacao"]+$chance;
   $partidas = $bd["partidas"]+1;
   
   $sql = "UPDATE jogador SET pontuacao='$p_total', ult_partida='$chance',partidas='$partidas'WHERE usuario = '$usuario'";
       if (mysqli_query($conexao, $sql)) {
       } else {
           echo "Error updating record: " . mysqli_error($conexao);
       }
}
?>

        

