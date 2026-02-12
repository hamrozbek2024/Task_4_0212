<?php
// 4-MASALA: Longest Increasing Subsequence (O(n log n))

$arr = [10, 9, 2, 5, 3, 7, 101, 18];
$tails = [];

foreach ($arr as $num) {
    $l = 0;
    $r = count($tails);

    while ($l < $r) {
        $mid = intdiv($l + $r, 2);
        if ($tails[$mid] < $num) $l = $mid + 1;
        else $r = $mid;
    }

    $tails[$l] = $num;
}

echo count($tails);
