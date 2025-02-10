<?php

namespace app\search;

require_once __DIR__ . '/SearchInterface.php';

class BinarySearch implements SearchInterface
{
    public function search(array $arr, int $target): int
    {
        $low = 0;
        $high = count($arr) - 1;
        while ($low <= $high) {
            $mid = floor(($low + $high) / 2);
            if ($arr[$mid] === $target) {
                return $mid;
            }
            if ($arr[$mid] > $target) {
                $high = $mid - 1;
            }
            if ($arr[$mid] < $target) {
                $low = $mid + 1;
            }
        }
        return -1;
    }
}

$arr = [1,2,3,4,5,6,7,8,9];
$target = 4;

$binarySearch = new BinarySearch();
echo $binarySearch->search($arr, $target);