<?php

const libname = "TUPT LIBRARY";
const latefee = 5;

$book = array (
    "hello world",
    "the box",
    "the parrot",
    "the eagle",
    "the hehe",
    "what the damnz",
    "the world",
    "the shining eagle",
    "the what the",
    "the the the",
    "the worlda",
    "the gulapa",
    "the harry",
    "the potter",
    "the ga"
);

$copies = array (1,2,3,4,5,6,7,8,9,10,11,12,13,14,15);

echo "<h1>" . libname . "</h1>";
echo "<hr>";

$collection = <<<EOT
<h2> BOOK COLLECTION </h2>
<table border = "1">
<tr><th>BOOK TITLE</th> <th>COPIES</th></tr>
<tr><td>$book[0]</td> <td>$copies[0]</td></tr>
<tr><td>$book[1]</td> <td>$copies[1]</td></tr>
<tr><td>$book[2]</td> <td>$copies[2]</td></tr>
<tr><td>$book[3]</td> <td>$copies[3]</td></tr>
<tr><td>$book[4]</td> <td>$copies[4]</td></tr>
<tr><td>$book[5]</td> <td>$copies[5]</td></tr>
<tr><td>$book[6]</td> <td>$copies[6]</td></tr>
<tr><td>$book[7]</td> <td>$copies[7]</td></tr>
<tr><td>$book[8]</td> <td>$copies[8]</td></tr>
<tr><td>$book[9]</td> <td>$copies[9]</td></tr>
<tr><td>$book[10]</td> <td>$copies[10]</td></tr>
<tr><td>$book[11]</td> <td>$copies[11]</td></tr>
<tr><td>$book[12]</td> <td>$copies[12]</td></tr>
<tr><td>$book[13]</td> <td>$copies[13]</td></tr>
<tr><td>$book[14]</td> <td>$copies[14]</td></tr>
</table>
EOT;

echo $collection;

$copies[3] = $copies[3]-1;

echo "<p>Copies of ". $book[3] . " left: " . $copies[3] . "</p>";

$totalfee = latefee * 3;

printf("Total fee: %.2f", $totalfee);




?>