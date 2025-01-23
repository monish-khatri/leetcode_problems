class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function lengthOfLastWord($s) {
        $array = explode(" ", trim($s));
        $lastWord = end($array);
        return strlen($lastWord);
    }
}