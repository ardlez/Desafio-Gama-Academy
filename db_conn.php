<?php

$sname = "localhost";
$uname = "root";
$password = "";

$db_name = "gama-desafio";

$conn = mysqli_connect ($sname, $uname, $password, $db_name) {
    include 'db_conn.php';

    function validate($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $id = 1;
    $nomeCompleto = validate($_POST['nome']);
    $email = validate($_POST['email']);
    $telefone = validate($_POST['telefone']);
    $cpf = validate($_POST['cpf']);
    $dataNasc = validate($_POST['dataNasc']);
    $estadocivil =  validate($_POST['estadocivil']);
    $genero = validate($_POST['genero']);
    $profissao =  validate($_POST['profissao']);
    $cargo =  validate($_POST['cargo']);
    $cep =  validate($_POST['cep']);
    $endereco =  validate($_POST['endereco']);
    $numeroEnd =  validate($_POST['numeroEnd']);
    $bairro =  validate($_POST['bairro']);
    $cidade =  validate($_POST['cidade']);
    $rg =  validate($_POST['rg']);
    $possuiveiculo = $_POST['possuiveiculo'];
    $categoriaHabilitacao = validate($_POST['categoriaHabilitacao']);

    if (empty($nomeCompleto || empty ($email)) {
        header("Location: index.html");
}else {
    $sql = "INSERT INTO gama-desafio(nomeCompleto, email) VALUES('$nomeCompleto', '$email')";
    $res = mysqli_query($conn, $sql);
    if ($res) {
        echo "Sucesso!"
    } else {
        echo "Deu ruim!"
    }
}

}else {
    header("Location: index.html");
}