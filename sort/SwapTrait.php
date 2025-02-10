<?php

namespace app\sort;

trait SwapTrait
{
    /**
     * Swap 2 elements in array
     *
     * @param int[] $arr
     * @param int $index1
     * @param int $index2
     * @return void
     */
    public function swap(array &$arr, int $index1, int $index2)
    {
        $temp = $arr[$index1];
        $arr[$index1] = $arr[$index2];
        $arr[$index2] = $temp;
    }
}