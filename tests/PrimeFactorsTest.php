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
     * @param integer $n
     * @param array   $expected
     * @dataProvider provider
     */
    public function testGenerationWorksCorrectly($n, array $expected)
    {
        $this->assertEquals($expected, $this->primeFactors->generate($n));
    }

    public function provider()
    {
        return array(
            array(1, array()),
            array(2, array(2)),
            array(3, array(3)),
            array(4, array(2, 2)),
            array(6, array(2, 3)),
            array(8, array(2, 2, 2)),
            array(9, array(3, 3))
        );
    }
}
