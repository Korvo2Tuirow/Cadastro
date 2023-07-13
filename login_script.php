<?php 
session_start();

include "conn.php";

if (empty($_POST) or (empty($_POST["senha"]) or empty($_POST["email"]))){

    echo "<script>location.href='login.php';</script>";
}

$email = $_POST['email'];
$senha = $_POST['senha'];

$sql = "SELECT * FROM `pessoas` WHERE `email` = '$email' AND  `password` = '$senha'";

$retorno = mysqli_query($conn, $sql);

$res = mysqli_fetch_array($retorno);
 
if($res['email'] === $email || $res['password'] === $senha){
    echo "<script>location.href='index.php';</script>";
}else{
    echo "<script>location.href='login.php';</script>";};







?>