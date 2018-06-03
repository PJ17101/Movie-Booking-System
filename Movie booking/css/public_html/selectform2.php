<?php

class selectform2
{
	function selectform2($params,$tpl)
	{
     extract($params);
	 $_SESSION['year']=$year;
	 $_SESSION['hostelname']=$hostelname;
	 $_SESSION['month']=$month;
	
	 require_once("connection.php");
	 $sql=$conn->execute("select count(*) from openingbalance  where hostelname='$hostelname' and year=$year and month='$month'");
	 $count=$sql->fields[0];
	 if($count)
	 {
	 $tpl->assign("year",$year);
	 $tpl->assign("hostelname",$hostelname);
	 $tpl->assign("month",$month);
	 $tpl->display("selectform2.tpl");
	}
	else
		{
		$tpl->assign("message","NO OPENING BALANCE FOR THIS $year-$month");
		$tpl->display("form2.tpl");
	    }
	}
}
?>
