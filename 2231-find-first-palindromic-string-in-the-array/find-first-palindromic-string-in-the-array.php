class Solution {

    /**
     * @param String[] $words
     * @return String
     */
    function firstPalindrome($words) {
        foreach($words as $word) {
            if($this->isPalindrome($word)) {
                return $word;
            }
        }
        return "";
    }

    function isPalindrome($string) {
        $string = strtolower($string);
        return strrev($string) == $string;
    }
}