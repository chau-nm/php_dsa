<?php

namespace app\sort;

require "./SortInterface.php";
require "./SwapTrait.php";

class BubbleSort implements SortInterface
{
    use SwapTrait;

    public function sort(array &$array): array
    {
        for ($i = 0; $i < count($array); $i++) {
            for ($j = 0; $j < count($array) - $i - 1; $j++) {
                if ($array[$j] > $array[$j + 1]) {
                    $this->swap($array, $j, $j + 1);
                }
            }
        }
        return $array;
    }
}

$arr = [3,12,5,2,3,1,2];
$bubbleSort = new BubbleSort();
$bubbleSort->sort($arr);
print_r($arr);