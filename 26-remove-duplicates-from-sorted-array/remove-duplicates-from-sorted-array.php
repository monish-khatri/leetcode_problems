class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function removeDuplicates(&$nums) {
        if (empty($nums)) {
            return 0;
        }

        // Initialize the last unique element to the first element
        $lastUnique = 0;

        // Iterate through the array starting from the second element
        for ($i = 1; $i < count($nums); $i++) {
            // If the current element is different from the last unique element
            if ($nums[$i] != $nums[$lastUnique]) {
                // Update the last unique element
                $lastUnique++;
                // Copy the current element to its position in the array
                $nums[$lastUnique] = $nums[$i];
            }
        }

        // Return the index of the last unique element, plus one
        return $lastUnique + 1;
    }
}