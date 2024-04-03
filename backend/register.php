<?php
include 'config.php';

$nome = $_POST['nome'] ?? null;
$cognome = $_POST['cognome'] ?? null;
$email = $_POST['email'] ?? null;
$password = $_POST['password'] ?? null;
$confirm_pass = $_POST['confirm_password'];

if( $password === $confirm_pass ){

    $nome = $conn->real_escape_string($nome);
    $cognome = $conn->real_escape_string($cognome);
    $email = $conn->real_escape_string($email);
    $password = $conn->real_escape_string($password);
    
    $hasced_password = password_hash($password, PASSWORD_DEFAULT);
    
    if( !empty( $email ) && !empty( $password ) ){
    
        $query = "INSERT INTO users (nome, cognome, email, password) VALUES (?, ?, ?, ?)";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("ssss", $nome, $cognome, $email, $hasced_password);
        
        if ($stmt->execute()) {
            echo json_encode(array("success" => true, "message" => "Registrazione avvenuta con successo."));
        } else {
            echo json_encode(array("success" => false, "message" => "Errore durante la registrazione: " . $stmt->error));
        }
    
    }
}

$stmt->close();

header("location: /progetto/pages/loginMain.php");
?>
