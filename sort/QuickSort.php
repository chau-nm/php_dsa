<?php

namespace app\sort;

require "./SortInterface.php";

class QuickSort implements SortInterface
{

    public function sort(array &$array): array
    {
        return $this->quickSort($array);
    }

    public function quickSort(array $array): array
    {
        if (count($array) <= 1) {
            return $array;
        }

        $pivotIndex = (int) (count($array) / 2);
        $pivot = $array[$pivotIndex];

        $left = [];
        $right = [];
        $equal = [];

        foreach ($array as $value) {
            if ($value < $pivot) {
                $left[] = $value;
            } elseif ($value > $pivot) {
                $right[] = $value;
            } else {
                $equal[] = $value;
            }
        }

        return array_merge($this->quicksort($left), $equal, $this->quicksort($right));
    }
}