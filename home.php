<?php

include("fbmain.php");



$friends = $facebook->api('/me/friends');
//print_r($friends);
echo count($friends[data]);

for ($i = 0; $i <= count($friends[data]) - 1; $i++) {
    //echo $friends[data][$i][id];

    echo ($facebook->api('/'.$friends[data][$i][id]));
}

//$aboutTest = $facebook->api('/61411159');
//print_r($aboutTest);
//for each friend count if male or female or unknown
?>