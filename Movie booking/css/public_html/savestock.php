<?php
class savestock
{
function savestock($params,$tpl)
{
require_once("connection.php");
$itemno=$params['itemno'];
$itemname=$params['itemname'];
$sql=$conn->execute("insert into stock values($itemno,'$itemname')");
if($sql)
				echo "<center><h2><font color=green> Record Inserted Sucessfully</font></h2></center>";
			else
			    echo "<br><br><center><h2><font color=green>Failed to Insert</font></h2></center>";
				$tpl->display("addstock.tpl");
}
}