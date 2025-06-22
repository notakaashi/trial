<?php 
$testscores = array(
    "mathscores" => array(61,53,55,34,42),
    "sciencescores" => array(123,44,55,112,4)
);


if (count($testscores["mathscores"])<5){
echo "im sorry for being lazy :P";
}
else{
    foreach($testscores["mathscores"] as $value){
        echo "$value <br>";
    }
}


if (count($testscores["sciencescores"])<5){
echo "im sorry for being lazy :P";
}
else{
foreach($testscores["sciencescores"] as $value){
        echo "$value <br>";
    }
}

sort($testscores["mathscores"]);
  foreach($testscores["mathscores"] as $value){
        echo "$value <br>";
    }

rsort($testscores["sciencescores"]);
  foreach($testscores["sciencescores"] as $value){
        echo "$value <br>";
    }


?>