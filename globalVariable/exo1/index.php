<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php
//user agent
echo $_SERVER['HTTP_USER_AGENT'] . "\n\n";
$browser = get_browser(null, true);
print_r($browser);

echo '<br>';

echo $_SERVER["REMOTE_ADDR"];

echo '<br>';

echo $_SERVER['SERVER_NAME']
?>



</body>
</html>