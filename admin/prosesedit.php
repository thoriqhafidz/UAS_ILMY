<?php
include "../conn.php";

$id_produk = $_POST['id_produk'];
$nama = $_POST['nama'];
$jenis = $_POST['jenis'];
$harga = $_POST['harga'];




    $query= "UPDATE tbl_product set id_produk='$id_produk', nama='$nama', jenis='$jenis', harga='$harga' WHERE id_produk='$id_produk'";

    $hasil=mysqli_query($conn, $query);

    if($hasil){
        header('Location:produk.php');
    }
    else{
        echo "Edit Data Gagal!";
    }

?>