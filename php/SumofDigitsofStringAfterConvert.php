<?php

class Solution {

    /**
     * @param String $s
     * @param Integer $k
     * @return Integer
     */
    function getLucky($s, $k) {
        $numericString = '';
        for ($i = 0; $i < strlen($s); $i++) {
            $numericString .= ord($s[$i]) - ord('a') + 1;
        }

        for ($i = 0; $i < $k; $i++) {
            $sum = 0;
            for ($j = 0; $j < strlen($numericString); $j++) {
                $sum += $numericString[$j];
            }
            $numericString = (string)$sum;
        }

        return (int)$numericString;
    }
}
