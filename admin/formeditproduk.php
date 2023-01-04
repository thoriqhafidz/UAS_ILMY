<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-compatible" content="ie=edge">
    <title>Data Produk</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/jquery-3.4.1.min.js"></script>
</head>
<body>
<?php
    include "../conn.php";
    $id=$_GET['id'];

    $query="SELECT * FROM tbl_product WHERE id_produk='$id'";
    $hasil=mysqli_query($conn, $query);
?>
    <div class="container col-md-12">
    <div class="card-header bg-secondary text-white">
        Edit
    </div>   

<div class="card-body">
    <form action="prosesedit.php" method="POST" class="form-item">
    <form>
    <?php while ($data=mysqli_fetch_array($hasil)){ ?>
    <div class="form-group">
    <label for="nama"> Nama Produk </label>
    <input type="text" class="form-control col-md-9" value="<?php echo $data['nama'] ?>" name="nama" id="nama" required>
    <input type="hidden" value="<?php echo $data['id_produk'] ?>" name="id_produk" id="id_produk" required>

    </div>

    <div class="form-group">
    <label for="jenis"> Jenis Produk </label>
    <input type="text" class="form-control col-md-9" value="<?php echo $data['jenis'] ?>" name="jenis" id="jenis" required>
    </div>

    <div class="form-group">
    <label for="harga"> Harga </label>
    <input type="text " class="form-control col-md-9" value="<?php echo $data['harga'] ?>" name="harga" id="harga" required>
    </div>

    <?php } ?>
    <div class="container col-md-6">
    <button type="submit" class="btn btn-success" name="simpan">SIMPAN</button>
    <button type="button" class="btn btn-danger" onclick="history.back();">BATAL</button>
    </div>  

    </form>
</body>
</html>