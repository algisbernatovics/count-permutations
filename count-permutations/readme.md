# Permutations with Inversions

This is a PHP program that calculates the number of n-element permutations containing exactly k inversions.

## Problem Description

Given a permutation A of integers 1 to n, a pair of indices (i, j) is considered an inversion if ai > aj.
The task is to determine the number of n-element permutations that have exactly k inversions.

## Solution Approach

The program uses dynamic programming to solve the problem. It defines a 2D array `dp` where `dp[i][j]` 
represents the number of i-element permutations with exactly j inversions.

The base cases are:
- `dp[0][0] = 1`
- `dp[0][j] = 0` (for j > 0)
- `dp[i][0] = 1` (for i > 0)

The program then fills in the `dp` array using a recurrence relation:

dp[i][j] = dp[i-1][j] + dp[i-1][j-1] + ... + dp[i-1][j-(i-1)] (where j >= i)

This relation states that the number of i-element permutations with exactly j inversions can be obtained by considering
the number of (i-1)-element permutations with j, j-1, ..., j-(i-1) inversions and summing them up.

Finally, the answer to the problem is given by `dp[n][k]`.

## Usage

1. Clone the repository or download the PHP file.

2. Run the program using PHP 7.4 or above:
   php count_permutations.php

3. Enter the number of data sets (d) when prompted.

4. For each data set, enter the values of n and k separated by a space.

5. The program will calculate the number of n-element permutations with exactly k inversions for each data set and display the results.

## Example

Input:

1 

4 1

Output:
3

## Constraints

- 1 <= d <= 10
- 1 <= n <= 12
- 0 <= k <= 98

## Contributing

Contributions to the project are welcome. If you find any issues or want to suggest improvements,
please open an issue or submit a pull request.

## License

This project is licensed under the MIT License.