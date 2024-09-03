<?php

class Solution {
    public function chalkReplacer(array $chalk, int $initialChalkPieces): int {
        $totalChalkNeeded = 0;
        foreach ($chalk as $studentChalkUse) {
            $totalChalkNeeded += $studentChalkUse;
        }

        $remainingChalk = $initialChalkPieces % $totalChalkNeeded;

        for ($studentIndex = 0; $studentIndex < count($chalk); $studentIndex++) {
            if ($remainingChalk < $chalk[$studentIndex]) {
                return $studentIndex;
            }
            $remainingChalk -= $chalk[$studentIndex];
        }

        return 0;  
    }
}