<?php

require './InsertionSort.php';
require '../StarksService.php';
require '../Stark.php';

use Sorting\Stark;
use Sorting\InsertionSort\InsertionSort;
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
$insertionSort = new InsertionSort();
$insertionSort->sort($starks);
$starksService->printStarks($starks);