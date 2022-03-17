<?php
// array multidimensi (materi youtube WPU)
// array didalam array
// array numerik
// array numerik adalah array yang index-nya angka
$mahasiswa = [
    ["Raisa  Isna Ainun", "213040112", "Teknik informatika", "raisaisnaainun@gmail.com"],
    ["Putri azizah qudsiyah", "213040116", "Teknik Informatika", "putriazizah@gmail.com"],
    ["vina nurfauziah R", "213040115", "Teknik Informatika", "Vinanurfauziahr@gmail.com"]
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar $mahasiswa</title>
</head>
<body>

<h1>Daftar mahasiswa</h1>
<?php foreach( $mahasiswa as $mhs ) : ?>
<ul>
    <li>Nama : <?= $mhs[0]; ?></li>
    <li>NRP : <?= $mhs[1]; ?></li>
    <li>Jurusan : <?= $mhs[2]; ?></li>
    <li>Email : <?= $mhs[3]; ?></li>
</ul>
<?php endforeach; ?> 
</body>
</html>
