<?php
    include_once('../conn.php');
    $id = 1;
    $nomeCompleto = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $cpf = $_POST['cpf'];
    $dataNasc = $_POST['dataNasc'];
    $estadocivil = $_POST['estadocivil'];
    $genero = $_POST['genero'];
    $profissao = $_POST['profissao'];
    $cargo = $_POST['cargo'];
    $cep = $_POST['cep'];
    $endereco = $_POST['endereco'];
    $numeroEnd = $_POST['numeroEnd'];
    $bairro = $_POST['bairro'];
    $cidade = $_POST['cidade'];
    $rg = $_POST['rg'];
    $possuiveiculo = $_POST['possuiveiculo'];
    $categoriaHabilitacao = $_POST['categoriaHabilitacao'];

    mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
    echo "Obrigado!";

    //atualiza os dados do usuário com id 1
    $sql = "UPDATE clientes SET nome = '" . $nome . "', email = '" . $email . "' WHERE id = " . $id;    

    if (mysqli_query($conn, $sql)) :          
        echo 'Cliente atualizado';
    else : 
        echo 'Erro na atualização';
    endif;    


    $conn->close(); //fecha a conexão com o banco que foi aberta no conn.php
