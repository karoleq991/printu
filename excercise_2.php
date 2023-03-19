<?php
 function findUniqueString(string $s): int {
    $char_counts = array_count_values(str_split($s));
    foreach(str_split($s) as $i => $char) {
        if ($char_counts[$char] === 1) {
            return $i + 1;
        }
    }
    return -1;
}
?>