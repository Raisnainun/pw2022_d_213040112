<?php 
require 'functions.php';

$id = $_GET["id"];

$parfum = query("SELECT * FROM parfum WHERE id = $id")[0];

if(isset($_POST["submit"])) {
 
if( ubah($_POST) > 0 ) {
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

    <title>ubah Data parfum</title>
  </head>
  <body>
        <div class="container">
            <h1>ubah Data produk</h1>

        <a href="index.php" class="btn btn-primary">Kembali ke Daftar parfum</a>

        <div class="row mt-3">
            <div class="col-8">
                <form action="" method="post" enctype = "multipart/form-data">
                <input type="hidden" name="id" value="<?= $parfum["$id"]; ?>">
                <input type="hidden" class="form-control" name="gambarlama" maxlength="9" style="width:120px"; required value= "<?= $parfum["gambar"]; ?>">
                    
                <div class="mb-3">
                <label for="stok" class="form-label">Stok</label>
                <input type="text" class="form-control" id="stok" name="stok" maxlength="9" style="width:120px"; required value= "<?= $parfum["stok"]; ?>">
                </div>

                <div class="mb-3">
                <label for="nama_parfum" class="form-label">Nama Parfum</label>
                <input type="text" class="form-control" id="nama_parfum" name="nama_parfum" required value= "<?= $parfum["nama_parfum"]; ?>">
                </div>

                <div class="mb-3">
                <label for="gambar" class="form-label">Gambar</label><br>
                <img src="img/<?= $parfum['gambar']?>"><br>
                <input type="file" class="form-control" id="gambar" name="gambar"  >
                </div>

                <div class="mb-3">
                <label for="deskripsi" class="form-label">Deskripsi</label>
                <input type="text" class="form-control" id="deskripsi" name="deskripsi"  style="height:120px"; style="width:120px"; required value= "<?= $parfum["deskripsi"]; ?>">
                </div>

                <div class="mb-3">
                <label for="harga" class="form-label">Harga</label>
                <input type="text" class="form-control" id="harga" name="harga" required value= "<?= $parfum["harga"]; ?>">
                </div>
                
                <div class="mb-3">
                <label for="kategori_parfum" class="form-label">Kategori</label>
                <input type="text" class="form-control" id="kategori_parfum" name="kategori_parfum" required value= "<?= $parfum["kategori_parfum"]; ?>">
                </div>

                <button type="submit" class="btn btn-warning" name="submit">Ubah Data</button>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    
  </body>
</html>