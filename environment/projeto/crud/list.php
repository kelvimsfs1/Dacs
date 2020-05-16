<!DOCTYPE html>
<?php
    include_once("conect.php");
?>
<html lang="pt-br">
    
  <head>
      <meta charset = "utf-8">
      <title>CRUD_READ</title>
  </head>
    <body>
      <form method="POST" action="index.html">
      <input type="submit" value="Cadastrar" /><br><br>
      </form>
        <h1>Listar Aluno</h1>
        <?php
        $sql = "select*from aluno";
        $result = mysqli_query($con,$sql);
        while ($row_user =  mysqli_fetch_assoc($result)){
        echo "Matricula: " . $row_user['matricula']."<br>";  
        echo "Nome: " . $row_user['nome']."<br>";
        echo "CPF: " . $row_user['cpf']."<br><hr>"; 
        echo "<a href='front_edit.php?matricula=". $row_user['matricula']."'>Editar</a><br><hr>";
        echo "<a href='delete.php?matricula=". $row_user['matricula']."'>Deletar</a><br><hr>";


        
}
?>
        
    </body>
    
</html>