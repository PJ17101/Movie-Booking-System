<?php
class deletemonthlyitem2
{
function deletemonthlyitem2($params,$tpl)
{
require_once("connection.php");
$year=$_SESSION['year'];
	 $hostelname=$_SESSION['hostelname'];
	 $month=$_SESSION['month'];
	 $itemname=$params['itemname'];
	 $delete=$conn->execute("delete from mapmonthitem where hostelname='$hostelname' and month='$month'
	 and itemname='$itemname' and year=$year");
	 echo "delete from mapmonthitem where hostelname='$hostelname' and month='$month'
	 and itemname='$itemname' and year=$year";
$tpl->display("deletemonthlyitem2.tpl");
}
}
?>