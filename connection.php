<?php

$server = "localhost";
$user = "root";
$password = "";
$db = "notice_board";
$con=mysql_connect($server,$user,$password);
mysql_select_db($db,$con);
if(empty($con))
{
die("Connection error:".mysql_error());
}
?>
