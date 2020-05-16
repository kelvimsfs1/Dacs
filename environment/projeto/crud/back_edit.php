<?php

include_once("conect.php");

$matricula = filter_input(INPUT_POST, 'matricula', FILTER_SANITIZE_NUMBER_INT);
$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$cpf = filter_input(INPUT_POST, 'cpf',FILTER_SANITIZE_STRING);

echo "Nome: ". $nome. " de CPF " . $cpf . " Editado com sucesso <br>";

$sql = "update aluno set nome = '$nome', cpf = '$cpf' where matricula = '$matricula'";
$result = mysqli_query($con,$sql);

header("Location: list.php")

?>

