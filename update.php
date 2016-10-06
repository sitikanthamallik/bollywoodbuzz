<?php
$uid=$_GET["uid"];
$pwd=$_GET["pwd"];
include 'db.php';
$sql="update user_master set password='".$pwd."' where user_id='".$uid."'";
$obj=new litdb();
$obj->selectdb();
mysql_query($sql);
header('location:manage.php');
?>
