<?php
class addstock
{
function addstock($params,$tpl)
{
require_once("connection.php");
				
				$sql="select max(itemnumber) from stock;";
				$rs= $conn->Execute($sql);
				$stockid=$rs->fields[0];
				$tpl->assign("message","Add Stock Form");
				$tpl->assign("stockid",$stockid+1);
				$tpl->display("addstock.tpl");
}
}