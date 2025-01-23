class Solution {

    /**
     * @param Integer $a
     * @param Integer $b
     * @return Integer
     */
    function getSum($a, $b) {
        // a= 5(0101), b=3(0011)
        while($b != 0){
            $carry = $a & $b; // 1)0001(1),2)0010(2),3)0100(4),4)0000(0)
            $a = $a ^ $b;     // 1)0110(6),2)0100(4),3)0000(0),4)1000(8)
            $b = $carry << 1; // 1)0010(2),2)0100(4),3)1000(8),4)0000(0)
        }
        return $a;
    }
}