<?php
class PrimeFactors
{
    public function generate($n)
    {
        $primes    = array();
        $candidate = 2;

        while ($n > 1) {
            for (; $n % $candidate == 0; $n /= $candidate) {
                $primes[] = $candidate;
            }

            $candidate++;
        }

        return $primes;
    }
}
