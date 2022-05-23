<?php
    include "koneksi.php";
  
    $kode_barang = $_POST['kode_barang'];
    $nama_barang = $_POST['nama_barang'];
    $stok = $_POST['stok'];
    $harga = $_POST['harga'];
    $kategori = $_POST['id_kategori'];
    $query = mysqli_query($koneksi, "UPDATE barang SET kode_barang = '$kode_barang', nama = '$nama_barang', stok = '$stok', harga = '$harga', id_kategori = '$kategori' WHERE kode_barang ='$kode_barang'");

    if ($query){
        header("Location:list-barang.php");
    }else {
        echo "Data gagal Update";
    }
?>