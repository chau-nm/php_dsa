<?php

namespace app\sort;

interface SortInterface
{
    /**
     * Sort array
     *
     * @param int[] $array
     * @return array
     */
    public function sort(array &$array): array;
}