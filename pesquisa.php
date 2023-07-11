<?php

include "conn.php";

$pesquisa = $_POST['busca'] ?? '';

$sql = "Select * from pessoas where nome like '%$pesquisa%'";

$dados = mysqli_query($conn, $sql);

/*while($resposta =mysqli_fetch_assoc($dados)){
    foreach($resposta as $key => $value){
        echo "$key: $value <br>";
       
}
echo"<hr>";
};*/

?>

<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pesquisar</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <header class="container">
        <h1>Pesquisar</h1>
    </header>

    <div class="container">
        <div class="row">
            <nav class="navbar navbar-light bg-light">
                <form class="form-inline" action="pesquisa.php" method="POST">
                    <input class="form-control mr-sm-2" type="search" placeholder="Nome" aria-label="Pesquisar" name="busca">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Pesquisar</button>

                </form>
            </nav>

            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Endereço</th>
                        <th scope="col">Telefone</th>
                        <th scope="col">E-mail</th>
                        <th scope="col">Data de Nascimento</th>
                        <th scope="col" colspan="2"></th>
                        
                    </tr>
                </thead>
                <tbody>
                    <?php

                    while ($resposta = mysqli_fetch_assoc($dados)) {
                        $id = $resposta['cod_pessoa'];
                        $nome = $resposta['nome'];
                        $endereco = $resposta['endereco'];
                        $telefone = $resposta['telefone'];
                        $email = $resposta['email'];
                        $data_nascimento = $resposta['data_nascimento'];
                        $data_nascimento = mostrardata($data_nascimento);




                        echo '<tr>';
                        echo "<th scope='row'>$id</th>
                              <td>$nome</td>
                              <td>$endereco</td>
                              <td>$telefone</td>
                              <td>$email</td>
                              <td>$data_nascimento</td>
                              <td><a href='cadastro_edit.php?id=$id' class='btn btn-success'>Editar</a></td>
                              <td><a href='#' class='btn btn-danger'>Excluir</a></td>
                              </tr>";
                    };

                    ?>
                </tbody>
            </table>


        </div>
        <a href="index.php" class="btn btn-info">Voltar</a>

    </div>





    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

</html>