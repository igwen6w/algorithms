<?php
// igwen6w@gmail.com
// 20230603
class node
{
    public mixed $value;
    public node|null $next;
}

class FindRing
{
    public static function find(node $header): node|bool
    {
        // 定义快慢指针
        $fast_node = $slow_node = $header;

        // 循环移动指针
        while(! is_null($fast_node) && ! is_null($slow_node)) {
            // 相遇退出循环
            if ($slow_node === $fast_node) break;
            // 慢指针每次走一步
            $slow_node = $slow_node->next;
            // 快指针每次走两步
            $fast_node = $fast_node->next->next;
        }
        // 链表中无环，快指针结束移动
        if (is_null($fast_node)) {
            return false;
        }
        // 链表中有环，将慢指针重新定义为头指针
        $slow_node = $header;
        while ($slow_node !== $fast_node) {
            // 快慢指针以相同的速度移动
            // 再次相遇时的节点就是环入口节点
            $slow_node = $slow_node->next;
            $fast_node = $fast_node->next;
        }
        // 假设头节点到环入口的节点为 a
        // 环入口节点到快慢指针初次相遇节点为 b
        // 环的长度为 c
        // 则慢指针移动的距离为 a+b
        // 快指针移动的距离为 a+b+n*c,n>=1
        // 所以 2(a+b) = a+b+n*c
        // a = n*c-b = (n-1)*c + (c-b)
        // 由于 c-b 是相遇点到环入口点的距离
        // 所以从头结点和相遇节点同时出发，再次相遇一定是在入口节点
        return $slow_node;
    }
}
