class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $val
     * @return Integer
     */
    function removeElement(&$nums, $val) {
        // Initialize a pointer for keeping track of the last valid element
        $lastValid = 0;

        // Iterate through the array
        for ($i = 0; $i < count($nums); $i++) {
            // If the current element is not equal to the target value
            if ($nums[$i] != $val) {
                // Copy the current element to its position in the array
                $nums[$lastValid] = $nums[$i];
                // Update the last valid element pointer
                $lastValid++;
            }
        }

        // Return the number of valid elements in the array
        return $lastValid;
    }
}