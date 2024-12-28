<?php
require_once "binarySerach.class.php";
// جستجو در حالت دسیمال
$search = new BinarySearch('decimal');
$array = [1, 2, 3, 4, 5, 6, 7, 8];
$key = 4;
$result = $search->search($array, $key);
echo $result !== false ? "Found at index $result" : "Not found";
