<?php

/**
 * Znajduje liczby, które się nie powtarzają
 *
 * @param $input array Tablica liczb
 * @return array
 */
function findSingle(array $input): array
{
    $out = [];

    $string_array = array_map('strval', $input);
    $count = array_count_values($string_array);

    foreach ($count as $key => $value) {
        if ($value == 1) {
            $out[] = $key;
        }
    }

    return  $out;
}



echo '<pre>';
print_r(findSingle([1, 2, 3, 4, 1, 2, 3]));
echo '</pre>';
// Array
// (
//     [0] => 4
// )

echo '<pre>';
print_r(findSingle([11, 21, 33.4, 18, 21, 33.39999, 33.4]));
echo '</pre>';
exit;


// Array
// (
//     [0] => 11
//     [1] => 33.39999
//     [2] => 18
// )