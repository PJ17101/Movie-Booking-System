<?php

class showform2
{
	function showform2($params,$tpl)
	{
     extract($params);
	 $_SESSION['year']=$year;
	 $_SESSION['hostelname']=$hostelname;
	 $_SESSION['month']=$month;
	
	 require_once("connection.php");
	 $rs1=$conn->Execute("select itemname,quantity,rate,amount from openingbalance
	 where hostelname='$hostelname' and year='$year' and month='$month' order by sno") or die("error");
	 
	 $rs2=$conn->Execute("select quantity,rate,amount from purchases
	 where hostelname='$hostelname' and year='$year' and month='$month' order by sno") or die("error");
	 
	 $rs3=$conn->Execute("select quantity,rate,amount from total
	 where hostelname='$hostelname' and year='$year' and month='$month' order by sno") or die("error");
	 
	 $rs4=$conn->Execute("select quantity,rate,amount from consumption
	 where hostelname='$hostelname' and year='$year' and month='$month' order by sno") or die("error");
	 
	 $rs5=$conn->Execute("select quantity,rate,amount from closingbalances
	 where hostelname='$hostelname' and year='$year' and month='$month' order by sno") or die("error");
	 $count1=$conn->Execute("select count(*) from purchases
	 where hostelname='$hostelname' and year='$year' and month='$month'");
	 
	 $count2=$conn->Execute("select count(*) from consumption
	 where hostelname='$hostelname' and year='$year' and month='$month'");
	
	 $count3=$conn->Execute("select count(*) from openingbalance
	 where hostelname='$hostelname' and year='$year' and month='$month'");
	 
	 $count4=$conn->Execute("select count(*) from closingbalances
	 where hostelname='$hostelname' and year='$year' and month='$month'");
	
	 $count5=$conn->Execute("select count(*) from total
	 where hostelname='$hostelname' and year='$year' and month='$month'");
	 $code=$conn->Execute("select code from hostel where hostelname='$hostelname' and year='$year' and month='$month'");
	 
	 for($i=0;!$rs1->EOF and !$rs2->EOF and !$rs3->EOF and !$rs4->EOF and !$rs5->EOF;$i++)
	 {
	    $a[$i][0]=$i+1;
		$a[$i][1]=$rs1->fields[0];
	    $a[$i][2]=$rs1->fields[1];
		$a[$i][3]=$rs1->fields[2];
		$a[$i][4]=$rs1->fields[3];
		$openingtotal+=$a[$i][4];
	    
		$a[$i][5]=$rs2->fields[0];
		$a[$i][6]=$rs2->fields[1];
		$a[$i][7]=$rs2->fields[2];
		$purchasestotal+=$a[$i][7];
		$a[$i][8]=$rs3->fields[0];
		$a[$i][9]=$rs3->fields[1];
		$a[$i][10]=$rs3->fields[2];
		$total+=$a[$i][10];
		$a[$i][11]=$rs4->fields[0];
		$a[$i][12]=$rs4->fields[1];
		$a[$i][13]=$rs4->fields[2];
		$consumptiontotal+=$a[$i][13];
		$a[$i][14]=$rs5->fields[0];
		$a[$i][15]=$rs5->fields[1];
		$a[$i][16]=$rs5->fields[2];
		$closingtotal+=$a[$i][16];
		$rs1->MoveNext();
		$rs2->MoveNext();
		$rs3->MoveNext();
		$rs4->MoveNext();
		$rs5->MoveNext();
	 }
	 $tpl->assign('ot',$openingtotal);
     $tpl->assign('pt',$purchasestotal);
	$tpl->assign('tt',$total);
	$tpl->assign('ct',$consumptiontotal);
	$tpl->assign('clt',$closingtotal);
		if($count1->fields[0] && $count2->fields[0] && $count3->fields[0] && $count4->fields[0] && $count5->fields[0])
	 {
	 $tpl->assign('a',$a);
	  $tpl->assign('hostelcode',$code->fields[0]);
	 $tpl->assign('y',$year);
	 $tpl->assign('hostelname',$hostelname);
	 $tpl->assign('month',$month);
	 $tpl->display("showform2.tpl");
	}
	else
	{	
	$tpl->assign("message","DETAILS FOR FORM-2 ARE NOT PRESENT");
	 $tpl->display("printform2.tpl");	
		
	}
	}}

?>
