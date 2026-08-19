<?php

$gelbolingo_dsi = 93;
$gelbolingo_dcn = 85;
$gelbolingo_ctwa = 90;
$gelbolingo_mad = 92;
$gelbolingo_rlw = 90;

$gelbolingo_average = (
    $gelbolingo_dsi +
    $gelbolingo_dcn +
    $gelbolingo_ctwa +
    $gelbolingo_mad +
    $gelbolingo_rlw
) / 5;

echo "CC-DSA: " . $gelbolingo_dsi . "<br>";
echo "IS-DCN: " . $gelbolingo_dcn . "<br>";
echo "CT-WA: " . $gelbolingo_ctwa . "<br>";
echo "CT-MAD: " . $gelbolingo_mad . "<br>";
echo "RLW: " . $gelbolingo_rlw . "<br><br>";

echo "Average Grade: " . $gelbolingo_average . "<br>";

if ($gelbolingo_average >= 74.5) {
    echo "Remarks: Passed<br>";
} else {
    echo "Remarks: Failed<br>";
}

if ($gelbolingo_average >= 90) {
    echo "Letter Grade: A";
} elseif ($gelbolingo_average >= 80) {
    echo "Letter Grade: B";
} elseif ($gelbolingo_average >= 70) {
    echo "Letter Grade: C";
} elseif ($gelbolingo_average >= 60) {
    echo "Letter Grade: D";
} else {
    echo "Letter Grade: F";
}

?>