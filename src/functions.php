<?php

if (!function_exists('eqSumPowdig')) {
    /**
     * Finds the numbers below $h_max where the sum of the numbers'
     * digits, to the power $exp is equal to the number
     *
     * @param ind $h_max
     * @param ind $exp
     * @return array
     * @author Brett Santore
     */
    function eqSumPowdig($h_max, $exp)
    {
        $solution = [];
    
        for ($test_case=2; $test_case <= $h_max; $test_case++) {
        
            $sum = 0;
        
            foreach (str_split($test_case) as $num) {
                $sum += pow($num, $exp);
            }
        
            if ($test_case == $sum) {
                $solution[] = $test_case;
            }
        
        }
    
        return $solution;
    }
}
