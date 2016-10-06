<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<style>
#df{width: 80%; height: 100%; background:yellow;}
</style>
<?php
if(isset($_GET['change']))
{$ui=$_COOKIE['u'];
$pwd=$_GET['pwd'];
$newpwd=$_GET['newpwd'];
$s="update user_master set password='".$newpwd."' where user_id='".$ui."' and password='".$pwd."'";
$con=mysql_connect('localhost','root','');
mysql_select_db('ols',$con);
$r=mysql_query($s);

}

?>
</head>

<body background="666.jpg">
<div id="df">
<b>
<form  method="get">
<pre>
                       Password:<input name="pwd" type="text" />
<br/>
                       Enter new Password:<input name="newpwd" type="text" />
<br/>
                       Re-enter  new Password:<input name="newpwd" type="text" />
<br/>
</pre>

<pre>                                              <input name="change" type="submit" value="change" /> </pre>
<br/>
 <pre>                                              <a href="index.php"><font color="#CC3333">Return to login page</font></a>
</pre></form>
</b>
                                          
</div>
</body>
</html>
