
<?php
$cookie_name = "username";
$cookie_value = $username;
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day

print ("<br><b>Hej igen ". $_COOKIE['username']."</b>");
?>