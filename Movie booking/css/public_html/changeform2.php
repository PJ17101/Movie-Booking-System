<?php

class changeform2
{
	function changeform2($params,$tpl)
	{
   
     extract($params);
	 require_once("connection.php");
	 $sql1=$conn->execute("select count(*) from openingbalance where hostelname='$hostelname' and year=$year and month='$month'");
	$sql2=$conn->execute("select count(*) from purchases where hostelname='$hostelname' and year=$year and month='$month'");
	$sql3=$conn->execute("select count(*) from consumption where hostelname='$hostelname' and year=$year and month='$month'");
	
	 
	 $count1=$sql1->fields[0];
	 $count2=$sql2->fields[0];
	 $count3=$sql3->fields[0];
	 $hmonth=$sql->fields[1];
	  $_SESSION['year']=$year;
	  $_SESSION['month']=$month;
	  $_SESSION['hostelname']=$hostelname;
	  if($count1 && $count2 && $count3)
	  {
	  $tpl->assign("year",$year);
	 $tpl->assign("hostelname",$hostelname);
	 $tpl->assign("month",$month);
	 $tpl->display("changeform2.tpl");
		}
		else
		{
		$tpl->assign("message","DETAILS FOR FORM-2 ARE NOT FILLED FOR THIS $year-$month");
		$tpl->display("editform2.tpl");
		}
		}
	}

?>
