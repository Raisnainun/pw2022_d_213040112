<?php 
require 'functions.php';

$parfum = query("SELECT * FROM parfum");

if( isset($_GET["cari"]) ) {
    $parfum = cari($_GET["keyword"]);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Halaman admin </title>
    
</head>
<body>
    <div class="container">
    <h1>Daftar Penjualan</h1>

    <a href="tambah.php" class="btn btn-primary"> Tambah Data Produk</a>
    <br></br>
    
    <form action="" method="get">

    <input type="text" name="keyword" size="25" autofocus placeholder="masukan keyword pencarian..." autocomplete="off">
    <button type="submit" name="cari">cari</button>

    </form>
    
    <table class="table table-striped table-hover table-bordered mt-3">
    <tr class = "table-dark">
        <th>Stok</th>
        <th>nama parfum</th>
        <th>gambar</th>
        <th>deskripsi</th>
        <th>harga</th>
        <th>kategori parfum</th>
        <th>aksi</th>   
    </tr>
    
<?php foreach($parfum as $row) : ?>
    <tr>
        <td><?= $row["stok"]; ?></td>
        <td><?= $row["nama_parfum"]; ?></td>
        <td><img src="img/<?= $row["gambar"]; ?>" width="150"></td>
        <td><?= $row["deskripsi"]; ?>"</td>
        <td><?= $row["harga"]; ?></td>
        <td><?= $row["kategori_parfum"]; ?></td>
        <td>
            
            <a href="ubah.php?id=<?= $row["id"]; ?>" class="btn btn-warning">ubah</a>
            <a href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('anda sudah yakin?')"; class="btn btn-danger" >hapus</a>
            
        </td>
    </tr>
<?php endforeach; ?>
    </body>

</table>
</div>
</body>
</html>

