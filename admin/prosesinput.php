<?php
include "../conn.php";

$nama = $_POST['nama'];
$harga = $_POST['harga'];
$jenis = $_POST['jenis'];




$query= "INSERT INTO tbl_product (nama, harga, jenis)
VALUE ('$nama', '$harga', '$jenis')";

$hasil=mysqli_query($conn, $query);

if($hasil){
    header('Location:produk.php');
    echo "Input Data Berhasil";
}
else{
    echo "Input Data Gagal"; 
}
?>