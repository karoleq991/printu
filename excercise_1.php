<?php
 function hashOrder(int $number): string {
    $hash = bcadd($number, '1234567');
    $hash = bcmul($hash, '456787');
    $hash = bcmod($hash, '10000000');
    $hash = str_pad($hash, 7, '0', STR_PAD_LEFT);
    return $hash;
}

?>