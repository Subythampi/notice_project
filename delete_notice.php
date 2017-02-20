<?php 
include('../connection.php');
$nid=$_GET['id'];

$q=mysql_query("delete from notice where notice_id='$nid'");

header('location:index.php?page=notification');

?>