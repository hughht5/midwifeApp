<?php

include("fbmain.php");



$friends = $facebook->api('/me/friends');
//print_r($friends);
$numFriends = count($friends[data]);

$numFemale = 0;

//echo '<pre>';
//print_r($friends['data'][0]['id']);

for ($i = 0; $i <= count($friends[data]) - 1; $i++) {
    //echo $friends[data][$i][id];

    $x = $facebook->api('/' . $friends['data'][$i]['id']);
    if ($x['gender'] == "female") {
        $numFemale++;
    }
}

echo "you have ".$numFriends." friends of which ".$numFemale." are female";
?>