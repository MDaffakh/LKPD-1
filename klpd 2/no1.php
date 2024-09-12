<?php
// variabel $text berisi string yang ingin diperiksa.
    $text = "Selamat Ulang Tahun yang ke-17!";

 // Mencocokkan semua karakter dalam string yang bukan huruf, angka, atau spasi
 //pettern untuk mencocokan kata
    preg_match_all('/[^a-zA-Z0-9\s]/' , $text , $matches);

        //mencari semua simbol karakter yang bukan huruf atau angka
    if (count($matches[0]) > 0) {

        //menghilangkan duplikasi simbol
        $uniqueSymbols = array_unique($matches[0]);

        // Menampilkan karakter unik yang ditemukan, dipisahkan oleh koma dan spasi
        echo "karakter yang terdapat pada kalimat : " . implode(' , ', $uniqueSymbols);
    } else {
        //jika simbol tidak ditemukan maka akan muncul kalimat tersebut
        echo "tidak terdapat simbol pada kalimat.";
    }


?>