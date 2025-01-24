class Solution {

    /**
     * @param String $s
     * @param String $t
     * @return Boolean
     */
    function isAnagram($s, $t) {
        $s = str_split($s);
        sort($s);
        $t = str_split($t);
        sort($t);
        return implode('' ,$s) == implode('' ,$t);
    }
}