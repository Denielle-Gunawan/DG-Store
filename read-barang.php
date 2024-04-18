<!DOCTYPE html>
<html>

<head>
    <title>Read Barang</title>
</head>

<body>
    <?php include "menu.php"; ?>

    <?php

    require "koneksi.php";

    $id = $_GET["id"];

    $sql = "SELECT * FROM barang WHERE id = '$id'";
    $query = mysqli_query($koneksi, $sql);

    $barang = mysqli_fetch_array($query);
    ?>

    <div>
        <form action="update-barang.php" method="POST">
            <h1>Lihat Barang</h1>

            <input type="hidden" name="id" value="<?= $id ?>">

            <table>
                <tr>
                    <td>Nama</td>
                    <td><input type="text" name="nama" value="<?= $barang["nama"] ?>"></td>
                </tr>
                <tr>
                    <td>type</td>
                    <td>
                        <select name="type">
                            <option value="elemental" <?= $barang["type"] == "action" ? "selected" : "" ?>>Elemental</option>
                            <option value="beast" <?= $barang["type"] == "fighting" ? "selected" : "" ?>>Beast</option>
                            <option value="natural" <?= $barang["type"] == "shooting" ? "selected" : "" ?>>Natural</option>
                            <option value="gamepass" <?= $barang["type"] == "sport" ? "selected" : "" ?>>Gamepass</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Stok</td>
                    <td><input type="number" name="stok" value="<?= $barang["stok"] ?>"></td>
                </tr>
                <tr>
                    <td>Harga Beli</td>
                    <td><input type="number" name="harga_beli" value="<?= $barang["harga_beli"] ?>"></td>
                </tr>
                <tr>
                    <td>Harga Jual</td>
                    <td><input type="number" name="harga_jual" value="<?= $barang["harga_jual"] ?>"></td>
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