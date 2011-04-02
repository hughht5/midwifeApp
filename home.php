<?php

include("fbmain.php");



$friends = $facebook->api('/me/friends');
//print_r($friends);

for ($i = 0; $i <= count($friends[data]) - 1; $i++) {
    echo $friends[data][$i][gender];
}

$aboutTest = $facebook->api('/61411159');
print_r($aboutTest);

//for each friend count if male or female or unknown
?>