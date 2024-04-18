<!DOCTYPE html>
<html>

<head>
    <title>New Penjualan</title>
</head>

<body>
    <?php include "menu.php"; ?>

    <?php
    if ($_SESSION["level"] != "admin" && $_SESSION["level"] != "kasir") {

        echo "Anda tidak dapat mengakses halaman ini";
        exit;
    }
    ?>

    <?php
    require "koneksi.php";

    $sql = "SELECT * FROM barang";
    $query1 = mysqli_query($koneksi, $sql);

    $sql = "SELECT * FROM pelanggan";
    $query2 = mysqli_query($koneksi, $sql);

    ?>

    <div>
        <form action="create-penjualan.php" method="POST">
            <h1>Tambah Penjualan</h1>
            <table>
                <tr>
                    <td>Barang</td>
                    <td>
                        <select name="id_barang">
                            <?php while ($barang = mysqli_fetch_array($query1)) : ?>
                                <option value='<?= $barang["id"] ?>'>
                                    <?= $barang["nama"] ?>, harga: <?= $barang["harga_jual"] ?>, stok: <?= $barang["stok"] ?>
                                </option>
                            <?php endwhile ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>pelanggan</td>
                    <td>
                        <select name="id_pelanggan">
                            <?php while ($pelanggan = mysqli_fetch_array($query2)) : ?>
                                <option value='<?= $pelanggan["id"] ?>'>
                                    <?= $pelanggan["nama"] ?>
                                </option>
                            <?php endwhile ?>
                        </select>
                    </td>
                </tr>

                <tr>
                    <td>Jumlah</td>
                    <td><input type="number" min="0" name="jumlah"></td>
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