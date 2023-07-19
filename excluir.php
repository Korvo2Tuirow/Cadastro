<?php 

include "conn.php";

$id = $_POST['id'];

$sql = "DELETE FROM pessoas WHERE cod_pessoa = '$id'";
$sqli = mysqli_query($conn,$sql);
if($sqli){
   header('location: pesquisa.php');
};




?>