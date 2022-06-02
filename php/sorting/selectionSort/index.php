<?php

require './SelectionSort.php';
require '../Stark.php';

use Sorting\Stark;
use Sorting\SelectionSort\SelectionSort;
use Sorting\StarksService;

$starks = [];
$starks[] = new Stark('Arya', 9);
$starks[] = new Stark('Sansa', 11);
$starks[] = new Stark('Jon Snow', 14);
$starks[] = new Stark('Eddard', 35);
$starks[] = new Stark('Bran', 7);
$starks[] = new Stark('Rickon', 3);
$starks[] = new Stark('Robb', 14);
$starks[] = new Stark('Catelyn', 34);

$starksService = new StarksService();

$starksService->printStarks($starks);
$selectionSort = new SelectionSort();
$selectionSort->sort($starks);
$starksService->printStarks($starks);