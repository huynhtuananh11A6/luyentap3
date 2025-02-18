<?php
function daoNguocMang($mang) {
    return array_reverse($mang);
}

$mang = [1, 2, 3, 4, 5];
$result = daoNguocMang($mang);
print_r($result);
?>
