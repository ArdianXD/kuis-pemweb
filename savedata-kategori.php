<?php
    include "koneksi.php";

    $id_kategori = $_POST['id_kategori'];
    $kategori = $_POST['kategori'];

    $query_insert = mysqli_query($koneksi,"INSERT INTO kategori VALUES('$id_kategori','$kategori')");

    if ($query_insert) {
        header("location:input-kategori.php");
    }
    else {
        echo "Data kategori dimasukkan";
    }
?>