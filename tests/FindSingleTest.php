<?php

use App\FindSingle;
use PHPUnit\Framework\TestCase;

final class FindSingleTest extends TestCase
{

    function testFindSingle1()
    {
        $single  = new FindSingle();
        $array = $single->findSingle([1, 2, 3, 4, 1, 2, 3]);

        $this->assertEquals([4], $array);
    }


    function testFindSingle2()
    {
        $single  = new FindSingle();
        $array = $single->findSingle([11, 21, 33.4, 18, 21, 33.39999, 33.4]);
        $this->assertEquals([11, 18, 33.39999], $array);
    }
}