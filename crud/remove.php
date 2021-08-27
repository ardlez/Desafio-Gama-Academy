<?php
    include_once('../conn.php');

    $id = 1;    
    
    //remove cliente com id 1
    $sql = "DELETE FROM clientes WHERE id = " . $id . "";    

    if (mysqli_query($link, $sql)) :          
        echo 'Cliente removido';
    else : 
        echo 'Erro na remoção';
    endif;    

    $link->close();
    
?>
