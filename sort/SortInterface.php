<?php

namespace app\sort;

interface SortInterface
{
    /**
     * Sort array
     *
     * @param int[] $array
     * @return mixed
     */
    public function sort(array &$array);
}