<?php
class deletestock
{
function deletestock($params,$tpl)
{
require_once("connection.php");
$sql=$conn->execute("select * from stock");
$i=0;
$itemname=array();
while(!$sql->EOF)
{
$itemname[$i]=$sql->fields[1];
$i++;
$sql->MoveNext();
}
$tpl->assign("itemname",$itemname);
$tpl->display("deletestock.tpl");
}
}
