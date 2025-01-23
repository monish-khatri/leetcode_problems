class Solution {

    /**
     * @param Integer[] $nums
     * @return Boolean
     */
    function containsDuplicate($nums) {
        $contains = [];
        foreach($nums as $num){
            if(isset($contains[$num])){
                return true;
            }
            $contains[$num]=1;
        }
        return false;
    }
}