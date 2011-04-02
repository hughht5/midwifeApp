<?php

include("fbmain.php");

//$aboutTest = $facebook->api('/61411159/about');
//print_r($aboutTest);

$friends = $facebook->api('/me/friends');
print_r($friends);
?>