<!DOCTYPE html>
<html>

<head>
    <title>Home</title>
    <link rel="stylesheet" href="home.css">
</head>

<body>
    <?php include "menu.php"; ?>

    <?php

    session_start();
    if (!array_key_exists("username", $_SESSION)) {
        header("location:logout.php");
    }


    // Ambil informasi nama dan level dari sesi
    $user = $_SESSION["username"]; // Anda perlu menyesuaikan dengan nama variabel yang digunakan pada sesi
    $level = $_SESSION["level"];

    ?>

    <div class="welcome-message">
        <h1>Selamat datang <?php echo $user; ?> (<?php echo $level; ?>) </h1>
    </div>


</body>

</html>