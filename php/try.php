<?php

$studentgrades = array (
"Alice"=> array(
    "Math"=>85,
    "English"=>90,
    "Science"=>78,
    "History"=>92,
    "Art"=>88
),
"Bob"=> array(
    "Math"=>92,
    "English"=>76,
    "Science"=>89,
    "History"=>84,
    "Art"=>91
),
"Charlie"=> array(
    "Math"=>78,
    "English"=>95,
    "Science"=>82,
    "History"=>87,
    "Art"=>79
)
);

echo "<table border ='1' style ='border-collapse:colapse;'>";
echo "<tr> <th> Student </th> <th> Math </th> <th> English </th> <th> Science </th> <th> History </th> <th> Art </th> </tr> ";
echo "<tr> <td> <strong> Alice </td> <td>" . $studentgrades["Alice"]["Math"] . "</td> <td> " . $studentgrades["Alice"]["English"] . " </td> <td> " . $studentgrades["Alice"]["Science"] . " </td> <td> " . $studentgrades["Alice"]["History"] . " </td> <td> " . $studentgrades["Alice"]["Art"] . " </td> </tr> ";
echo "<tr> <td> <strong> Bob </td> <td>" . $studentgrades["Bob"]["Math"] . "</td> <td> " . $studentgrades["Bob"]["English"] . " </td> <td> " . $studentgrades["Bob"]["Science"] . " </td> <td> " . $studentgrades["Bob"]["History"] . " </td> <td> " . $studentgrades["Bob"]["Art"] . " </td> </tr> ";
echo "<tr> <td> <strong> Charlie </td> <td>" . $studentgrades["Charlie"]["Math"] . "</td> <td> " . $studentgrades["Charlie"]["English"] . " </td> <td> " . $studentgrades["Charlie"]["Science"] . " </td> <td> " . $studentgrades["Charlie"]["History"] . " </td> <td> " . $studentgrades["Charlie"]["Art"] . " </td> </tr> ";
echo "</table> <br>";

function calculatestudentaverage ($studentgrades){
    $sum = array_sum($studentgrades);
    $count = count($studentgrades);
    return $sum/$count;
}

$aliceaverage = calculatestudentaverage($studentgrades["Alice"]);
$bobaverage = calculatestudentaverage($studentgrades["Bob"]);
$charlieaverage = calculatestudentaverage($studentgrades["Charlie"]);

echo "Alice: $aliceaverage <br>";
echo "Bob: $bobaverage <br>";
echo "Charlie: $charlieaverage <br>";

?>