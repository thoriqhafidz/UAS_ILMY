<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="../assets/css/main.css" rel="stylesheet">
<!-- Vendor CSS Files -->

<style>
table {
  border-collapse: collapse;
  border-spacing: 0;
  width: 100%;
  border: 1px solid #ddd;
}

th, td {
  text-align: left;
  padding: 16px;
}

tr:nth-child(even) {
  background-color: #f2f2f2;
}

</style>
</head>
<?php
include_once("../conn.php");
$nomer = 1;
$query = "SELECT * FROM tbl_product";

$hasil = mysqli_query($conn, $query);

?>
<body>

<h2 align="center">PRODUK</h2>
<center>
<br>
    <button type="1" class="btn btn-primary btn-block mb-4"> <a href="formtambahproduk.php">TAMBAH PRODUK</a> </button>
    <br>
    <br>
</center>
<table>
  <tr>
    <th>No</th>
    <th>Nama</th>
    <th>Jenis</th>
    <th>Harga</th>
    <th>Aksi</th>
  </tr>
  <?php 
        while ($data=mysqli_fetch_array($hasil)){ ?>
  <tr>
    <td align="center"><?php echo $nomer; ?> .</td>
    <td><?php echo $data['nama'];?></td>    
    <td align="center"><?php echo $data['jenis'];?></td>    
    <td>Rp. <?php echo $data['harga'];?></td>
    <td align="center">
            <button><a href="formeditproduk.php?id=<?php echo $data['id_produk']; ?>">Ubah</a></button>
            |
            <button><a href="proseshapus.php?id=<?php echo $data['id_produk']; ?>"onclick="return confirm('Apakah anda yakin ingin menghapus data penjualan ini?')">Hapus</a></button>
            </td>
  </tr>
  <?php $nomer++; } ?>

</table>

</body>
</html>
