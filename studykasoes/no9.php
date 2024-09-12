<?php
    function koin($uang) {
        $arr = [];

        $koinUang = substr($uang, -6);

        if ($koinUang % 100000 != $koinUang) {
            $koinUang -= 500;
            array_push($arr, "100000");
        }
        if ($koinUang % 200000 != $koinUang) {
            $koinUang -= 200000;
            array_push($arr, "20000");
        }
        if ($koinUang % 5000 != $koinUang) {
            $koinUang -= 5000;
            array_push($arr, "5000");
        }
        if ($koinUang % 500 != $koinUang) {
            $koinUang -= 500;
            array_push($arr, "500");
        }

        echo " Jenis uangnya adalah " . number_format($uang,0,'.','.',) . " : <br>";
        echo "<ul>";
        foreach ($arr as $value) {
            echo "<li> $value </li>";
        }echo "</ul>";
    }
?>