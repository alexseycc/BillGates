<?php
$user="root";
$pass="";
$db="wtf";
$con=mysqli_connect("localhost",$user,$pass,$db);

$nome=$_GET['nome'];
$cliente=$_GET['cliente'];
$atendimento=$_GET['atendimento'];


//mysqli_query($con,"insert into funcionario (nome) values ('".$nome."')");
mysqli_query($con,"insert into funcionario values ('$nome')");
mysqli_query($con,"insert into cliente values ('$cliente')");
mysqli_query($con,"insert into atendimento values ('$nome','$cliente')");