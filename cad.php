<?php 





$conexao = mysqli_connect("localhost", "root", "", "longin-php");

$nome = $_POST["nome"];
$email = $_POST["email"];
$sobrenome = $_POST["sobrenome"];
$senha = $_POST["senha"];
$senha2 = $_POST["senha2"];

$sql = "INSERT INTO .usu(nome, email, sobrenome, senha, senha2) VALUES ('$nome', '$email', '$sobrenome', '$senha', '$senha2' )";


$resultado = mysqli_query($conexao, $sql);
echo "usúario ". $nome. " cadastrado com sucesso "  ;





?>




