<?php

$user=$_REQUEST['nome'];
$pass=$_REQUEST['pass'];
$anos=2018-$_REQUEST['idade'];

echo "nome de usuario:".$user."<br>password:".$pass;
echo "<br>calculo da idade eh $anos anos";