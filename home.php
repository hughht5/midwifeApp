<?php

include("fbmain.php");

$friends = $facebook->api('/me/friends');
printr($friends);
?>