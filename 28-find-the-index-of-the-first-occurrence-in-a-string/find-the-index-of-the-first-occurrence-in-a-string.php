class Solution {

    /**
     * @param String $haystack
     * @param String $needle
     * @return Integer
     */
    function strStr($haystack, $needle) {
        if ($needle === '') {
            return 0;
        }

        // Find the length of the needle and haystack strings
        $n = strlen($needle);
        $h = strlen($haystack);

        // If the needle is longer than the haystack, return -1
        if ($n > $h) {
            return -1;
        }

        // Iterate through the haystack string
        for ($i = 0; $i <= $h - $n; $i++) {
            // If the current substring matches the needle, return the index
            if (substr($haystack, $i, $n) === $needle) {
                return $i;
            }
        }

        // If the needle was not found, return -1
        return -1; 
    }
}