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
        $minPrice = $prices[0];
        $count = count($prices);
        for($i = 0; $i <= $count; $i++){

            if($minPrice > $prices[$i]) {
                $minPrice = $prices[$i];
            }elseif($maxProfit < $prices[$i] - $minPrice){
                $maxProfit = $prices[$i] - $minPrice;
            }
        }
        return $maxProfit;
    }
}