<?php

require "koneksi.php";

$id = $_POST["id"];
$nama = $_POST["nama"];
$type = $_POST["type"];
$stok = $_POST["stok"];
$harga_beli = $_POST["harga_beli"];
$harga_jual = $_POST["harga_jual"];

$sql = "UPDATE barang SET nama = '$nama', type = '$type', stok = '$stok', harga_beli = '$harga_beli', harga_jual = '$harga_jual' WHERE id = '$id'";
mysqli_query($koneksi, $sql);

if (mysqli_error($koneksi)) {
    echo mysqli_error($koneksi);
} else {
    header("location: barang.php");
}
