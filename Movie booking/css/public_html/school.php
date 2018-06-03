<?php
class school
{
function school($params,$tpl)
{
require_once("connection.php");
$sql=$conn->execute("select * from hostel");
$i=0;
$hname=array();
while(!$sql->EOF)
{
$hname[$i]=$sql->fields[0];
$i++;
$sql->MoveNext();
}
$tpl->assign("hname",$hname);
$tpl->display("school.tpl");
}
}
