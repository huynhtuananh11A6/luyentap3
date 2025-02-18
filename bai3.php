<?php
function timGiaTri($giaTri, $mang) {
    for ($i = 0; $i < count($mang); $i++) {
        if ($mang[$i] == $giaTri) {
            return $i;
        }
    }
    return -1;
}

$mang = [10, 20, 30, 40, 50];
$giaTri = 30;
$result = timGiaTri($giaTri, $mang);
echo $result;  
?>
