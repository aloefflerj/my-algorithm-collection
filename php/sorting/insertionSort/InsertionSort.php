<?php

namespace Sorting\InsertionSort;

class InsertionSort
{
    /**
     * @param Stark[] $starks
     */
    public function sort(array &$starks): void
    {
        for ($i = 1; $i < count($starks); $i++) {
            while ($i !== 0 && $starks[$i]->getAge() < $starks[$i - 1]->getAge()) {
                $current = $starks[$i];
                $behind = $starks[$i - 1];

                $starks[$i] = $behind;
                $starks[$i - 1] = $current;
                $i--;
            }
        }
    }
}
