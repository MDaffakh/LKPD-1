<?php
function uniqueDepartments($namajurusan) {
    $arrayjurusan = array_map('trim', explode(',', $namajurusan));
    
    $arrayUnique = array_unique($arrayjurusan);
    
    return array_values($arrayUnique);
}

$jurusan = "PPLG, HTL, KLN, PMN, pplg, htl";
print_r(uniqueDepartments($jurusan));
?>