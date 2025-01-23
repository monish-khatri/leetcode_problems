class Solution {

    /**
     * @param Integer[] $nums
     * @return Boolean
     */
    function containsDuplicate($nums) {
        $hashMap = [];
        foreach( $nums as $num){
            if(isset($hashMap[$num])){
                return true;
            }
            $hashMap[$num] = 1;
        }
        return false;
    }
}