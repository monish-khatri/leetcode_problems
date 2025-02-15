class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum($nums, $target) {
        $map = [];

        for ($i = 0; $i < count($nums); $i++) {
            $complement = $target - $nums[$i];
            if (isset($map[$complement])) {
                return [$map[$complement], $i];
            }

            $map[$nums[$i]] = $i;
        }

        return []; // In case there is no solution, although the problem guarantees one.
    }
}