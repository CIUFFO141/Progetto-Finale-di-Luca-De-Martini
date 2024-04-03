<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login/Register</title>
    <link href="../src/input.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <link rel="icon" href="../assets/logo_Off.webp" type="image/x-icon">
</head>

<body>
    <div class="flex justify-center items-center">
        <?php include '../components/header.php'; ?>

        <div id="login" class="visible">
            <?php include '../components/form_login.php'; ?>
        </div>
        <div id="register" class="hidden">
            <?php include '../components/form_register.php'; ?>
        </div>

        <?php include '../components/footer.php'; ?>
    </div>

</body>