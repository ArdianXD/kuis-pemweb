<?php
    include "koneksi.php";
    $kode_barang = $_GET['kode_barang'];

    $query = mysqli_query($koneksi, "DELETE FROM barang WHERE kode_barang ='$kode_barang'");

    if ($query){
        header("Location:tampilandata.php");
    }else {
        echo "Data gagal delete";
    }
?>