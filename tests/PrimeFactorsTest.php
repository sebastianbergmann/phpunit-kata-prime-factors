<?php
class PrimeFactorsTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var PrimeFactors
     */
    private $primeFactors;

    protected function setUp()
    {
        $this->primeFactors = new PrimeFactors;
    }

    /**
     * @param array   $expected
     * @param integer $n
     * @dataProvider provider
     */
    public function testGenerationWorksCorrectly(array $expected, $n)
    {
        $this->assertEquals($expected, $this->primeFactors->generate($n));
    }

    public function provider()
    {
        return array(
            array(array(), 1),
            array(array(2), 2),
            array(array(3), 3),
            array(array(2, 2), 4),
            array(array(2, 3), 6),
            array(array(2, 2, 2), 8),
            array(array(3, 3), 9)
        );
    }
}
