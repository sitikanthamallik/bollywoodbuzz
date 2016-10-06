<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<table width="100%" border="1">
<tr><th>userid</th><th>password</th>
<th>action</th></tr>
<?php
$sql="select * from user_master";
include 'db.php';
$obj=new litdb();
$obj->selectdb();
$qu=$obj->returnrow($sql);
while($arr=mysql_fetch_array($qu))
{echo '
<form method="get" action="m.php">
<tr>
<input name="uid" type="hidden" value="'.$arr["user_id"].'" />
<input name="pwd" type="hidden" value="'.$arr["password"].'" />
<td>'.$arr["user_id"].'</td>
<td>'.$arr["password"].'</td>
<td>
<input name="m" type="submit" value="Edit" />
<input name="m" type="submit" value="Delete" />
</td>
</tr>
</form>';
}
?>
</table>
</head>

<body bgcolor="#0099CC">

</body>
</html>