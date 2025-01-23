class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function missingNumber($nums) {
        // Step 1. Get size of input (n)
        $n = count($nums);
        
        // Step 2. Formula to count sum of n numbers
        $targetSum = ($n * ($n+1)) / 2;
        
        // Step 3. Count actual sum in nums
        $actualSum = array_sum($nums);
        
        // step 4 - the diff is the answer
        return $targetSum - $actualSum;
    }
}