<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php
if(isset($_GET['register']))
{$uid=$_GET['uid'];
$pwd=$_GET['pwd'];
$sq=$_GET['sq'];
$ans=$_GET['ans'];
$s="insert into user_master values('".$uid."','".$pwd."','".$sq."','".$ans."')";
$con=mysql_connect('localhost','root','');
mysql_select_db('ols',$con);
mysql_query($s);

header('location:index.php');
}

?>

</head>

<body style="background-color:#FF9">

<form  method="get">
userid:<input name="uid" type="text" />
<br/>
password:<input name="pwd" type="password" />
<br/>
security question:<select name="sq">
<option value="favourite color">favourite color</option>
<option value="first teacher">first teacher</option>

<option value="petname">petname</option>
</select>
<br/>
answer:<input name="ans" type="text" />
<br/>
<input name="register" type="submit" value="register" />
</form>
</body>
</html>
