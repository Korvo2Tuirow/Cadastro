<?php 

$host = "localhost";
$usuario = "root";
$senha = "";
$database = "empresa";

if($conn = mysqli_connect($host, $usuario, $senha, $database)){
    //echo "Conectado com sucesso!";
}else{
    echo "Erro na conexão com bando de dados!";
};

function mensagem($texto, $tipo){

    echo "<div class='alert alert-$tipo' role='alert'> $texto</div>";
};

function mostrardata($data){
    $d = explode('-', $data);
    $escreve = $d[2] . "/" . $d[1] . "/" . $d[0];
    return $escreve;
};


?>