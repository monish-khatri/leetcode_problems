class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer
     */
    function searchInsert($nums, $target) {
        $index = array_search($target, $nums);

        if($index === false) {
            $count = count($nums);
            for($i=0; $i<$count;$i++) {
                if($target < $nums[$i]) {
                    return $i;
                }else if($i == $count-1) {
                    return $i +1 ;
                }
            }
        }
        return $index;
    }
}