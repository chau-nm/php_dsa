<?php

namespace app\sort;

require "./SortInterface.php";

class MergeSort implements SortInterface
{
    public function sort(array &$array): array
    {
        return $this->mergeSort($array);
    }

    private function mergeSort(array $array): array
    {
        if (count($array) <= 1) {
            return $array;
        }
        $middle = floor(count($array) / 2);
        $left = $this->mergeSort(array_slice($array, 0, $middle));
        $right = $this->mergeSort(array_slice($array, $middle));
        return $this->merge($left, $right);
    }

    private function merge(array $array1, array $array2): array
    {
        $result = [];
        $i = 0;
        $j = 0;
        while ($i < count($array1) && $j < count($array2)) {
            if ($array1[$i] > $array2[$j]) {
                $result[] = $array2[$j++];
            } else {
                $result[] = $array1[$i++];
            }
        }

        if ($i == count($array1)) {
            $result = array_merge($result, array_splice($array2, $j));
        }

        if ($j == count($array2)) {
            $result = array_merge($result, array_splice($array1, $i));
        }

        return $result;
    }
}

$arr = [3,12,5,2,3,1,2];
$mergeSort = new MergeSort();
$mergeSort->sort($arr);
print_r($mergeSort->sort($arr));