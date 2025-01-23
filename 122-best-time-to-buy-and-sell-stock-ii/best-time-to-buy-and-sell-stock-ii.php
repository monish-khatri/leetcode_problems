class Solution {

    /**
     * @param Integer[] $prices
     * @return Integer
     */
    function maxProfit($prices) {
        if (empty($prices)) {
            return 0;
        }

        $maxProfit = 0;
        $count = count($prices) - 1;
        for ($i = 0; $i < $count; $i++) {
            if($prices[$i + 1] > $prices[$i]) {
                $maxProfit += ($prices[$i + 1] - $prices[$i]);
            }
        }
        return $maxProfit;
    }
}