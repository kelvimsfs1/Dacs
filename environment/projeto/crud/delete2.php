<?php
 include_once("conect.php");
 
$matricula = filter_input(INPUT_GET, 'matricula', FILTER_SANITIZE_NUMBER_INT);
$sql = "delete from aluno where matricula = '$matricula'";
$result = mysqli_query($con,$sql);

header("Location: list.php");
