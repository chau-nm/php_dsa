<?php

namespace app\sort;

require __DIR__ . '/SortInterface.php';
require __DIR__ . '/SwapTrait.php';

class SelectionSort implements SortInterface
{
    use SwapTrait;

    public function sort(array &$array)
    {
        for ($i = 0; $i < count($array); $i++) {
            $min = $this->findMin($array, $i, count($array) - 1);
            if ($array[$min] < $array[$i]) {
                $this->swap($array, $i, $min);
            }
        }
    }

    /**
     * Find min index in range
     *
     * @param array $array
     * @param int $start
     * @param $end
     * @return int
     */
    private function findMin(array $array, int $start, $end): int
    {
        $min = $start;
        for ($i = $start + 1; $i <= $end; $i++) {
            if ($array[$i] < $array[$min]) {
                $min = $i;
            }
        }
        return $min;
    }
}

$arr = [3,12,5,2,3,1,2];
$selectionSort = new SelectionSort();
$selectionSort->sort($arr);
print_r($arr);