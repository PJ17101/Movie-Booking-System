<?php
class backtoedit
{
function backtoedit($params,$tpl)
{
$year=$_SESSION['year'];
	$hostelname=$_SESSION['hostelname'];
	$month=$_SESSION['month'];
$tpl->display("changeform2.tpl");
}
}
?>