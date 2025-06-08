<?php

const passinggrade="50";

$students = array(
    "hello",
    "world",
    "whats",
    "u hoimei",
    "hehehe",
    "my name is",
    "no my name is",
    "no im name",
    "im name what",
    "what is name",
    "hello name",
    "whats your name",
    "i dont know",
    "hello i dont know",
    "no i meant my name is"
);

$sw1 = array(
0,0,0,0,0,0,0,0,5,5,5,5,5,5,5
);

$sw2 = array(
0,0,0,0,0,0,0,0,5,5,5,5,5,5,5
);

$lab = array(
    5,5,5,5,5,5,5,5,20,20,20,20,20,20,20
);

echo "<h1> STUDENT RECORD </h1>";
echo "<hr>";

$record = <<<EOT
<h2>STUDENT SCORES </h2>
<table border = "1">
<tr> <th> Student </th> <th> Sw1 </th> <th> Sw2 </th>  <th> Lab </th> </tr>
<tr> <td> $students[0] </td> <td> $sw1[0] </td> <td> $sw2[0] </td> <td> $lab[0] </td> </tr>
<tr> <td> $students[1] </td> <td> $sw1[1] </td> <td> $sw2[1] </td> <td> $lab[1] </td> </tr>
<tr> <td> $students[2] </td> <td> $sw1[2] </td> <td> $sw2[2] </td> <td> $lab[2] </td> </tr>
<tr> <td> $students[3] </td> <td> $sw1[3] </td> <td> $sw2[3] </td> <td> $lab[3] </td> </tr>
<tr> <td> $students[4] </td> <td> $sw1[4] </td> <td> $sw2[4] </td> <td> $lab[4] </td> </tr>
<tr> <td> $students[5] </td> <td> $sw1[5] </td> <td> $sw2[5] </td> <td> $lab[5] </td> </tr>
<tr> <td> $students[6] </td> <td> $sw1[6] </td> <td> $sw2[6] </td> <td> $lab[6] </td> </tr>
<tr> <td> $students[7] </td> <td> $sw1[7] </td> <td> $sw2[7] </td> <td> $lab[7] </td> </tr>
<tr> <td> $students[8] </td> <td> $sw1[8] </td> <td> $sw2[8] </td> <td> $lab[8] </td> </tr>
<tr> <td> $students[9] </td> <td> $sw1[9] </td> <td> $sw2[9] </td> <td> $lab[9] </td> </tr>
<tr> <td> $students[10] </td> <td> $sw1[10] </td> <td> $sw2[10] </td> <td> $lab[10] </td> </tr>
<tr> <td> $students[11] </td> <td> $sw1[11] </td> <td> $sw2[11] </td> <td> $lab[11] </td> </tr>
<tr> <td> $students[12] </td> <td> $sw1[12] </td> <td> $sw2[12] </td> <td> $lab[12] </td> </tr>
<tr> <td> $students[13] </td> <td> $sw1[13] </td> <td> $sw2[13] </td> <td> $lab[13] </td> </tr>
<tr> <td> $students[14] </td> <td> $sw1[14] </td> <td> $sw2[14] </td> <td> $lab[14] </td> </tr>
</table>
EOT;

echo $record;

$totals = $sw1[0] + $sw2 [0] + $lab [0];

$score = ($totals/30) * 100;

if ($score >= passinggrade){
    $grades="passed";
}
else {
    $grades="Failed";
}

echo "<p>Student: " . $students[0] . " has a total score of: " . $totals . " and marked as : " . $grades . "</p>"; 

?>