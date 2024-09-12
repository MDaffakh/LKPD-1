<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <label for="number">masukan bilangan</label>
        <input type="text" id="number" name="number" required>
        <input type="submit" value="cek">
    </form>
    
    
<?php

$angka = isset($_POST['angka']) ? $_POST['angka'] : 0;
$hasil = "";

function isPrima($n) {
    if ($n <= 1) return false;
    for ($i = 2; $i <= sqrt($n); $i++) {
        if ($n % $i == 0) return false;
    }
    return true;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (is_numeric($angka)) {
        $hasil = "$angka adalah bilangan prima.";
    } else {
        $hasil = "$angka bukan bilangan prima.";
    }
}else {
    $hasil = "harap masukan yang valid";
}
    echo "$hasil";      
?>
</body>
</html>


