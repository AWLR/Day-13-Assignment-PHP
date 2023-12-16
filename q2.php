<?php

//Q2 IF ELSE STATEMENT
echo "<h1>Question 2 Grades If Else Statement:</h1><br>";

$grade = 100;

if ($grade>=90) {
    echo "Excellent!";
} elseif ($grade>=80 && $grade<=89) {
    echo "Good job!";
} elseif ($grade>=70 && $grade<=79) {
    echo "Keep it up!";
} else {
    echo "Needs improvement";
}
echo "<br>";
echo "<br>";

?>