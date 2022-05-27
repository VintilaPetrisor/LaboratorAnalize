<?php 
require('db_credentiale.php');

function db_connect() {
    $connection = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NUME);
    return $connection;
}

function db_disconnect($connection) {
    if(isset($connection)){
        mysqli_close($connection);
    }
}


?>