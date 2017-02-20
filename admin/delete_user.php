<?php 
include('../connection.php');
$nid=$_GET['id'];

$q=mysql_query("delete from user where id='$nid'");

header('location:index.php?page=manage_users');

?>