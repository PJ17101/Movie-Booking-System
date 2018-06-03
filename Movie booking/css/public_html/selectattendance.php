<?php
class selectattendance
{
function selectattendance($params,$tpl)
{
$hname=$params['hostelname'];
	 $month=$params['month'];
		$y=$params['year'];
		
		$_SESSION['hostelname']=$hname;
		$_SESSION['month']=$month;
		$_SESSION['year']=$y;
$tpl->assign('year',$y);
$tpl->assign('month',$month);
$tpl->assign('hostelname',$hname);

$tpl->display("selectattendance.tpl");
}
}
?>