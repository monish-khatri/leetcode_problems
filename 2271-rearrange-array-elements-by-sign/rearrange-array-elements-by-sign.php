class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer[]
     */
    function rearrangeArray($nums) {
        $positives = [];
        $negatives = [];
        
        // Separate positive and negative integers
        foreach ($nums as $num) {
            if ($num > 0) {
                $positives[] = $num;
            } else {
                $negatives[] = $num;
            }
        }
        
        // Rearrange elements
        $result = [];
        for ($i = 0; $i < count($positives); $i++) {
            $result[] = $positives[$i];
            $result[] = $negatives[$i];
        }
        
        return $result;
    }

}