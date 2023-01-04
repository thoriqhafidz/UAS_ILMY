<?php
include "../conn.php";

$kode=$_GET['id'];

$query="DELETE from tbl_product WHERE id_produk='$kode'";

$hasil=mysqli_query($conn, $query);

if($hasil){
    header('Location:produk.php');
}
else{
    echo "Proses Hapus Gagal";
}