<?php
    include_once('../conn.php');
    
    $nome = 'Eric';
    $email = 'eric@navas.design';
    
    //consulta se tem algum usuário com e-mail eric@navas.deisgn
    $resultQuery = $link->query('SELECT * FROM `clientes` WHERE email = ' .  $email . '');


    //verifica se o cliente ja foi inserido
    if($resultQuery->num_rows == 0) {
        $sql = "INSERT INTO clientes(nome, email) VALUES ('" . $nome . "', '" . $email . "')";    

        if (mysqli_query($link, $sql)) :          
            echo 'Cliente inserido';
        else : 
            echo 'Erro na inserção';
        endif;    
    } else {
        echo "Erro: O cliente com este e-mail já estava cadastrado.";
    }    

    $link->close();
    
