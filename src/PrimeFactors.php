<?php
class PrimeFactors
{
    public function generate($n)
    {
        $primes = array();

        if ($n > 1) {
            while ($n % 2 == 0) {
                $primes[] = 2;
                $n /= 2;
            }

            if ($n > 1) {
                $primes[] = $n;
            }
        }

        return $primes;
    }
}
