<?php

include_once("conect.php");

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$cpf = filter_input(INPUT_POST, 'cpf',FILTER_SANITIZE_STRING);

echo "Nome: ". $nome. " de CPF " . $cpf . " Cadastrado com sucesso <br>";

$sql = "insert into aluno(nome,cpf) values('$nome','$cpf')";
$result = mysqli_query($con,$sql);

?>