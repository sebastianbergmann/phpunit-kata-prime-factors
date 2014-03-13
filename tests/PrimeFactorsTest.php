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

    public function testOne()
    {
        $this->assertEquals(array(), $this->primeFactors->generate(1));
    }
}
