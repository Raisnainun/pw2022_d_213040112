<?php 
session_start();

if( !isset($_SESSION["login"]) ) {
	header("Location: login.php");
	exit;
}




require 'functions.php';

$produk = query("SELECT * FROM produk");

if( isset($_POST["cari"]) ) {
    $produk = cari($_POST["keyword"]);
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Halaman Admin</title>
</head>
<body>
 
<div class="container">
    <h1>Daftar Penjualan</h1>
<div class="mb-3">
    <a href="logout.php" class="btn btn-primary" >Logout</a>
</div>

    <a href="tambah.php" class="btn btn-primary"> Tambah Data Produk</a>
    
    
    <form action="" method="post">
        <br>
        <input type="text" name="keyword" size="30" autofocus placeholder="masukan keyword pencarian..." autocomplete="off">
        <button type="submit" name="cari" class= "btn btn-primary">Cari</button>
    </form>

    <table class="table table-striped table-hover table-bordered mt-3">
    <tr class = "table-dark">
        <th>NO.</th>
        <th>Nama Produk</th>
        <th>Gambar</th>
        <th>Deskripsi</th>
        <th>Harga</th>
        <th>Stok</th>
        <th>Kategori</th>
        <th>aksi</th>   
    </tr>
    <?php $i = 1; ?>
    <?php foreach( $produk as $row ) :?>
    <tr>
        <td><?= $i; ?></td>
        <td><?= $row["nama_produk"]; ?></td>
        <td><img src="img/<?= $row["gambar"]; ?>" width="150" ></td>
        <td><?= $row["deskripsi"]; ?></td>
        <td><?= $row["harga"]; ?></td>
        <td><?= $row["stok"]; ?></td>
        <td><?= $row["kategori"]; ?></td>
        <td>
            <a href="ubah.php?id=<?= $row["id"]; ?>" class="btn btn-warning">ubah</a>
            <a href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('anda sudah yakin?');" class="btn btn-danger">hapus</a> 
        </td>
    </tr>
    <?php $i++; ?>
<?php endforeach; ?>
    </table>
</div>
</body>
</html>