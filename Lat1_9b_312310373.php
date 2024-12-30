<?php
function hitungPangkat($x, $y) {
    if ($y == 0) {
        return 1;
    } else {
        return $x * hitungPangkat($x, $y -1);
    }
}
    $x = 3;
    $y = 4;
    echo "$x pangkat $y adalah: " . hitungPangkat($x, $y);
?>