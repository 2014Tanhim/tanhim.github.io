<?php


$con = mysql_connect("localhost", "root", "root");

if (!$con) {
    die("cannot connect: " . mysql_error());
}

echo 'Connected successfully</br>';

$db_selected = mysql_select_db('onlineapply', $con);
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

echo "<table border=1>
<tr>
<th>first_name</th>
<th>last_name</th>
<th>phone</th>

</tr>";

for ($i = 0; $i < mysql_num_rows($result) ; $i++) {
    if (!mysql_data_seek($result, $i)) {
        echo "Cannot seek to row $i: " . mysql_error() . "\n";
        continue;
    }
	$row = mysql_fetch_assoc($result);


    echo "<tr>";
    echo "<td>" . $row['first_name'] . "</td>"; 
    echo "<td>" . $row['last_name'] . "</td>";
    echo "<td>" . $row['phone'] . "</td>";
   
	
   
}
echo "</table>";
	
mysql_query($sql, $con);

mysql_close($con);

?>