<?php 

$conexao = mysqli_connect("localhost", "root", "", "longin-php");
if(!$conexao){
    echo "erro";
}else{
    print"deu certo amigo"; 
}



?>