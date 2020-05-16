<?php
 include_once("conect.php");
 $matricula = filter_input(INPUT_GET, 'matricula',FILTER_SANITIZE_NUMBER_INT);
 $sql = "select*from aluno where matricula = '$matricula'";
 $result = mysqli_query($con,$sql);
 $row_user =  mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
      <meta charset = "utf-8">
      <title>CRUD_CREATE</title>
  </head>
    <body>
       
        <h1>Edita dados Aluno</h1>
        <form method="POST" action="back_edit.php">
            <input type="hidden" name="matricula"  value="<?php 
            echo $row_user['matricula'];?>"><br><br>
            <label for="txtnome">Nome</label>
            <input type="text" name="nome" placeholder="Digite o nome completo" value="<?php 
            echo $row_user['nome'];?>"><br><br>
            <label for="txtcpf">Cpf</label>
            <input type="text" name="cpf" placeholder="Digite o cpf"value="<?php 
            echo $row_user['cpf'];?>"><br><br>
            <input type="submit" value="Editar"/><br><br>
        </form>
        <form method="POST" action="list.php">
       <input type="submit" value="Listar"/><br><br>
        </form>
          <form method="POST" action="front_cad.html">
          <input type="submit" value="Cadastrar"/><br><br>
        </form>
    </body>
    
</html>