
# DecimalSearch Project 🚀

This project implements a binary search algorithm in different number systems (Decimal, Octal, and Hexadecimal). The `DecimalSearch` class provides search functionality for arrays of integers, floating point numbers, and hexadecimal values. It includes a constructor that lets you choose between Decimal or Octal search modes.

### Created by: Mohammad Mohammad Soltani 👨‍💻

## Features ✨
- **Decimal Search**: Search for integer or floating-point values in a sorted array.
- **Octal Search**: Search for values in a sorted array using the octal number system.
- **Hexadecimal Search**: Search for values in a sorted array using the hexadecimal number system.
- **Recursive Binary Search**: All searches are implemented using a binary search algorithm for efficient lookup.
- **Customizable Search Mode**: Choose between Decimal or Octal mode via the constructor.

## Prerequisites 🔧
- PHP 7.0 or higher

## Installation 🛠️

1. Clone the repository:
    ```bash
    git clone https://github.com/your-username/DecimalSearch.git
    ```

2. Navigate to the project directory:
    ```bash
    cd DecimalSearch
    ```

3. Make sure PHP is installed on your machine by running:
    ```bash
    php -v
    ```

## Usage 📦

### 1. **Decimal Search**
To use the Decimal Search, create an instance of the `DecimalSearch` class and call the `intSearch` method for integers or `floatSearch` method for floating-point numbers:

```php
$search = new DecimalSearch("decimal"); // Choose 'decimal' or 'octal' mode
$array = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$key = 5;
$result = $search->intSearch($array, $key);

if ($result !== false) {
    echo "Found at index: " . $result;
} else {
    echo "Not found";
}
```

### 2. **Octal Search**
To search in the Octal system, use the same methods but the search is performed on octal values:

```php
$search = new DecimalSearch("octal");
$array = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$key = 5;
$result = $search->intSearch($array, $key);

if ($result !== false) {
    echo "Found at index: " . $result;
} else {
    echo "Not found";
}
```

### 3. **Hexadecimal Search**
Similarly, you can use Hexadecimal search by adjusting the constructor mode to 'hex' and searching on hexadecimal numbers:

```php
$search = new DecimalSearch("hex");
$array = ["0x1", "0x2", "0x3", "0x4", "0x5"];
$key = "0x3";
$result = $search->hexSearch($array, $key);

if ($result !== false) {
    echo "Found at index: " . $result;
} else {
    echo "Not found";
}
```

## How it Works 🧑‍💻

1. **Constructor (`__construct`)**:
   - Accepts a mode: `"decimal"`, `"octal"`, or `"hex"`. 
   - Based on the selected mode, the `intSearch` or `hexSearch` method will perform the search accordingly.

2. **intSearch**:
   - Performs a binary search on an array of integers in the chosen mode.
   - Supports searching for integer values in an array.

3. **floatSearch**:
   - Performs a binary search on an array of floating-point numbers.
   - Works similarly to `intSearch` but is designed for floats.

4. **hexSearch**:
   - Performs a binary search on an array of hexadecimal strings.
   - Automatically converts hexadecimal values to integers for the search process.

## Example 💡

```php
$search = new DecimalSearch("decimal"); // Choose 'decimal', 'octal', or 'hex'
$array = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$key = 5;
$result = $search->intSearch($array, $key);

if ($result !== false) {
    echo "Found at index: " . $result;
} else {
    echo "Not found";
}
```

## Contributing 🤝

If you want to contribute to this project, feel free to fork the repository and submit pull requests. Please ensure that your code follows the existing coding style and includes appropriate tests.

## License 📝

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

## Acknowledgments 🙏

- Inspired by **Al-Khwarizmi's** original binary search concept.

## Project Coder 
- Mohammad Mohammad soltani 