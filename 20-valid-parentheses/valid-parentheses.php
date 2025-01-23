class Solution {

    /**
     * @param String $s
     * @return Boolean
     */
    function isValid($s) {
        $stack = [];
            $pairs = [
                ')' => '(',
                '}' => '{',
                ']' => '['
            ];

            for ($i = 0; $i < strlen($s); $i++) {
                $char = $s[$i];
                if (!in_array($char, $pairs)) {
                    if (array_pop($stack) !== $pairs[$char]) {
                        return false;
                    }
                } else {
                    array_push($stack, $char);
                }
            }

            return empty($stack);
    }
}