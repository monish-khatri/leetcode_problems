class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function rob($nums) {
       // Edge case: if there are no houses
        if (empty($nums)) {
            return 0;
        }
        
        // If there is only one house, return the amount of money in that house
        if (count($nums) == 1) {
            return $nums[0];
        }
        
        // Initialize dp array
        $dp = array_fill(0, count($nums), 0);
        
        // Base case for the first house
        $dp[0] = $nums[0];
        
        // Base case for the second house
        $dp[1] = max($nums[0], $nums[1]);
        
        // Fill the dp array for the rest of the houses
        for ($i = 2; $i < count($nums); $i++) {
            $dp[$i] = max($dp[$i-1], $nums[$i] + $dp[$i-2]);
        }
        
        // The last element in dp array will contain the result
        return end($dp);
    }
}