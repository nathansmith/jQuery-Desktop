<?php

// This file simply redirects IE5 and IE6 users.
// Feel free to get rid of it, if not using PHP.

$ua = $_SERVER['HTTP_USER_AGENT'];
$ie5 = strpos($ua, 'MSIE 5') !== false;
$ie6 = strpos($ua, 'MSIE 6') !== false;

if ($ie5 || $ie6) {
	header('Location: ie.html');
}
else {
	echo file_get_contents('desktop.html');
}