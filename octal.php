<?php
require_once "binarySearch.class.php";
// جستجو در حالت هشتی
$search = new BinarySearch('octal');
$array = ["1", "2", "3", "4", "5", "6", "7", "10"]; // هشت به صورت رشته
$key = "4"; // هشت در قالب رشته
$result = $search->search($array, $key);
echo $result !== false ? "Found at index $result" : "Not found";
