<?php

require "koneksi.php";

$nama = $_POST["nama"];
$type = $_POST["type"];
$stok = $_POST["stok"];
$harga_beli = $_POST["harga_beli"];
$harga_jual = $_POST["harga_jual"];

$sql = "INSERT INTO barang (nama, type, stok, harga_jual, harga_beli) VALUES ('$nama', '$type', '$stok', '$harga_jual', '$harga_beli')";
mysqli_query($koneksi, $sql);

if (mysqli_error($koneksi)) {
    echo mysqli_error($koneksi);
} else {
    header("location: barang.php");
}
