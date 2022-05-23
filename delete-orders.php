<?php
    include "koneksi.php";
    $id_detailorder = $_GET['id_detailorder'];
    $id_order = $_GET['id_order'];

    $query_detailorder = mysqli_query($koneksi, "DELETE FROM detail_order WHERE id_detailorder ='$id_detailorder'");
    $query_order = mysqli_query($koneksi, "DELETE FROM orders WHERE id_order ='$id_order'");

    if ($query_detailorder || $query_order){
        header("Location:detail-order.php");
    }else {
        echo "Data gagal delete";
    }
?>