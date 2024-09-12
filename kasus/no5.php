
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <input type="text" name="text" required>
        <input type="submit">
    </form>
</body>
</html>


<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
$text = $_POST["text"];

$textbaru = strlen($text);

echo "Jumlah karakter : " . $textbaru;
}
?>
</body>
</html>