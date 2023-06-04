<?php
// 快速排序

class QuickSort
{
    public function sort(array $array)
    {
        if (count($array) <= 1) {
            return $array;
        }

        // 取一个中间值
        $pivot = $array[0];
        // 初始左右区间
        $left = $right = [];
        for ($i=1;$i < count($array); $i++){
            if ($array[$i] <= $pivot)
            {
                $left[] = $array[$i];
            } else {
                $right[] = $array[$i];
            }
        }
        return array_merge($this->sort($left), $pivot, $this->sort($right));
    }
}
