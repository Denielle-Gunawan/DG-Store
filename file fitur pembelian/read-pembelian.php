<!DOCTYPE html>
<html lang="en">
<head>  
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Read Pembelian</title>
</head>
<body>
    <?php include "menu.php"; ?>

    <?php 
    
    require "koneksi.php";

    $id = $_GET["id"];

    $sql = "SELECT pembelian.id, barang.nama as nama_barang, pembelian.jumlah, pembelian.total_harga, user.username, pembelian.created_at FROM barang JOIN pembelian ON barang.id = pembelian.id_barang JOIN user ON user.id = pembelian.id_staff WHERE pembelian.id = '$id'";
    $query = mysqli_query($koneksi, $sql);
    $pembelian = mysqli_fetch_array($query);
    ?>

    <div>
        <h1>Lihat Pembelian</h1>
        <table>
            <tr>
                <td>Nama Barang</td>
                <td><input readonly type="text" value="<?= $pembelian["nama_barang"] ?>"></td>
            </tr>
            <tr>
                <td>Jumlah</td>
                <td><input readonly type="text" value="<?= $pembelian["jumlah"] ?>"></td>
            </tr>
            <tr>
                <td>Total Harga</td>
                <td><input readonly type="text" value="<?= $pembelian["total_harga"] ?>"></td>
            </tr>
            <tr>
                <td>Diimput oleh</td>
                <td><input readonly type="text" value="<?= $pembelian["username"] ?>"></td>
            </tr>
            <tr>
                <td>Waktu</td>
                <td><input readonly type="text" value="<?= $pembelian["created_at"] ?>"></td>
            </tr>
        </table>
    </div>
</body>

</html>