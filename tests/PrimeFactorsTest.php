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

    public function testTwo()
    {
        $this->assertEquals(array(2), $this->primeFactors->generate(2));
    }

    public function testThree()
    {
        $this->assertEquals(array(3), $this->primeFactors->generate(3));
    }

    public function testFour()
    {
        $this->assertEquals(array(2, 2), $this->primeFactors->generate(4));
    }

    public function testSix()
    {
        $this->assertEquals(array(2, 3), $this->primeFactors->generate(6));
    }

    public function testEight()
    {
        $this->assertEquals(array(2, 2, 2), $this->primeFactors->generate(8));
    }
}
