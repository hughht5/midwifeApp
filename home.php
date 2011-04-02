<?php

include("fbmain.php");

$friends = $facebook->api('/me/friends');
print_r($friends);
?>