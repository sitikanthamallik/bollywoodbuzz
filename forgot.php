<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php
if(isset($_GET['forgot']))
{$ui=$_GET['uid'];
$sq=$_GET['sq'];
$ans=$_GET['ans'];
$s="select * from user_master where user_id='".$ui."' and sq='".$sq."' and ans='".$ans."'";
$con=mysql_connect('localhost','root','');
mysql_select_db('ols',$con);
$r=mysql_query($s);
if($arr=mysql_fetch_array($r))
{echo 'The password is ';
echo $arr['password'];
echo '<hr/>';
}
}
?>

</head>

<body style="background-color:#3F6">

<form  method="get">
userid:<input name="uid" type="text" />
<br/>

security question:<select name="sq">
<option value="favourite color">favourite color</option>
<option value="first teacher">first teacher</option>

<option value="petname">petname</option>
</select>
<br/>
answer:<input name="ans" type="text" />
<br/>
<input name="forgot" type="submit" value="ok" />
</form>
</body>
</html>