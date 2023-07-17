<?php 
if(!isset($_SESSION)){
    session_start();
    };

    if(!isset($_SESSION['nome'])){
        die("Você não esta logado. <p><a href=\"index.php\">Login</a></p>");

    };



?>

