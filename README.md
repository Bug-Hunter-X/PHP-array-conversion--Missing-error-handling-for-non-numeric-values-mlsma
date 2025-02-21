# PHP Array Conversion Bug

This repository demonstrates a common bug in PHP array processing: the lack of robust error handling for unexpected data types.  The `foo` function attempts to convert numeric strings to integers, but it doesn't handle cases where the input array contains non-numeric values. This can lead to subtle and hard-to-debug issues in your application.

## Bug Description

The `bug.php` file contains a function that processes an array. The function should convert numeric strings to integers. However, it fails to handle non-numeric values gracefully.  This means that when a non-numeric value is encountered, it's simply added to the output array without any error indication. This behavior can be problematic, leading to unexpected results or even application crashes down the line.

## Solution

The `bugSolution.php` file provides a corrected version of the function. It now includes a `try-catch` block to handle potential errors caused by non-numeric values.  This improvement ensures that the function handles all input gracefully, providing informative error messages or logging instead of silently ignoring the errors. 