<?php
// merge sort
// 归并排序

class MergeSort
{
    public function main(array $array)
    {
        $length = count($array);
        if ($length <= 1) {
            return $array;
        }
        
        $len = (int) $length/2;
        $left = $this->main(array_slice($array, 0, $len));
        $right = $this->main(array_slice($array, $len));
        
        return $this->sort($left, $right);
    }
    
    public function sort(array $left, array $right)
    {
        $result = [];
        $left_length = count($left);
        $right_length = count($right);
        $l = $r = 0;
        while($l < $left_length && $r < $right_length) {
            if ($left[$l] <= $right[$r]) {
                $result[] = $left[$l];
                $l++;
            } else {
                $result[] = $right[$r];
                $r++;
            }
        }
        
        while($l < $left_length) {
            $result[] = $left[$l];
            $l++;
        }
        
        while ($r < $right_length) {
            $result[] = $right[$r];
            $r++;
        }
        
        return $result;
    }
}

$array= [9,4,6,43,8,3,7,4];
print_r((new MergeSort)->main($array));