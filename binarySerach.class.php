<?php
/**
 * Class BinarySearch
 * 
 * This class provides methods for performing binary search on arrays of integers, strings, floating point numbers, and hexadecimal values.
 * It includes a method for searching integers, strings, floats, and hexadecimal numbers in an array.
 */
class BinarySearch {
    private $mode;  // The search mode: 'decimal', 'octal', or 'hexadecimal'

    /**
     * Constructor to set the search mode.
     *
     * @param string $mode The mode for the search: 'decimal', 'octal', or 'hexadecimal'.
     */
    public function __construct(string $mode = 'decimal') {
        // Set the search mode to 'decimal' by default
        $this->mode = $mode;
    }

    /**
     * Performs a search based on the current mode (decimal, octal, or hexadecimal).
     *
     * @param array $array The array to search through.
     * @param mixed $key The value to search for.
     * @return int|false The index of the found value or false if not found.
     */
    public function search(array $array, $key) {
        // Decide search method based on mode
        if ($this->mode === 'octal') {
            return $this->octalSearch($array, $key);
        } elseif ($this->mode === 'hexadecimal') {
            return $this->hexSearch($array, $key);
        } else {
            return $this->binarySerach($array, $key);
        }
    }

    /**
     * Performs an octal search on an array.
     *
     * @param array $array The array of values to search through.
     * @param mixed $key The value to search for (in octal format).
     * @return int|false The index of the found value or false if not found.
     */
    private function octalSearch(array $array, $key) {
        // Convert key to decimal if it's in octal
        $decimalKey = octdec($key); // Convert to decimal
        return $this->searchRecursive($array, $decimalKey, 0, count($array) - 1);
    }

    /**
     * Performs a decimal search on an array.
     *
     * @param array $array The array of values to search through.
     * @param mixed $key The decimal value to search for.
     * @return int|false The index of the found value or false if not found.
     */
    private function binarySerach(array $array, $key) {
        return $this->searchRecursive($array, $key, 0, count($array) - 1);
    }

    /**
     * Performs a search for hexadecimal values in the array based on the current mode.
     *
     * @param array $array The array of hexadecimal values to search through.
     * @param string $key The hexadecimal value to search for.
     * @return int|false The index of the found hexadecimal value or false if not found.
     */
    private function hexSearch(array $array, $key) {
        // Convert hexadecimal key to decimal
        $decimalKey = hexdec($key); // Convert to decimal
        return $this->searchRecursive($array, $decimalKey, 0, count($array) - 1);
    }

    /**
     * Recursive search method for both decimal, octal, and hexadecimal modes.
     *
     * @param array $array The array of values to search through.
     * @param mixed $key The value to search for.
     * @param int $start The starting index of the search range.
     * @param int $end The ending index of the search range.
     * @return int|false The index of the found value or false if not found.
     */
    private function searchRecursive(array $array, $key, int $start, int $end) {
        if ($start > $end) return false;
        $midIndex = intdiv($start + $end, 2);
        
        // Convert array values to decimal (if in octal or hexadecimal mode)
        $arrayValue = $array[$midIndex];
        if ($this->mode === 'octal') {
            $arrayValue = octdec($arrayValue);
        } elseif ($this->mode === 'hexadecimal') {
            $arrayValue = hexdec($arrayValue);
        }

        // Compare values
        if ($arrayValue === $key) return $midIndex;
        return $arrayValue > $key
            ? $this->searchRecursive($array, $key, $start, $midIndex - 1)
            : $this->searchRecursive($array, $key, $midIndex + 1, $end);
    }

    /**
     * Performs a search for strings in the array based on the current mode.
     *
     * @param array $array The array of strings to search through.
     * @param string $key The string value to search for.
     * @return int|false The index of the found string or false if not found.
     */
    public function stringSearch(array $array, string $key) {
        // Convert key to decimal if in octal or hexadecimal mode
        if ($this->mode === 'octal') {
            $key = octdec($key);
        } elseif ($this->mode === 'hexadecimal') {
            $key = hexdec($key);
        }
        return $this->searchRecursive($array, $key, 0, count($array) - 1);
    }

    /**
     * Performs a search for floats in the array based on the current mode.
     *
     * @param array $array The array of floats to search through.
     * @param float $key The float value to search for.
     * @return int|false The index of the found float or false if not found.
     */
    public function floatSearch(array $array, float $key) {
        return $this->searchRecursive($array, $key, 0, count($array) - 1);
    }
}
