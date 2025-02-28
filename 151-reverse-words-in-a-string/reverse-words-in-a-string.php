class Solution {

    /**
     * @param String $s
     * @return String
     */
    function reverseWords($s) {
        $array = explode(" ", trim($s));
        $reversedArray = array_filter(array_reverse($array), function ($value) {
            return $value !== null && $value !== false && $value !== "";
        });
        return implode(" ", $reversedArray);
    }
}