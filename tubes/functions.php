<?php 
// koneksi ke Database
$conn = mysqli_connect("localhost", "root", "", "I'sparkly");


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

        $stok = htmlspecialchars($data["stok"]);
        $nama_parfum = htmlspecialchars($data["nama_parfum"]);
        $deskripsi = htmlspecialchars($data["deskripsi"]);
        $harga = htmlspecialchars($data["harga"]);
        $kategori_parfum = htmlspecialchars($data["kategori_parfum"]);

        $gambar = upload();
        if( !$gambar ) {
            return false;
        }

        $query = "INSERT INTO parfum values 
                ('$stok', '$nama_parfum', '$gambar', '$deskripsi', '$harga', '$kategori_parfum') 
                ";
                
        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
    }

    function upload() {
        
        $namaFile = $_FILES[ 'gambar']['name'];
        $ukuranFile = $_FILES[ 'gambar']['size'];
        $error = $_FILES[ 'gambar']['error'];
        $tmpName = $_FILES[ 'gambar']['tmp_name'];

        if( $error === 4 ) {
            echo "<script>
                    alert('pilih gambar terlebih dahulu!');
            </script> ";
            return false; 
        } 

        $ekstensigambarvalid = ['jpg', 'jpeg', 'png'];
        $ekstensigambar = pathinfo($namaFile, PATHINFO_EXTENSION);

        if( !in_array($ekstensigambar, $ekstensigambarvalid) ) {
            echo "<script>
                    alert('yang anda pilih bukan gambar!');
            </script> ";
            return false; 
        }

        if( $ukuranFile > 1000000 ) {
            echo "<script>
                    alert('yang anda pilih bukan gambar!');
            </script> ";
            return false; 
        }

        $namafile = uniqid() . $namafile;
 
        move_uploaded_file($tmpName, 'img/' . $namaFile );

        return $namaFile;

}
        

        
    function hapus($id) {
        global $conn;
        mysqli_query($conn, "DELETE FROM parfum WHERE id = $id");

        return mysqli_affected_rows($conn);
    }

    function ubah($data){
        global $conn;

        $id = $data["id"];
        $stok = htmlspecialchars($data["stok"]);
        $nama_parfum = htmlspecialchars($data["nama_parfum"]);
        $deskripsi = htmlspecialchars($data["deskripsi"]);
        $harga = htmlspecialchars($data["harga"]);
        $kategori_parfum = htmlspecialchars($data["kategori_parfum"]);
        $gambarlama = htmlspecialchars($data["gambarlama"]);

        if( $_FILES['gambar']['error'] === 4) {
            $gambar = $gambarlama;
        } else {
            $gambar = upload();
        }
        

        $query = "UPDATE parfum SET 
                    stok = '$stok',
                    nama_parfum = '$nama_parfum',
                    gambar = '$gambar',
                    deskripsi = '$deskripsi',
                    harga = '$harga',
                    kategori_parfum = '$kategori_parfum'
                  WHERE id = $id
                ";
                
        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
    }

    function cari ($keyword) {
        $query = "SELECT * FROM parfum 
                    WHERE 
                  stok LIKE '%$keyword%' OR
                  nama_parfum LIKE '%$keyword%' OR
                  harga LIKE '%$keyword%' OR
                  kategori_parfum LIKE '%$keyword%'
                  ";
        return query($query);
    }
?>