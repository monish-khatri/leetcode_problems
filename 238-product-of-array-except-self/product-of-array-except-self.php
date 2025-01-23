class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer[]
     */
    function productExceptSelf($nums) {
        $n = count($nums);
        $left = array_fill(0, $n, 1); 
        $right = array_fill(0, $n, 1); 

        // Calculate left products
        for ($i = 1; $i < $n; $i++) {
            $left[$i] = $left[$i - 1] * $nums[$i - 1];
        }

        // Calculate right products
        for ($i = $n - 2; $i >= 0; $i--) {
            $right[$i] = $right[$i + 1] * $nums[$i + 1];
        }

        // Calculate result
        $result = [];
        for ($i = 0; $i < $n; $i++) {
            $result[] = $left[$i] * $right[$i];
        }

        return $result;
    }
}