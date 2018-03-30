<?php
$valid_passwords = array ("zaz" => "jaimelespetitsponeys");
$valid_users = array_keys($valid_passwords);

$user = $_SERVER['PHP_AUTH_USER'];
$pass = $_SERVER['PHP_AUTH_PW'];

$validated = (in_array($user, $valid_users)) && ($pass == $valid_passwords[$user]);

if (!$validated)
{
	  header('WWW-Authenticate: Basic realm="My Realm"');
	    header('HTTP/1.0 401 Unauthorized');
	    die ("Not authorized");
}

$img = file_get_contents('../img/42.png');
$img_data = base64_encode($img);
echo "$img_data";
?>
