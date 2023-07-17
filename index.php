<?php
include "conn.php";
session_start();

if (isset($_POST['email']) || isset($_POST['senha'])) {
    if (strlen($_POST['email']) == 0) {
        echo "<script> alert('Preencha seu E-mail');</script>";
    } else if (strlen($_POST['senha']) == 0) {
        echo "<script> alert('Coloque sua senha');</script>";
    } else {
        $email = $conn->real_escape_string($_POST['email']);
        $senha = $conn->real_escape_string($_POST['senha']);

        $sql_code = "SELECT * FROM pessoas WHERE email = '$email' AND `password` = '$senha';";

        $sql_query = mysqli_query($conn, $sql_code);
        $resp = mysqli_fetch_assoc($sql_query);

        $quantidade = $sql_query->num_rows;

        if ($quantidade == 1 && $resp['email'] === $email && $resp['password'] === $senha) {

            if ($resp['adm'] == 1) {

                $_SESSION['adm'] = 1;
            };

            header('location: home.php');
        } else {
            echo "<script> alert('E-mail ou senha incorretos');</script>";
        };
    };
};







?>
<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link rel="stylesheet" href="css/style.css">

</head>

<body>

    <div class="login">

        <header>
            <h1>Login</h1>
        </header>



        <form action="" method="POST">

            <label for="email">E-mail</label>
            <input type="text" name="email">


            <label for="senha">Senha</label>
            <input type="password" name="senha">


            <input type="submit" value="Entrar">

            <a href="cadastro.php"> <input type="button" value="Cadastrar">
            </a>
    </div>

    </form>










</html>