<?php

namespace app\sort;

require "./SortInterface.php";

class InsertSort implements SortInterface
{
    public function sort(array &$array)
    {
        for ($i = 1; $i < count($array); $i++) {
            $key = $array[$i];
            $j = $i - 1;
            while ($j >= 0 && $key < $array[$j]) {
                $array[$j + 1] = $array[$j--];
            }
            $array[$j + 1] = $key;
        }
    }
}

$arr = [3,12,5,2,3,1,2];
$insertSort = new InsertSort();
$insertSort->sort($arr);
print_r($arr);