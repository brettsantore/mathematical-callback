<?php namespace Santore;

class EqSumPowdig
{
    /**
     * The exponent
     *
     * @var int
     */
    protected $exp;

    /**
     * The maximum number to check
     *
     * @var int
     */
    protected $hMax;

    /**
     * Finds the numbers below $h_max where the sum of the numbers'
     * digits, to the power $exponent is equal to the number
     *
     * @author Brett Santore
     *
     * @param $hMax
     * @param $exp
     *
     * @return
     */
    public static function exec($hMax, $exp)
    {
        return (new static($hMax, $exp))->getResults();
    }

    /**
     * EqSumPowdig Constructor
     *
     * @param int $hMax
     * @param int $exp
     */
    private function __construct($hMax, $exp)
    {
        $this->hMax = $hMax;
        $this->exp  = $exp;
    }

    /**
     * Get $hMax
     *
     * @return int
     */
    protected function getHMax()
    {
        return $this->hMax;
    }

    /**
     * Get $exp
     *
     * @return int
     */
    protected function getExp()
    {
        return $this->exp;
    }

    /**
     * Returns the numbers that satisfy the condition
     *
     * @return array
     */
    protected function getResults()
    {
        return array_values($this->getFilteredResults());
    }

    /**
     * Get the filtered results
     *
     * @return array
     */
    protected function getFilteredResults()
    {
        return array_filter(range(2, $this->getHMax()), function ($testCase) {
            return $testCase == array_sum($this->powerOfEachNumber(str_split($testCase)));
        });
    }

    /**
     * Multiply each item to a power
     *
     * @param $testCase
     *
     * @return array
     */
    protected function powerOfEachNumber($testCase)
    {
        return array_map(function ($number) {
            return pow($number, $this->getExp());
        }, $testCase);
    }
}