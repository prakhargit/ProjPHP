<html>
<style type="text/css">
body {
	background-image: url(autumn_mountains-1366x768.jpg);
}
</style>
<body>
<?php
session_start();
$lacto=$_SESSION['location'];
$db_host='localhost';
$db_user='root';
$db_pwd='root123';

$database='notes';
$table=$lacto;
if(!mysql_connect($db_host,$db_user,$db_pwd)) die("Cant connect");
if(!mysql_select_db($database)) die("Cant select database"
);

$result=mysql_query("SELECT * FROM {$table}");
if(!$result) die("Query failed");

while($row=mysql_fetch_row($result))
{
echo "<tr>";
foreach($row as $cell) echo "<b><td>$cell&nbsp;</td></b>";
echo "</tr><br/>";
}
mysql_free_result($result);
?>
</br></br>
</br><a href="addtext.htm">ADD NOTES</a></br></br>
<a href="pkhaikya.htm">BACK</a>
</body>
</html>












