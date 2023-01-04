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
    <div class="container col-md-12">
    <div class="card-header bg-secondary text-white">
        Input Data Produk
    </div>   

<div class="card-body">
    <form action="prosesinput.php" method="POST" class="form-item">
    <form>
    <div class="form-group">
    <label for="nama"> Nama </label>
    <input type="text" name="nama" class="form-control col-md-9" placeholder="Masukkan Nama Produk">
    </div>

    <div class="form-group">
    <label for="jenis"> Jenis </label>
    <input type="text" name="jenis" class="form-control col-md-9" placeholder="Masukkan Jenis Produk">
    </div>

    <div class="form-group">
    <label for="harga"> Harga </label>
    <input type="text" name="harga" class="form-control col-md-9" placeholder="Masukkan Harga">
    </div>

    
    <div class="container col-md-6">
    <button type="submit" class="btn btn-success" name="simpan">SIMPAN</button>
    <button type="button" class="btn btn-danger" onclick="history.back();">BATAL</button>
    </div>  

    </form>
</body>
</html>