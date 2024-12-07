# PHP Unexpected Average Calculation Bug
This repository demonstrates a subtle bug in a PHP function designed to calculate the average of numbers in an array.  The function works correctly in most cases, but fails when an array has trailing commas which in this case does not raise an error but leads to incorrect calculation.

## Bug Description
The `calculate_average` function does not correctly handle arrays with trailing commas, leading to inaccurate average calculations.  While the presence of extra commas doesn't throw an error, it causes the function to calculate the average with an incorrect value.

## How to Reproduce
1. Clone this repository.
2. Run `bug.php`.
3. Observe the unexpected output.

## Solution
The solution involves a more robust check for empty arrays.  Also removing extra trailing commas in the arrays.  The corrected function avoids this issue by accurately interpreting array data.
