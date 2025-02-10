<?php

namespace app\search;

interface SearchInterface
{
    /**
     * Search target number in array
     *
     * @param int[] $arr
     * @param int $target
     * @return int
     */
    public function search(array $arr, int $target): int;
}