<?php
class PrimeFactors
{
    public function generate($n)
    {
        $primes = array();

        if ($n > 1) {
            $primes[] = 2;
        }

        return $primes;
    }
}
