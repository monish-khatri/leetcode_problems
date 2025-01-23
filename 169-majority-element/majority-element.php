class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function majorityElement($nums) {
        $hashMap = [];

        // majority element will appears more than n/2 times
        $count = ceil(count($nums)/2);
        foreach($nums as $num) {
            $hashMap[$num] = isset($hashMap[$num]) ? $hashMap[$num]+1 : 1;

            if ($count <= $hashMap[$num]) {
                return $num;
            }
        }
    }
}