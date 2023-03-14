<?php

class Cipher
{

    static function cezar(string $mes, bool $des = false, int $jump = 5): string
    {
        $out = '';
        $letters = 'ABCDEFGHIJKLMNOPRSTUWYZ ';

        $array_letters = str_split($letters);
        $array_message = str_split($mes);

        foreach ($array_message as $value) {

            $search_key = array_search($value,  $array_letters);

            if (!is_numeric($search_key)) {
                $out .= 'X';
            } else {
                switch ($des) {
                    case 1:
                        $jump_key = $search_key - $jump;
                        $modulo = ($jump_key % count($array_letters));
                        $modulo = ($modulo < 0) ? count($array_letters) + $modulo : $modulo;
                        break;
                    default:
                        $jump_key = $search_key + $jump;
                        $modulo = ($jump_key % count($array_letters));
                        break;
                }
                $out .= $array_letters[$modulo];
            }
        }

        return $out;
    }

    static function bacon(string $mes, bool $des = false): string
    {
        $out = '';

        switch ($des) {
            case true:
                $array_message = str_split($mes, 5);
                break;
            default:
                $array_message = str_split($mes);
                break;
        }

        $array_letters = [
            'A'  => 'aaaaa',
            'B'  => 'aaaab',
            'C'  => 'aaaba',
            'D'  => 'aaabb',
            'E'  => 'aabaa',
            'F'  => 'aabab',
            'G'  => 'aabba',
            'H'  => 'aabbb',
            'I' => 'abaaa',
            'J'  => 'babba',
            'K'  => 'abaab',
            'L'  => 'ababa',
            'M'  => 'ababb',
            'N'  => 'abbaa',
            'O'  => 'abbab',
            'P'  => 'abbba',
            'Y'  => 'abbbb',
            'R'  => 'baaaa',
            'S'  => 'baaab',
            'T'  => 'baaba',
            'U' => 'baabb',
            'W'  => 'babaa',
            ' '  => 'babab',
            'Z'  => 'babbb'
        ];


        foreach ($array_message as $key => $value) {
            switch ($des) {
                case true:
                    $out .=  array_search($value,  $array_letters);
                    break;
                default:
                    $out .= $array_letters[$value];
                    break;
            }
        }
        return $out;
    }

    static function atbasz(string $message, bool $des = false)
    {
        $out = '';
        $letters = 'ABCDEFGHIJKLMNOPRSTUWYZ ';

        $array_letters = str_split($letters);
        $array_message = str_split($message);

        foreach ($array_message as $key => $value) {

            $search_key = array_search($value,  $array_letters);
            $new_key = count($array_letters) - $search_key;
            $out .= $array_letters[$new_key - 1];
        }
        return $out;
    }
}


$enc = Cipher::cezar('TO CO WYRYTE W KAMIENIU BY PRZETRWALO WIEKI NIE BRZMI DZIS TAK SAMO JASNO', 0, 33);
echo '<pre>';
echo "CEZAR\n";
print_r($enc);
echo '</pre>';

$dec_mes = Cipher::cezar($enc, 1, 33);

echo '<pre>';
print_r($dec_mes);
echo '</pre>';


$enc = Cipher::bacon('JESLI PRAWDA NIE ISTNIEJE TO PRZYNAJMNIEJ TO ZADANIE MUSI BYC PRAWDZIWE', 0);

echo '<pre>';
echo "Bacon\n";
print_r($enc);
echo '</pre>';

$dec_mes = Cipher::bacon($enc, 1);

echo '<pre>';
print_r($dec_mes);
echo '</pre>';


$enc = Cipher::atbasz('WOLA ZYCIA TLUMACZY WSZYTKO WOLI ZYCIA NIE TLUMACZY NIC', 0);
echo '<pre>';
echo "Atbasz\n";
print_r($enc);
echo '</pre>';

$dec_mes = Cipher::atbasz($enc, 1);

echo '<pre>';
print_r($dec_mes);
echo '</pre>';