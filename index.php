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
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
</head>

<body>


    <header class="container">
        <h1>Login</h1>
    </header>

    <div class="container">
        <div class="row">
            <div class="col">
                <form action="" method="POST">

                    <label for="email">E-mail</label>
                    <input type="text" name="email">

                    <label for="senha">Senha</label>
                    <input type="password" name="senha">

                    <input type="submit" value="Entrar">
                </form>


            </div>

        </div>

    </div>





    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

</html>