/**
 * Definition for a singly-linked list.
 * class ListNode {
 *     public $val = 0;
 *     public $next = null;
 *     function __construct($val = 0, $next = null) {
 *         $this->val = $val;
 *         $this->next = $next;
 *     }
 * }
 */
class Solution {

    /**
     * @param ListNode $head
     * @return ListNode
     */
    function reverseList($head) {
        $current = $head;
        $prev = null;

        while($current != null) {
            $temp = $current->next;
            $current->next = $prev;
            $prev = $current;
            $current = $temp;
        }
        return $prev;
    }
}