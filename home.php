<?php

include("fbmain.php");



$friends = $facebook->api('/me/friends');
//print_r($friends);
echo count($friends[data]);

for ($i = 0; $i <= 50 /* count($friends[data]) */ - 1; $i++) {
    //echo $friends[data][$i][id];

    $x = $facebook->api('/' . $friends[data][$i][id]);
    echo $x[gender];
}

$x = $facebook->api('/61411159');
echo $x[gender];

//print_r($aboutTest);
//for each friend count if male or female or unknown
?>