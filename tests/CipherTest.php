<?php

use PHPUnit\Framework\TestCase;

final class CipherTest extends TestCase
{

    function testCezar()
    {
        $message = ' TEST A Z ';
        $enc = App\Cipher::Cezar($message, false, 3);
        $dec = App\Cipher::Cezar($enc, true, 3);
        $this->assertIsString(
            $message,
            $dec
        );
    }

    function testBacon()
    {
        $message = ' TEST A Z ';
        $enc = App\Cipher::bacon($message, false);
        $dec = App\Cipher::bacon($enc, true);
        $this->assertIsString(
            $message,
            $dec
        );
    }


    function testAtbasz()
    {
        $message = ' TEST A Z ';
        $enc = App\Cipher::atbasz($message);
        $dec = App\Cipher::atbasz($enc);
        $this->assertIsString(
            $message,
            $dec
        );
    }
}