<?php 
 
 $barang = [

    [
    'nama_barang' => 'Babi guling',
    'harga_barang' => 90000,
    'jumlah_beli' => 1,
    ],
    [
    'nama_barang' => 'Kripik kecubung',
    'harga_barang' => 2000,
    'jumlah_beli' => 3,
     ],
     [
    'nama_barang' => 'Pasta gigi rasa ciu',
    'harga_barang' => 15000,
    'jumlah_beli' => 4,
    ],
    ];

    $price = 0;
    
   echo "Daftar belanjaan : <br>";
   echo "<ol>";

   foreach ($barang as $item) {
       $subprice = $item['harga_barang'] * $item['jumlah_beli'];
       echo "<li>" . $item['nama_barang'] . " (" . $item['jumlah_beli'] . ") : " . number_format($subprice, 0, ',', '.') . ",-</li>";
       $price += $subprice;
   }

   echo "</ol>";

   echo 'Total harganya yaitu <b>Rp. ' . number_format($price, 0, ',', '.') . "</b>";  
?>  