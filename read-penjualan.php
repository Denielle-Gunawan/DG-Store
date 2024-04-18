<!DOCTYPE html>
<html>

<head>
    <title>Read Penjualan</title>
</head>

<body>
    <?php include "menu.php"; ?>

    <?php

    require "koneksi.php";

    $id = $_GET["id"];

    $sql = "SELECT penjualan.id, barang.nama as nama_barang, penjualan.jumlah, penjualan.total_harga, user.username, penjualan.created_at, pelanggan.nama as nama_pelanggan FROM barang JOIN penjualan on barang.id = penjualan.id_barang JOIN user ON user.id = penjualan.id_staff JOIN pelanggan on pelanggan.id = penjualan.id_pelanggan WHERE penjualan.id = '$id' ";
    $query = mysqli_query($koneksi, $sql);
    $penjualan = mysqli_fetch_array($query);
    ?>

    <div>
        <h1>Lihat Penjualan</h1>
        <table>
            <tr>
                <td>Nama Barang</td>
                <td><input readonly type="text" value="<?= $penjualan["nama_barang"] ?>"></td>
            </tr>
            <tr>
                <td>Jumlah</td>
                <td><input readonly type="text" value="<?= $penjualan["jumlah"] ?>"></td>
            </tr>
            <tr>
                <td>Total Harga</td>
                <td><input readonly type="text" value="<?= $penjualan["total_harga"] ?>"></td>
            </tr>
            <tr>
                <td>Pelanggan</td>
                <td><input type="text" value="<?= $penjualan["nama_pelanggan"] ?>"></td>
            </tr>
            <tr>
                <td>Diimput oleh</td>
                <td><input readonly type="text" value="<?= $penjualan["username"] ?>"></td>
            </tr>
            <tr>
                <td>Waktu</td>
                <td><input readonly type="text" value="<?= $penjualan["created_at"] ?>"></td>
            </tr>
        </table>
    </div>
</body>

</html>