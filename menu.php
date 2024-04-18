<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="menu.css">
</head>

<body>

    <?php
    session_start();
    if (!array_key_exists("username", $_SESSION)) {
        header("location:logout.php");
    }

    ?>
    <div class="navbar">
        <nav>
            <img src="img/logo-removebg-preview.png" alt="Logo">
            <li><a href="logout.php">Log out</a></li>
            <li><a href="profil.php">Profil</a></li>
            <li><a href="pelanggan.php">Pelanggan</a></li>
            <li><a href="pembelian.php">Pembelian</a></li>
            <li><a href="penjualan.php">Penjualan</a></li>
            <li><a href="barang.php">Barang</a></li>
            <?php if ($_SESSION["level"] == "admin") : ?>
                <li><a href="user.php">User</a></li>
            <?php endif ?>
            <li class="home"><a href="home.php">Home</a></li>
        </nav>
    </div>

</body>

</html>