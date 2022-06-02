<?php

namespace Sorting;

class StarksService
{
    /**
     * @param Stark[] $starks
     * @return Stark
     */
    public function findYoungerPosition(array $starks, $i): int
    {
        $smaller = $i;
        for ($i; $i < (count($starks)); $i++) {
            if ($starks[$i]->getAge() < $starks[$smaller]->getAge()) {
                $smaller = $i;
            }
        }
        return $smaller;
    }

    /**
     * @param Stark[] $starks
     */
    public function printStarks(array $starks): void
    {
        echo \PHP_EOL;
        echo "\e[1;37;44m## Starks ##\e[0m\n";
        foreach ($starks as $stark) {
            echo "\e[0;34m{$stark->getName()}\e[0m has \e[0;34m{$stark->getAge()}\e[0m years in the book\n";
        }
        echo \PHP_EOL;
    }
}
