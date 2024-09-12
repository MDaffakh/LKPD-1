<?php
$hariIni = date('l');
$totalPembelian = 130000;

$diskon = 0;

if ($hariIni === 'Tuesday') {
    $diskon = 5;
}

if ($totalPembelian > 100000) {
    $diskon = max($diskon, 7);
}

$totalDiskon = ($diskon / 100) * $totalPembelian;
$totalBayar = $totalPembelian - $totalDiskon;

echo "Hari ini adalah: $hariIni\n <br>"  ;

echo "Total Pembelian: Rp$totalPembelian\n <br>";
echo "Total yang harus dibayar: Rp" . number_format($totalBayar, 2, ',', '.') . "\n";
?>
