<?php
// IF SERVICE SELECTED BY CLERK IS INSERT THIS FILE IS CALLED
class selectupdate
{
	function selectupdate($params,$tpl)
	{
// VALUES FROM CLERK.TPL
		$b=$params['b'];
		$s=$params['s'];
		echo $s;
		$internal=$params['internal'];
		$y=$b.$s;
		$tpl->assign("b",$b);
		$tpl->assign("internal",$internal);
		$tpl->assign("s",$s);
		$tpl->assign("y",$y);
		$tpl->display("selectupdate.tpl");
	}
}
?>
