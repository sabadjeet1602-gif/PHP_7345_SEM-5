<?php
function studentDetails($studentName, $enrollmentNumber, $semester)
{
    echo "Student Name: " . $studentName . "<br>";
    echo "Enrollment Number: " . $enrollmentNumber . "<br>";
    echo "Semester: " . $semester . "<br>";
}

studentDetails("Sabad Jeet", "7345", "Semester 5");
?>