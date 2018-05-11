<?php
$nome=htmlspecialchars($_GET["nome"]);
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>
<body>
  <?php
  for($i=0;$i<=4;$i++)
    echo $i."<br>";
  ?>
<form action="11_05_18.php" method="GET">
  <input type="text" name="nome"> </input>
  <input type="submit" value="enviando"></input>
  </form>
  
  
  </body>
</html>