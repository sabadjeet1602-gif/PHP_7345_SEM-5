<?php
function calculatePercentage($sub1, $sub2, $sub3, $sub4, $sub5)
{
    $totalMarks = $sub1 + $sub2 + $sub3 + $sub4 + $sub5;
    $percentage = ($totalMarks / 500) * 100;

    return $percentage;
}

$percentage = calculatePercentage(60, 75, 80, 85, 90);

echo "Percentage: " . $percentage . "%";
?>