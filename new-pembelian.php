<!DOCTYPE html>
<html lang="en">
<head>
    <title>New Pembelian</title>
</head>
<body>
    </php include "menu.php"; ?> 

    <?php 
    
    require "koneksi.php";

    $sql = "SELECT * FROM barang";
    $query = mysqli_query($koneksi, $sql);
    ?>

    <div>
        <form action="create-pembelian.php" method="POST">
            <h1>Tambah Pembelian</h1>
            <table>
                <tr>
                    <td>Barang</td>
                    <td>
                        <select name="id_barang">
                            <?php while ($barang = mysqli_fetch_array($query)) : ?>
                                <option value='<?= $barang["id"] ?>'>
                                    <?= $barang["nama"] ?>, harga: <?= $barang["harga_beli"] ?>, stok: <?= $barang["stok"] ?>
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