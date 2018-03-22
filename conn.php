<?php
$dbhost='localhost';
$dbuser='root';
$dbpass='';
$conn=mysqli_connect($dbhost,$dbuser,$dbpass,"ourdb");
if(!$conn)
{
die(' not connected'.'mysql_error()');
}
?>