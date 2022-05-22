<?php
include 'koneksi.php';

$id_detailorder = $_POST['id_detailorder'];
$quantity = $_POST['quantity'];
$id_order = $_POST['id_order'];
$id_barang = $_POST['id_barang'];
$tanggal = $_POST['tanggal'];
$status = $_POST['status'];

foreach ($id_detailorder as $key => $value) {
    $save_detail_order = "INSERT INTO detail_order(id_detailorder, quantity, id_order, id_barang) VALUES('".$value."','".$quantity[$key]."','".$id_order[$key]."','".$id_barang[$key]."')";
    $save_orders = "INSERT INTO orders(id_order, tanggal, status) VALUES('".$id_order[$key]."','".$tanggal[$key]."','Selesai')";
    $query_detail_order = mysqli_query($koneksi, $save_detail_order);
    $query_orders = mysqli_query($koneksi, $save_orders);
}

if ($query_detail_order || $query_orders) {
    header("location:input-transaksi.php");
}
else {
    echo "Data gagal dimasukkan";
}
?>