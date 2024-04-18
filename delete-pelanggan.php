<?php

require "koneksi.php";

session_start();

if ($_SESSION["level"] != "admin") {
    echo "Anda tidak dapat menghapus barang";
    exit;
}

$id = $_POST["id"];

$sql = "DELETE FROM pelanggan WHERE id = '$id'";
mysqli_query($koneksi, $sql);

if (mysqli_query($koneksi, $sql)) {
    echo mysqli_error($koneksi);
} else {
    header("location: pelanggan.php");
}
