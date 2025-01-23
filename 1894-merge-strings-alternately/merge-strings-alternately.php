class Solution {

    /**
     * @param String $word1
     * @param String $word2
     * @return String
     */
    function mergeAlternately($word1, $word2) {
        $result = [];
        $count = max(strlen($word1), strlen($word2));

        for ($i= 0; $i<=$count;$i++) {
            $result[]= $word1[$i] . $word2[$i];
        }
        return implode("",$result);
    }
}