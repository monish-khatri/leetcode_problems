class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function romanToInt($s) {
        $roman = [
            'I' => 1,
            'V' => 5,
            'X' => 10,
            'L' => 50,
            'C' => 100,
            'D' => 500,
            'M' => 1000
        ];

        $total = 0;
        $prevValue = 0;

        for ($i = strlen($s) - 1; $i >= 0; $i--) {
            $currentValue = $roman[$s[$i]];
            
            if ($currentValue < $prevValue) {
                $total -= $currentValue;
            } else {
                $total += $currentValue;
            }
            
            $prevValue = $currentValue;
        }

        return $total;
    }
}