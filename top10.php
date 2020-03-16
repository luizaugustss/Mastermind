<?php
 include('conexao.php'); 
 $sql = "SELECT nome,pontuacao,partidas,ult_partida FROM jogador ORDER BY pontuacao  DESC,partidas DESC,ult_partida DESC LIMIT 10";
 $resultado = mysqli_query($conexao,$sql);
 $tam = mysqli_num_rows($resultado);
 echo "<link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\" integrity=\"sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T\" crossorigin=\"anonymous\">";
 if(mysqli_num_rows($resultado)>0) {
    echo "</br></br></br><center><h1>top 10</h1></center>";
    echo "</br>";
//     echo "<center><table border='3'>"; 
//     echo "<tr><td>jogador</td>"
//          ."<td>Acumulado</td>"
//          ."<td>Partidas</td>"
//          ."<td>Ultima Partida</td>"
//          ."</tr>";
     echo"<center><table class=\"table\"style=\"width: 720px;
    border-style: solid;\">
     <thead class=\"thead-dark\">
       <tr>
         <th scope=\"col\">Jogador</th>
         <th scope=\"col\">Acumulado</th>
         <th scope=\"col\">Partidas</th>
         <th scope=\"col\">Ultima Partida</th>
       </tr>
     </thead><tbody>"  ;  
 }
while($exibe=mysqli_fetch_array($resultado)) {
         echo "<tr><td>$exibe[nome]</td>";
         echo "<td>$exibe[pontuacao]</td>";
         echo "<td>$exibe[partidas]</td>";
         echo "<td>$exibe[ult_partida]</td></tr>";
    }
    echo "  </tbody>
    </table></center></br>";
     echo "<center><a <button  href=\"menu.html\" class=\"btn btn-outline-secondary\" >menu</button></a></center><br />";

?>