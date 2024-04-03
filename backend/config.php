<?php

$servername = "127.0.0.1"; 
$username = "root";    
$password = "";  
$dbname = "off_moto"; 

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    echo("Connessione fallita: " . $conn->connect_error);
} else {
    //echo("Connessione al database stabilita con successo!");
}

?>