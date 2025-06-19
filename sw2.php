<<<<<<< HEAD
ahahahaasfasfa
=======
<?php

const passinggrade="50";

$student = array 
(
    "Jonel Caisip",
    "Joseph CORONADO",
    "Nico Barado",
    "Jerome Ibon",
    "JM TIANZON",
    "Gean Valdez Clark",
    "Sherwin Padilla Robin",
    "Kenneth Cabinet",
    "Kim Carvie",
    "TIm Tan Ting Tan"
);

$sw1 = array (0,0,0,0,0,5,5,5,5,5);
$sw2 = array (0,0,0,0,0,5,5,5,5,5);
$lab = array (5,5,5,5,5,20,20,20,20,20);

echo "<h1> STUDENT RECORD </h1> <hr>";


$record = <<<EOT
<h2> STUDENT SCORES </h2>
<table border ="1">
<tr> <th> Student </th> <th> SW1 </th> <th> SW2 </th> <th> LAB1 </th> <tr>
<tr> <td> $student[0] </td> <td> $sw1[0] </td> <td> $sw2[0] </th> <td> $lab[0] </td> <tr>
<tr> <td> $student[1] </td> <td> $sw1[1] </td> <td> $sw2[1] </th> <td> $lab[1] </td> <tr>
<tr> <td> $student[2] </td> <td> $sw1[2] </td> <td> $sw2[2] </th> <td> $lab[2] </td> <tr>
<tr> <td> $student[3] </td> <td> $sw1[3] </td> <td> $sw2[3] </th> <td> $lab[3] </td> <tr>
<tr> <td> $student[4] </td> <td> $sw1[4] </td> <td> $sw2[4] </th> <td> $lab[4] </td> <tr>
<tr> <td> $student[5] </td> <td> $sw1[5] </td> <td> $sw2[5] </th> <td> $lab[5] </td> <tr>
<tr> <td> $student[6] </td> <td> $sw1[6] </td> <td> $sw2[6] </th> <td> $lab[6] </td> <tr>
<tr> <td> $student[7] </td> <td> $sw1[7] </td> <td> $sw2[7] </th> <td> $lab[7] </td> <tr>
<tr> <td> $student[8] </td> <td> $sw1[8] </td> <td> $sw2[8] </th> <td> $lab[8] </td> <tr>
<tr> <td> $student[9] </td> <td> $sw1[9] </td> <td> $sw2[9] </th> <td> $lab[9] </td> <tr>
</table>
EOT;

echo $record;

$totals = $sw1[5] + $sw2 [5] + $lab [5];

$score = ($totals/30) * 100;

if ($score >= passinggrade){
    $grades="Passed";
}
else {
    $grades="Failed";
}

echo "<p>Student: " . $student[5] . " <br> has a total score of: " . $totals . " <br>  and marked as : " . $grades . "</p>"; 

?>

>>>>>>> d7a0a50388eadf880ede963c7e0f1859f80c1958
