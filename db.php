<?php
class litdb
{function conn()
{$con=mysql_connect('localhost','root','');
return $con;
}
function selectdb()
{$obj=new litdb();
$conn=$obj->conn();
mysql_select_db('ols',$conn);
}
function returnrow($sql)
{$q=mysql_query($sql);
return $q;
}
}
?>