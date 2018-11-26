<?php
include_once ('db_login.php');

$link = mysql_connect($db_host, $db_username, $db_password);
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
echo 'Connected successfully</br>';

$db_selected = mysql_select_db('onlineapply');
if (!$db_selected) {
    die('Could not select database: ' . mysql_error());
}
else	echo "get table access</br>";

$query = 'SELECT * FROM clinetinfo';
$result = mysql_query($query);
if (!$result) {
    die('Query failed: ' . mysql_error());
}
else
	echo "run query successfully</br>";
	
mysql_close($link);
?>