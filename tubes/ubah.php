<?php 
require 'functions.php';

$id = $_GET["id"];

$produk = query("SELECT * FROM produk WHERE id = $id")[0];

if( isset($_POST["submit"])) {

    if(ubah($_POST)> 0 ) {
        echo "
            <script>
                alert('Data berhasil diubah!');
                document.location.href = 'index.php';
            </script>
        ";
        
    } else {
        echo "
            <script>
                alert('Data gagal diubah!');
                document.location.href = 'index.php';
            </script>
        
        ";
    
   }


}

?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Ubah Data</title>
  </head>
  <body>
        <div class="container">
            <h1>Ubah Data Produk</h1>

        <a href="index.php" class="btn btn-primary">Kembali ke Daftar Produk</a>
        
        <div class="row mt-3">
        <form action="" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?= $produk["id"]; ?>">
            <input type="hidden" name="gambarlama" value="<?= $produk["gambar"]; ?> ">
            
            <div class="col-8">
                <div class="mb-3">
                <label for="nama_produk" class="form-label">Nama Produk</label>
                <input type="text" class="form-control" id="nama_produk" name="nama_produk" required value="<?= $produk["nama_produk"]; ?>">
                </div>

                <div class="mb-3">
                <label for="gambar" class="form-label">Gambar</label><br>
                <img src="img/<?= $produk['gambar']; ?>" width="120"><br>
                <input type="file" class="form-control" id="gambar" name="gambar">
                </div>

                <div class="mb-3">
                <label for="deskripsi" class="form-label">Deskripsi</label>
                <textarea class="form-control" id="deskripsi" name="deskripsi" rows="5" required></textarea>
                </div>

                <div class="mb-3">
                <label for="harga" class="form-label">Harga</label>
                <input type="text" class="form-control" id="harga" name="harga" required value="<?= $produk["harga"]; ?>">
                </div>

                <div class="mb-3">
                <label for="stok" class="form-label">Stok</label>
                <input type="text" class="form-control" id="stok" name="stok" maxlength="9" style="width:120px" required value="<?= $produk["stok"]; ?>">
                </div>
                
                <div class="mb-3">
                <label for="kategori" class="form-label">Kategori</label>
                <input type="text" class="form-control" id="kategori" name="kategori" required value="<?= $produk["kategori"]; ?>">
                </div>

                <button type="submit" class="btn btn-primary" name="submit">Ubah Data</button>
            </div>
        </div>
        </form >
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    
  </body>
</html>