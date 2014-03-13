<?php
class PrimeFactors
{
    public function generate($n)
    {
        $primes    = array();
        $candidate = 2;

        while ($n > 1) {
            while ($n % $candidate == 0) {
                $primes[] = $candidate;
                $n /= $candidate;
            }

            $candidate++;
        }

        return $primes;
    }
}
