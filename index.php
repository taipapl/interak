<?php


use App\Cipher;
use App\FindSingle;

require __DIR__ . '/vendor/autoload.php';


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

$single  = new FindSingle();

echo '<pre>';
print_r($single->findSingle([1, 2, 3, 4, 1, 2, 3]));
echo '</pre>';
// Array
// (
//     [0] => 4
// )

echo '<pre>';
print_r($single->findSingle([11, 21, 33.4, 18, 21, 33.39999, 33.4]));
echo '</pre>';
exit;


// Array
// (
//     [0] => 11
//     [1] => 33.39999
//     [2] => 18
// )