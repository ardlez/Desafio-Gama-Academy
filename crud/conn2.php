<?php    
    GRANT ALL PRIVILEGES ON *.* TO `root`@`localhost` WITH GRANT OPTION;
    GRANT PROXY ON ''@'%' TO 'root'@'localhost' WITH GRANT OPTION;

    $conn = mysqli_connect('127.0.0.1', 'localhost', 'root@localhost');
    
    $conn->set_charset('utf8');    
    if (!$conn->connect_error) {
        echo 'Error: Falha ao conectar-se com o banco de dados MySQL.' . PHP_EOL;
        echo 'Debugging errno: ' .mysqli_connect_errno($conn). PHP_EOL;        
        exit;
    }   else {
        echo 'Banco conectado';

        $stmt = $conn->prepare("insert into registration(nomeCompleto, email, telefone, cpf, dataNasc, estadocivil, genero, profissao, cargo, cep, endereco, numeroEnd, bairro, cidade, rg, posusiveiculo, categoriaHabilitacao)
        values (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)")
       
    }  
?> 
