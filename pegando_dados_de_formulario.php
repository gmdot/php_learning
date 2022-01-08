<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Site php</title>
  </head>
  <body>
    <h2>Pegando dados do formulário</h2>
      <form action="" method="post">
        Nome:<input type="text" name="nome">
        Idade:<input type="number" name="idade">
        <input type="submit" name="enviar" value="Enviar">
      </form>
  <?php
    if (isset($_POST['enviar'])) {
      $nome = $_POST['nome'];
      $idade = $_POST['idade'];

      echo "<br/>Seu nome é $nome e você tem $idade anos";
    }
  ?>
  </body>
</html>
