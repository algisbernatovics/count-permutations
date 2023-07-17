<?php

function count_permutations($n, $k)
{
    $dp = array_fill(0, $n + 1, array_fill(0, $k + 1, 0));
    $dp[0][0] = 1;

    for ($i = 1; $i <= $n; $i++) {
        $dp[$i][0] = 1;
        for ($j = 1; $j <= $k; $j++) {
            for ($x = max(0, $j - $i + 1); $x <= $j; $x++) {
                $dp[$i][$j] += $dp[$i - 1][$x];
            }
        }
    }
    return $dp[$n][$k];
}

// Read the number of data sets
$d = intval(trim(fgets(STDIN)));

// Process each data set
for ($i = 0; $i < $d; $i++) {
    // Read n and k for the current data set
    list($n, $k) = explode(' ', trim(fgets(STDIN)));

    $result = count_permutations($n, $k);
    echo $result . "\n";
}
