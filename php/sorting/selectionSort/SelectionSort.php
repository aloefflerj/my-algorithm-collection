<?php

namespace Sorting\SelectionSort;

require '../StarksService.php';

use Sorting\StarksService;

class SelectionSort
{
    private StarksService $starksService;

    public function __construct()
    {
        $this->starksService = new StarksService();
    }
    /**
     * @param Stark[] $starks
     */
    public function sort(array &$starks): void
    {
        for ($i = 0; $i < count($starks); $i++) {
            $youngerPosition = $this->starksService->findYoungerPosition($starks, $i);

            $current = $starks[$i];
            $younger = $starks[$youngerPosition];

            $starks[$i] = $younger;
            $starks[$youngerPosition] = $current;
        }
    }
}
