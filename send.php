<?php

if (isset($_POST['name']) && isset($_POST['email'])) {
    include 'db_conn.php'

} else { 
    header("Location: index.html");
}