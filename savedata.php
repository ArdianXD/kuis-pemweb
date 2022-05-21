<?php
    include "koneksi.php";

    $kode_barang = $_POST['kode_barang'];
    $nama_barang = $_POST['nama_barang'];
    $stok = $_POST['stok'];
    $harga = $_POST['harga'];
    $kategori = $_POST['kategori'];

    $query_insert = mysqli_query($koneksi,"INSERT INTO barang VALUES('$kode_barang','$nama_barang','$stok','$harga','$kategori')");

    if ($query_insert) {
        echo "Data barang berhasil dimasukkan";
    }
    else {
        echo "Data barang gagal dimasukkan";
    }
?>