<?php
class stockdelete
{
function stockdelete($params,$tpl)
{
require_once("connection.php");
$itemname=$params['itemname'];
$sql=$conn->execute("delete from stock where itemname='$itemname'");
if($sql)
	  			echo "<center><h2><font color=green> Record Deleted Sucessfully</font></h2></center>";
			else
				echo "<center><h2><font color=green>Failed to Delete</font></h2></center>";
$tpl->display("deletestock.tpl");
}
}