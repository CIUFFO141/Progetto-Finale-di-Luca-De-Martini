<?php
include 'config.php';

$email = $conn->real_escape_string($_POST['email']);
$password = $conn->real_escape_string($_POST['password']);

    
if ($_SERVER["REQUEST_METHOD"] ===  "POST") {

    $sql_select = "SELECT * FROM users WHERE email = '$email' LIMIT 1;";
    if($result = $conn->query($sql_select)){
        if($result->num_rows > 0){
            $row = $result->fetch_assoc();
            if(password_verify($password, $row['password'])){
                session_start();
                
                $_SESSION['log'] = true;
                $_SESSION['id'] = $row['id'];
                $_SESSION['email'] = $row['email'];
                $_SESSION['name'] = $row['nome'];

                header("location: ../pages/reservedArea.php");
                exit();
            }else{
                echo "la password non è corretta";
            }
        }else{
            echo "non ci sono account con questa email";
        }
    }else{
        echo "errore in fase di login";
    }


    $conn->close();
}



?>


<!-- if ($_SERVER["REQUEST_METHOD"] ===  "POST") {

$json_data = file_get_contents('php://input');
$data = json_decode($json_data, true);

if ($data && $data["format"] == "json") {
    if (isset($data['email']) && isset($data['password'])) {
        $email = $conn->real_escape_string($data['email']);
        $password = $conn->real_escape_string($data['password']);

        $query = "SELECT * FROM users WHERE email='$email'";
        $result = $conn->query($query);

        if ($result && $result->num_rows == 1) {
            $user = $result->fetch_assoc();
            if (password_verify($password, $user['password'])) {
                echo json_encode(array("success" => true, "message" => "Login effettuato con successo."));
            } else {
                echo json_encode(array("success" => false, "message" => "Email o password non validi."));
            }
        } else {
            echo json_encode(array("success" => false, "message" => "Email o password non validi."));
        }
    } else {
        echo json_encode(array("success" => false, "message" => "Email e password sono obbligatorie."));
    }
} else {
    echo json_encode(array("success" => false, "message" => "Dati non validi."));
}
} else {
echo json_encode(array("success" => false, "message" => "Metodo non supportato."));
}

$conn->close(); -->