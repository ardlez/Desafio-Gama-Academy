<?php    
    //geralmente o user do xamp é root e password vazio, mas pode ser que seja root/root
    $conn = mysqli_connect("127.0.0.1", "user", "password");
    
    $conn->set_charset("utf8");    
    if (!$link) {
        echo "Error: Falha ao conectar-se com o banco de dados MySQL." . PHP_EOL;
        echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;        
        exit;
    }   else {
        echo 'Banco conectado';
    }  
?>
