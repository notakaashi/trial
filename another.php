    <?php
    const schoolname = "TUPT IT";
    define ("passingGrade", "75");
    const maxscore = 100;

    $studentnames = array(
        "james reid",
        "joseph lorzne",
        "hehehe",
        "hello po",
        "aray kohhh",
        "whats up",
        "brtoski is back",
        "hmmm",
        "hello",
        "whatt");

    $quizscores = array(1,2,3,4,5,6,7,8,9,10);
    $examscores = array (10,9,8,7,6,5,4,3,2,1);

    echo"<h1>" . schoolname . "</h1>";
    echo "<hr>";

    $avg1 = ($quizscores[0]+$examscores[0]/2);
    $avg2 = ($quizscores[1]+$examscores[1]/2);
    $avg3 = ($quizscores[2]+$examscores[2]/2);
    $avg4 = ($quizscores[3]+$examscores[3]/2);
    $avg5 = ($quizscores[4]+$examscores[4]/2);
    $avg6 = ($quizscores[5]+$examscores[5]/2);
    $avg7 = ($quizscores[6]+$examscores[6]/2);
    $avg8 = ($quizscores[7]+$examscores[7]/2);
    $avg9 = ($quizscores[8]+$examscores[8]/2);
    $avg10 = ($quizscores[9]+$examscores[9]/2);
    $gradesheet = <<<EOT
    <h2>STUDENT GRADE SHEET</h2>
    <table border="1">
    <tr> <th> STUDENT NAME </th> <th> Quiz Score </th> <th> Exam Score </th> <th>Average</th></tr>
    <tr> <td> $studentnames[0]</td>  <td>  $quizscores[0] </td> <td>  $examscores[0]</td> <td>$avg1</td> </tr>
    <tr> <td> $studentnames[1]</td>  <td>  $quizscores[1] </td> <td>  $examscores[1]</td> <td>$avg2</td></tr>
    <tr> <td> $studentnames[2]</td>  <td>  $quizscores[2] </td> <td>  $examscores[2]</td> <td>$avg3</td></tr>
    <tr> <td> $studentnames[3]</td>  <td>  $quizscores[3] </td> <td>  $examscores[3]</td> <td>$avg4</td></tr>
    <tr> <td> $studentnames[4]</td>  <td>  $quizscores[4] </td> <td>  $examscores[4]</td> <td>$avg5</td></tr>
    <tr> <td> $studentnames[5]</td>  <td>  $quizscores[5] </td> <td>  $examscores[5]</td> <td>$avg6</td></tr>
    <tr> <td> $studentnames[6]</td>  <td>  $quizscores[6] </td> <td>  $examscores[6]</td> <td>$avg7</td></tr>
    <tr> <td> $studentnames[7]</td>  <td>  $quizscores[7] </td> <td>  $examscores[7]</td> <td>$avg8</td></tr>
    <tr> <td> $studentnames[8]</td>  <td>  $quizscores[8] </td> <td>  $examscores[8]</td> <td>$avg9</td></tr>
    <tr> <td> $studentnames[9]</td>  <td>  $quizscores[9] </td> <td>  $examscores[9]</td> <td>$avg10</td></tr> </table>
    EOT;
    echo $gradesheet;

    $totalquiz = (
        $quizscores[0]+
        $quizscores[1]+
        $quizscores[2]+
        $quizscores[3]+
        $quizscores[4]+
        $quizscores[5]+
        $quizscores[6]+
        $quizscores[7]+
        $quizscores[8]+
        $quizscores[9]
    )/10;

    $totalexams=(
        $examscores[0] +
        $examscores[1] +
        $examscores[2] +
        $examscores[3] +
        $examscores[4] +
        $examscores[5] +
        $examscores[6] +
        $examscores[7] +
        $examscores[8] +
        $examscores[9]
    )/10;

    $classaverage = ($totalquiz + $totalexams)/2;

    echo "Class average:" . $classaverage . "<br>";

    $globalschool = "TUPT";
    $globalyear= "2025";

    function displayschoolinfo(){
        global $globalschool, $globalyear;
        $localdeparment = "IT";
        echo "School: " . $globalschool . "<br>";
        echo "Year: " . $globalyear . "<br>";
        echo "Department: " . $localdeparment . "<br>";
    }

    displayschoolinfo();
    ?> 