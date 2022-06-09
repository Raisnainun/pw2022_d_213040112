<?php
$conn = mysqli_connect("localhost", "root", "", "blasomee");


function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data) {
    global $conn;

    $nama_produk = htmlspecialchars($data["nama_produk"]);
    $deskripsi = htmlspecialchars($data["deskripsi"]);
    $harga = htmlspecialchars($data["harga"]);
    $stok = htmlspecialchars($data["stok"]);
    $kategori = htmlspecialchars($data["kategori"]);

    $gambar = upload();
    if( !$gambar ) {
        return false;
    }

    $query = "INSERT INTO produk
                    VALUES
                    ('', '$nama_produk', '$gambar', '$deskripsi', '$harga', '$stok', '$kategori')  
                ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);

}

function upload() {
    
    $namaFile = $_FILES[ 'gambar']['name'];
    $ukuranFile = $_FILES[ 'gambar']['size'];
    $error = $_FILES[ 'gambar']['error'];
    $tmpname = $_FILES[ 'gambar']['tmp_name'];
    if( $error === 4 ) {
        echo "<script>
                alert('pilih gambar terlebih dahulu!');
        </script> ";
        return false; 
    } 

    $ekstensigambarvalid = ['jpg', 'jpeg', 'png'];
    $ekstensigambar = explode('.', $namaFile);
    $ekstensigambar = strtolower(end($ekstensigambar) ) ;
    if( !in_array($ekstensigambar, $ekstensigambarvalid) ) {
        echo "<script>
                alert('yang anda upload bukan gambar!');
        </script> ";
        return false; 
    }

    if( $ukuranFile > 1000000 ) {
        echo "<script>
                alert('ukuran gambar terlalu besar!');
        </script> ";
        return false; 
    }

    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $ekstensigambar;

    move_uploaded_file($tmpname, 'img/' . $namaFileBaru );
    return $namaFileBaru;
}

function hapus($id) {
    global $conn;

    mysqli_query($conn, "DELETE FROM produk WHERE id = $id");
    return mysqli_affected_rows($conn);
}

function ubah($data) {
    global $conn;

    $id = $data["id"];
    $nama_produk = htmlspecialchars($data["nama_produk"]);
    $deskripsi = htmlspecialchars($data["deskripsi"]);
    $harga = htmlspecialchars($data["harga"]);
    $stok = htmlspecialchars($data["stok"]);
    $kategori = htmlspecialchars($data["kategori"]);
    $gambarlama = htmlspecialchars($data["gambarlama"]);

    if($_FILES['gambar']['error'] === 4) {
        $gambar = $gambarlama;
    } else {
        $gambar = upload();
    }

    $query = "UPDATE produk SET 
                    nama_produk = '$nama_produk',
                    gambar = '$gambar',
                    deskripsi = '$deskripsi',
                    harga = '$harga',
                    stok = '$stok',
                    kategori = '$kategori'
                WHERE id = $id
                ";
                
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function cari($keyword) {
    $query = "SELECT * FROM produk 
                WHERE
                nama_produk LIKE'%$keyword%' OR
                kategori LIKE'%$keyword%' OR
                stok LIKE'%$keyword%' OR
                harga LIKE'%$keyword%' 
                ";
                return query($query);
}
    
function registrasi($data) {
    global $conn;

    $username = strtolower(stripslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $cpassword = mysqli_real_escape_string($conn, $data["cpassword"]);

    $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");
        if(mysqli_fetch_assoc($result)) {
            echo "<script>
                    alert('username sudah terdaftar!');
                </script>";
            return false;
        }

        if( $password !== $cpassword) {
            echo "<script>
                    alert('konfirmasi password tidak cocok!');
                </script>";
            return false;
        }
        $password =password_hash($password, PASSWORD_DEFAULT);

        mysqli_query($conn, "INSERT INTO user VALUES('', '$username', '$password')");
        return mysqli_affected_rows($conn);
}




?>