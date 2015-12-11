<?php

class MathTest extends PHPUnit_Framework_TestCase 
{
    
    /**
     * @dataProvider dataProvier
    */
    public function testEqSumPowdig($number, $exp, $expected) {
        $this->assertEquals($expected, eqSumPowdig($number, $exp));
    }
    
    public function dataProvier() {
        return [
            [100,2,[]],
            [153,3,[153]],
            [200,3,[153]],
            [370, 3, [153, 370]]
        ];
    }
}