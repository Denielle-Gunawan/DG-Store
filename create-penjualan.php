<?php

require "koneksi.php";

session_start();

$id_barang = $_POST["id_barang"];
$jumlah = $_POST["jumlah"];
$id_pelanggan = $_POST["id_pelanggan"];

$sql = "SELECT harga_jual, stok FROM barang WHERE id = '$id_barang'";
$query = mysqli_query($koneksi, $sql);
$barang  = mysqli_fetch_array($query);

if ($jumlah > $barang["stok"]) {
    echo "Stok barang tidak mencukupi";
    exit;
}

$total_harga = $jumlah * $barang["harga_jual"];

$id_staff = $_SESSION["id"];

$sql = "INSERT INTO penjualan (id_barang, jumlah, total_harga, id_pelanggan, id_staff) VALUES ('$id_barang','$jumlah', '$total_harga','$id_pelanggan', '$id_staff')";
mysqli_query($koneksi, $sql);

$sql = "UPDATE barang SET stok = stok - $jumlah WHERE id = '$id_barang'";
mysqli_query($koneksi, $sql);

if (mysqli_error($koneksi)) {
    echo mysqli_error($koneksi);
} else {
    header("location: penjualan.php");
}
