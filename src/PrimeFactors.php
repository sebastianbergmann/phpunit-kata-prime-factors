<?php
class PrimeFactors
{
    public function generate($n)
    {
        $primes = array();

        for ($candidate = 2; $n > 1; $candidate++) {
            for (; $n % $candidate == 0; $n /= $candidate) {
                $primes[] = $candidate;
            }
        }

        return $primes;
    }
}
