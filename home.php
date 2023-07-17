<?php 


include "protect.php";


?>


<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PHP & MySQL</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

<?php 
include 'navbar.php';
?>
    <header class="container">
        <h1>CRUD PHP MYSQl</h1>
    </header>

    <div class="container">
        <div class="row">
            <div class="col">
                <div class="jumbotron">
                    <h1 class="display-4">Cadastro PHP</h1>
                    <p class="lead">Sistema simplificado de cadastro com PHP e MySQL</p>
                    <hr class="my-4">

                  <?php
                   /*<a class="btn btn-primary btn-lg" href="cadastro.php" role="button">Cadastrar</a>
                    */?>
                    <a class="btn btn-primary btn-lg" href="pesquisa.php" role="button">Pesquisar</a>
                </div>
            </div>

        </div>

    </div>





    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous">
    </script>

</html>