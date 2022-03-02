<?php 
// pengulangan 
// for 
// while 
// do.. while
// forech:pengulangan khusus array

// for( $i = 0; $i < 5; $i++ ) {
//     echo "HELLO WORLD! <br>";
// }
// $i = 0;
// while( $i < 5 ) {
//     echo "HELLO WORLD! <br>";
// $i++;   
// }
// $i = 10;
// do {
//     echo "HELLO WOLRD <br>";
// $i++;
// } while ( $i < 5);

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan 1</title>
</head>
<body>

<table border="1" cellpadding="10" cellspaing="0">
    <?php 
        for( $i = 1; $i <= 3; $i++ ) {
            echo "<tr>";
            for( $j = 1; $j <= 5; $j++) {
                echo "<td>$i,$j</td>"
            }
            echo "</tr>";
        }
    ?>

    <?php for( $i = 1; $i <= 3; ) : ?>
        <tr> 
            <?php for ( $j = 1; $j <= 5; $j++ ) : ?>
                <td><?= "$i,$j"; ?></td>
            <?php endfor; ?>
        </tr>
    <?php  endfor; ?>
</table>

    
</body>
</html>

// pengkodisian / percabangan 
// if else 
// if else if else 
//ternary
//switch

// untuk if 
// $x = 10;
// if( $x < 20){
//     echo "benar";
//     echo "<hr>";
// }

// untuk percabangan 
// $x = 30;
// if( $x < 20 ) {
//     echo "benar"; // jika benar akan menjalankan baris ini
// } else {
//     echo "salah"; // jika salah akan menjalankan baris ini
// } 

// untuk penggunaan if else if else 
// $x = 30;
// if( $x < 20 ){
//     echo "benar";
// } else if( $x == 20) { 
//     echo "bingo!"
// } else {
//     echo "salah" // menampung semua jawaban selain kondisi di atas
// }

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan 1</title>
    <style>
        .warna-baris {
            background-color: silver;
        }
    </style>
</head>
<body>
    
<table border="1" cellpadding="10" cellspaing="0">
    <?php for( $i = 1; $i <= 5; ) : ?>
        <?php if( $i % 2 == 1 ) : ?>
            <tr class="warna-baris"> 
        <?php else : ?>
            <tr>
        <?php endif; ?>
            <?php for ( $j = 1; $j <= 5; $j++ ) : ?>
                <td><?= "$i,$j"; ?></td>
            <?php endfor; ?>
        </tr>
    <?php  endfor; ?>
</table>
</body>
</html>

?>