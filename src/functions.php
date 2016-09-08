<?php
if ( ! function_exists('eqSumPowdig')) {
    function eqSumPowdig($hMac, $exmp)
    {
        return Santore\EqSumPowdig::exec($hMac, $exmp);
    }
}