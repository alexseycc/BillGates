 <?php
if(!empty($_GET) && $_SERVER['REQUEST_METHOD'] == 'GET'){
    
function calculo(){
   $valor = $_GET['peso'];
    echo '<br>valor: '.$valor;
}

function calcullo($x){
    return $x*$x;
  }

  
}  
  


function imprimirString(){
  $nm="0";
  $nm=$_GET['nome'];
$size=strlen($nm);
  for ($i=0; $i<$size; $i++) {
      echo $nm[$i]."<br>";
}
  }

?>
 

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
  <input type="submit" />
    <?php
  echo "<br>".calculo();
  ?>
   String <input type="text"  name="nome"/>string 
  <input type="submit" />
    <?php
  echo "<br>";
  echo imprimirString();
  ?>
 
 <br><br><br><br><br><br>
  </form>


    
  
  
  
  
  
  </body>

</html>
