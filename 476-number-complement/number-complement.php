class Solution {

    /**
     * @param Integer $num
     * @return Integer
     */
    function findComplement($num) {
        $bitmask = decbin($num);
        $complement = '';

        // Flip each bit
        for ($i = 0; $i < strlen($bitmask); $i++) {
            $complement .= $bitmask[$i] == '1' ? '0' : '1';
        }

        return bindec($complement);
    }
}