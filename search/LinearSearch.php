<?php

namespace app\search;

require_once __DIR__ . '/SearchInterface.php';

class LinearSearch implements SearchInterface
{
    public function search(array $arr, int $target): int
    {
        for ($i = 0; $i < count($arr); $i++) {
            if ($arr[$i] === $target) {
                return $i;
            }
        }
        return -1;
    }
}

$arr = [2,3,4,1,3,2,4];
$target = 4;

$linearSearch = new LinearSearch();
echo $linearSearch->search($arr, $target);