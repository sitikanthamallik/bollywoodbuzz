<?php
$m=$_GET['m'];
$uid=$_GET["uid"];
$pwd=$_GET["pwd"];
include 'db.php';
if($m=="Delete")
{
$sql="delete from user_master where password='".$pwd."' and user_id='".$uid."'";
$obj=new litdb();
$obj->selectdb();
mysql_query($sql);
header('location:manage.php');
}
if($m=="Edit")
{echo '<form method="get" action="update.php"/>';
echo $uid;
echo '<br><input type="hidden" name="uid" value="'.$uid.'" />';
echo '<input type="text" name="pwd" value="'.$pwd.'" />';
echo '<input type="submit" value="update" />';
echo'</form>';
}
?>
<html>
<body bgcolor="#FFFF33">
</body>
</html>