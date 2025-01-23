class Solution {

    /**
     * @param Integer $n
     * @return Integer
     */
    function climbStairs($n) {
        
        if ($n <= 2) {
            return $n;
        }
        
        $ways = [1 => 1, 2 => 2];
        
        for ($i = 3; $i <= $n; $i++) {
            $ways[$i] = $ways[$i - 1] + $ways[$i - 2];
        }
        
        return $ways[$n];
    }
}