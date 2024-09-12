<?php

$barang = [
    [
        'nama_barang' => 'Pasta Gigi',
        'harga_barang' => 18000,
        'jumlah_beli' => 1,
    ],
    [
        'nama_barang' => 'Sabun Mandi',
        'harga_barang' => '5000',
        'jumlah_beli' => 3,
    ],
    [
        'nama_barang' => 'AloeVera Sheet Mask',
        'harga_barang' => '15000',
        'jumlah_beli' => 4,
    ],
];

    //Inisialisasi variable $price untuk menyimpan total harga
    $price = 0;

    echo "Daftar belanjaan : <br>";
    echo "<ol>";

    //
    foreach ($barang as $item) {
        
        $subPrice = $item['harga_barang'] * $item['jumlah_beli'];
    }