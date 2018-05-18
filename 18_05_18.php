<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>
  <!--style="background:transparent"-->
<body style="background:rgba(125,169,125.5)">
<form action="" method="get">
  PESO <input type="text"  name="peso"/>(G)
  <input type="submit" /><br>
  </form>
<?php
if(!empty($_GET) && $_SERVER['REQUEST_METHOD'] == 'GET'){
    $valor = $_GET['peso'];
    echo '<br>valor: '.$valor.' e o valor do calculo(quadrado) eh:'.quadrado($_GET['peso']);
}   
function quadrado($x){
return $x*$x;  
  }
?>
  PESO <input type="text"  name="peso"/>(G)
  <input type="submit" /><br>
  </form>
  
  
  
  
  
  </body>

</html>
