<!DOCTYPE html>
<html lang="en">

<head>
    <title>New Pelanggan</title>
    <link rel="stylesheet" href="new-pelanggan.css">
</head>

<body>
    <?php include "menu.php"; ?>

    <?php
    if ($_SESSION["level"] != "admin" && $_SESSION["level"] != "kasir") {
        echo "anda tidak dapat mengakses halaman ini";
        exit;
    }
    ?>

    <div>
        <form action="create-pelanggan.php" method="POST">
            <h1>Tambah Pelanggan</h1>
            <table border="1px">
                <tr>
                    <td>nama</td>
                    <td><input type="text" name="nama"></td>
                </tr>
                <tr>
                    <td>nomor telepon</td>
                    <td><input type="number" name="nomor_telepon"></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td><input type="text" name="alamat"></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <button type="submit">SIMPAN</button>
                        <button type="reset">RESET</button>
                    </td>
                </tr>
            </table>
        </form>
    </div>
</body>

</html>