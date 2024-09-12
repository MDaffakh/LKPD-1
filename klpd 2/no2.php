<?php 
//membuat variabel
$pembelanjaan = 130000 ;
// nama hari saat ini
$day = date ('l');
//diskonnya
$diskon1 = 0.07;//7%
$diskon2 = 0.05;//5%
//variabel untuk menyimpan total bayar setelah dipotong diskon
$totalbayar ; 

if ($pembelanjaan > 100000 && $day == " thursday") {
    $totalbayar = $pembelanjaan - ($pembelanjaan * ($diskon1 + $diskon2));
} else if ($pembelanjaan > 10000) {
    $totalbayar = $pembelanjaan - ($pembelanjaan * $diskon1 ) ;
} else if ($day == "Thursday") {
    $totalbayar = $pembelanjaan * $diskon2 ;
} else {
    $totalbayar = $pembelanjaan;
}


echo "hari ini hari " . $day;
echo "<br>";
echo "total belanja" . $pembelanjaan;
echo "<br>";
echo "total pembelanjaan ". number_format($totalbayar,0,'',',')

?>