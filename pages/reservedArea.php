<?php

session_start();
if(!isset($_SESSION['log']) || $_SESSION['log'] !== true){
    header("location: loginMain.php");
    exit;
};
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Area Privata</title>
    <link href="../src/input.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <link rel="icon" href="../assets/logo_Off.webp" type="image/x-icon">
</head>
<body>
    <h1>Area Privata</h1>
    <br>
    <?php 
        echo "sei nell'area riservata, Benvenuto " . $_SESSION['name'];
    ?>

    <button class="bg-slate-100 rounded-lg text-black p-1"><a href="../index.php">Home</a></button>

</body>
</html>