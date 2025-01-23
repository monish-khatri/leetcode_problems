class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function maxSubArray($nums) {
        $maxSum = PHP_INT_MIN; // Initialize maxSum to the smallest possible integer value
        $currentSum = 0;

        foreach ($nums as $num) {
            $currentSum = max($num, $currentSum + $num);
            $maxSum = max($maxSum, $currentSum);
        }

        return $maxSum;
    }
}