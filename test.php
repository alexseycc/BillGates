<?php
header("Content-Type: text/html; charset=ISO-8859-1", true);
  if(isset($_POST['cadastre'])){
    $name = $_POST["name"];
    $name = $name." da Silva";
    echo $name;
  }
?>
<meta http-equiv="content-Type" content="text/html; charset=iso-8859-1" />
<form action="" method="post" name="cadastre">
  <input type="text" name="name" value="José">
  <input type="submit" name="cadastre" value="Cadastrar">
</form>