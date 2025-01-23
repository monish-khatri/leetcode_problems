class Solution {

    /**
     * @param Integer $n
     * @return Integer
     */
    function hammingWeight($n) {
        $count = 0;
        while ($n > 0) {
            $count += $n & 1; // Check the least significant bit
            $n = $n >> 1;         // Shift right by 1
        }
        return $count;
    }
}