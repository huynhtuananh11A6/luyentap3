<?php
function xapXep($mang) {
    $length = count($mang);
    for ($i = 0; $i < $length - 1; $i++) {
        for ($j = 0; $j < $length - $i - 1; $j++) {
            if ($mang[$j] > $mang[$j + 1]) {
                $temp = $mang[$j];
                $mang[$j] = $mang[$j + 1];
                $mang[$j + 1] = $temp;
            }
        }
    }
    return $mang;
}

$mang = [5, 3, 8, 4, 2];
$result = xapXep($mang);
print_r($result);
?>
