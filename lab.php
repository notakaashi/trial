<?php
const passinggrade = 75;
const maxscore = 100;
define ("schoolname","TUPT IT");


$studentnames = array 
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

$quizscores = array (99,98,97,96,95,94,93,92,91,90);
$examscores = array (80,89,88,87,86,85,84,83,82,81);

    $avg0 = (($quizscores[0]+$examscores[0])/2);
    $avg1 = (($quizscores[1]+$examscores[1])/2);
    $avg2 = (($quizscores[2]+$examscores[2])/2);
    $avg3 = (($quizscores[3]+$examscores[3])/2);
    $avg4 = (($quizscores[4]+$examscores[4])/2);
    $avg5 = (($quizscores[5]+$examscores[5])/2);
    $avg6 = (($quizscores[6]+$examscores[6])/2);
    $avg7 = (($quizscores[7]+$examscores[7])/2);
    $avg8 = (($quizscores[8]+$examscores[8])/2);
    $avg9 = (($quizscores[9]+$examscores[9])/2);

    echo"<h1>" . schoolname . "</h1>";
    echo "<hr>";

     $gradesheet = <<<EOT
     <h2>STUDENT GRADE SHEET</h2>
    <table border="1">
    <tr> <th> STUDENT NAME </th> <th> Quiz Score </th> <th> Exam Score </th> <th>Average</th></tr>
    <tr> <td> $studentnames[0]</td>  <td>  $quizscores[0] </td> <td>  $examscores[0]</td> <td>$avg0</td> </tr>
    <tr> <td> $studentnames[1]</td>  <td>  $quizscores[1] </td> <td>  $examscores[1]</td> <td>$avg1</td></tr>
    <tr> <td> $studentnames[2]</td>  <td>  $quizscores[2] </td> <td>  $examscores[2]</td> <td>$avg2</td></tr>
    <tr> <td> $studentnames[3]</td>  <td>  $quizscores[3] </td> <td>  $examscores[3]</td> <td>$avg3</td></tr>
    <tr> <td> $studentnames[4]</td>  <td>  $quizscores[4] </td> <td>  $examscores[4]</td> <td>$avg4</td></tr>
    <tr> <td> $studentnames[5]</td>  <td>  $quizscores[5] </td> <td>  $examscores[5]</td> <td>$avg5</td></tr>
    <tr> <td> $studentnames[6]</td>  <td>  $quizscores[6] </td> <td>  $examscores[6]</td> <td>$avg6</td></tr>
    <tr> <td> $studentnames[7]</td>  <td>  $quizscores[7] </td> <td>  $examscores[7]</td> <td>$avg7</td></tr>
    <tr> <td> $studentnames[8]</td>  <td>  $quizscores[8] </td> <td>  $examscores[8]</td> <td>$avg8</td></tr>
    <tr> <td> $studentnames[9]</td>  <td>  $quizscores[9] </td> <td>  $examscores[9]</td> <td>$avg9</td></tr> </table>
    EOT;

    echo $gradesheet;
    $totalquiz = 
    ($quizscores[0] +
    $quizscores[1] +
    $quizscores[2] +
    $quizscores[3] +
    $quizscores[4] +
    $quizscores[5] +
    $quizscores[6] +
    $quizscores[7] +
    $quizscores[8] +
    $quizscores[9]);

    $totalexams = 
    ($examscores[0] +
    $examscores[1] +
    $examscores[2] +
    $examscores[3] +
    $examscores[4] +
    $examscores[5] +
    $examscores[6] +
    $examscores[7] +
    $examscores[8] +
    $examscores[9] );

    $classaverage = ($totalexams+$totalquiz)/10;

    echo  "<br>Class Average: $classaverage <br>";


    $globalschool = schoolname;
    $globalyear = 2025;

    function displayschoolinfo(){
        global $globalschool, $globalyear;
        $localdepartment = "IT";
        echo "School: $globalschool <br> Year: $globalyear <br> Department : $localdepartment";
    }

    displayschoolinfo();
    ?> 

