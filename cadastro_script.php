

<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <?php include 'navbar.php'; ?>
    <header>
        <h1>Cadastro</h1>
    </header>

    <div class="container">
        <div class="row">
            <?php
            
            include "conn.php";

            $nome = $_POST['nome'];
            $password = $_POST['password'];
            $telefone = $_POST['telefone'];
            $endereco = $_POST['endereco'];
            $email = $_POST['email'];
            $data_nascimento = $_POST['data_nascimento'];

            $sql = "INSERT INTO `pessoas`
                (`nome`, `password`, `endereco`, `telefone`, `email`, `data_nascimento`) 
                VALUES ('$nome','$password','$endereco','$telefone','$email','$data_nascimento')";

            $duplicado = "SELECT email FROM pessoas WHERE email = '$email'";

            if (mysqli_query($conn, $duplicado)) {
                mensagem("Email já exixtente", 'dunger');
                
                if(isset($_SESSION)){
                    session_destroy();
                };
            }else{
                if(mysqli_query($conn, $sql)){
                    mensagem("$nome Cadastro realizado com sucesso!", 'success');
                }else {
                    mensagem("$nome Não cadastrado!", 'dunger');
                };
            };
            
            

            ?>

            <a href="index.php" class="btn btn-primary">Voltar</a>
        </div>

    </div>



    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>
</html>