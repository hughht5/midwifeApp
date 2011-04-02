<?php

include("fbmain.php");



$friends = $facebook->api('/me/friends');
//print_r($friends);
echo count($friends[data]);

echo '<pre>';
print_r($friends['data'][0]['id']);


for ($i = 0; $i <= 5 /* count($friends[data]) */ - 1; $i++) {
    //echo $friends[data][$i][id];

    $x = $facebook->api('/' . $friends['data'][$i]['id']['gender']);
    print_r($x);
}

echo '</pre>';

$x = $facebook->api('/61411159');
echo $x[gender];

//print_r($aboutTest);
//for each friend count if male or female or unknown
?>