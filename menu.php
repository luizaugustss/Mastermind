<?php
session_start();

    $_SESSION["chance"]= 10;
    $array=array(99,99,99,99);

    for ($i=1; $i <= 4; $i++) { 
        $rand = rand(1,6);
        if (in_array($rand, $array)) { 
           $i--;
        }else{
         $array[$i]=$rand;   
        }
    }

    $_SESSION["jogo"]= $array;

	header("Location: jogar.html"); 
?>