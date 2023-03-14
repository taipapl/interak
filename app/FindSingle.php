<?php

namespace App;

class FindSingle
{

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

        $float_array = array_map('floatval', $out);

        return  $float_array;
    }
}