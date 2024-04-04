<?php
require_once 'vendor/autoload.php';

use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

$conn = new mysqli($_ENV["DATABASE_HOSTNAME"],$_ENV["DATABASE_USERNAME"],$_ENV["DATABASE_PASSWORD"],$_ENV["DATABASE_NAME"]);

if ($conn->connect_error) {
    echo("Connessione fallita: " . $conn->connect_error);
} else {
    //echo("Connessione al database stabilita con successo!");
}

?>