class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function numIdenticalPairs($nums) {
        $response = 0;
        $count = count($nums);

        for($i = 0; $i <= $count; $i++) {
            for($j = $i+1; $j <= $count; $j++) {
                if ($nums[$i] == $nums[$j]) {
                    $response++;
                }
            }
        }

        return $response;
    }
}