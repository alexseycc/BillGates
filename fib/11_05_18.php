<form action="" method="get">
    <input type="text" name="nome" />
    <input type="submit" />
</form>

<?php

if(!empty($_GET) && $_SERVER['REQUEST_METHOD'] == 'GET'){
    $nome = $_GET['nome'];
    echo 'valor: '.$nome.' e o valor do calculo(quadrado) eh:'.quadrado($_GET['nome']);
echo "<br><script>alert(".quadrado($nome).")</script>";
  $a="5";
  $b=5;
  echo $a==$b;
}   

function quadrado($x){
return $x*$x;  
  }



?>