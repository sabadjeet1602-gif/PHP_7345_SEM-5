# Write a PHP program for print Previous semester Result using variables & constants in PHP.

<?php

define("COLLEGE_NAME", "MARWADI UNIVERSITY");

$studentName = "Sabad Jeet";
$rollNo = 101;
$semester = "Semester 4";
$marks = 490;
$totalMarks = 500;
$percentage = ($marks / $totalMarks) * 100;

echo "<h2>Previous Semester Result</h2>";
echo "College Name: " . COLLEGE_NAME . "<br>";
echo "Student Name: " . $studentName . "<br>";
echo "Roll Number: " . $rollNo . "<br>";
echo "Semester: " . $semester . "<br>";
echo "Marks Obtained: " . $marks . "<br>";
echo "Total Marks: " . $totalMarks . "<br>";
echo "Percentage: " . $percentage . "%<br>";

?>
