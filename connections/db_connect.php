<?php 

function db_connection(){

    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "hospital_management_db";
    
    
    $conn = new mysqli($host, $username, $password, $database);
    
    if ($conn->connect_error) {
        echo $conn->connect_error;
        die ('Failed to connect with server');
    }else{
    
    return $conn;
    }


}





?>