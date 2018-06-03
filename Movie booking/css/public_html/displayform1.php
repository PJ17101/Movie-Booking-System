<?php

class displayform1
{
	function displayform1($params,$tpl)
	{
      extract($params);
	  $hostelname=$params['hostelname'];
	 $month=$params['month'];
		$year=$params['year'];
	
	 require_once("connection.php");
	$rs1=$conn->Execute("select schoolname,totalstudents,workingdays,holidays,totalattendance from schoolattendance
	 where hostelname='$hostelname' and year='$year' and month='$month'") or die("error1");
	$count1=$conn->Execute("select count(*) from schoolattendance
	 where hostelname='$hostelname' and year='$year' and month='$month'");
	 
	 //echo "select schoolname,totalstudents,workingdays,holidays,totalattendance from schoolattendance
	 //where hostelname='$hostelname' and year='$year' and month='$month'";
	 $rs2=$conn->Execute("select * from hostel where hostelname='$hostelname' and year='$year' and month='$month'");
	 $count2=$conn->Execute("select count(*) from hostel where hostelname='$hostelname' and year='$year' and month='$month'");
	// echo "select count(*) from hostel where hostelname='$hostelname' and year='$year' and month='$month'";
	 $rs3=$conn->Execute("select * from hostelattendance where hostelname='$hostelname' and year='$year' and month='$month'");
	 $count3=$conn->Execute("select count(*) from hostelattendance where hostelname='$hostelname' and year='$year' and month='$month'");
	 $code=$conn->Execute("select code from hostel where hostelname='$hostelname' and year='$year' and month='$month'");
	 //echo "select count(*) from hostelattendance where hostelname='$hostelname' and year='$year' and month='$month'";
	 for($i=0;!$rs1->EOF;$i++)
	 {
	    $a[$i][0]=$i+1;
		$a[$i][1]=$rs1->fields[0];
	    $a[$i][2]=$rs1->fields[1];
		$a[$i][3]=$rs1->fields[2];
		$a[$i][4]=$rs1->fields[3];
		$a[$i][5]=$rs1->fields[4];
		
		
		$total+=$a[$i][5];
	    
		
		$rs1->MoveNext();
		
	 }
	 for($i=0;!$rs2->EOF;$i++)
	 {
	 $a1[$i][0]=$rs2->fields[6];
		$a1[$i][1]=$rs2->fields[7];
		$a1[$i][2]=$rs2->fields[8];
		$a1[$i][3]=$rs2->fields[9];
		$a1[$i][4]=$rs2->fields[10];
		$a1[$i][5]=$rs2->fields[11];
		$a1[$i][6]=$rs2->fields[12];
		$a1[$i][7]=$rs2->fields[13];
		$a1[$i][8]=$rs2->fields[14];
		$a1[$i][9]=$rs2->fields[15];
		$a1[$i][10]=$rs2->fields[16];
		$rs2->MoveNext();
	 }
	 if($count1->fields[0] && $count2->fields[0] && $count3->fields[0])
	 {
	 echo $rs2->fields[1];
	
	 $tpl->assign('total',$total);
     $tpl->assign('attendancetoatl',$attendnacetotal);
	$tpl->assign('hostelcode',$rs2->fields[1]);
	 $tpl->assign('a',$a);
	  $tpl->assign('a1',$a1);
	  $tpl->assign('hostelcode',$code->fields[0]);
	 $tpl->assign('sickboarders',$rs3->fields[3]);
	 $tpl->assign('hhattendance',$rs3->fields[4]);
	 $tpl->assign('totalattendance',$rs3->fields[5]);
	 $tpl->assign('y',$year);
	 $tpl->assign('hostelname',$hostelname);
	 $tpl->assign('month',$month);
	 $tpl->display("showform1.tpl");
		}
		else
	{	
	$tpl->assign("message","DETAILS FOR FORM-1 ARE NOT PRESENT");
	 $tpl->display("printform1.tpl");	
		
	}
		
					}
	}

?>
