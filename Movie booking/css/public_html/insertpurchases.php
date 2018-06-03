<?php
 class insertpurchases
 {
 function insertpurchases($params,$tpl)
 {
 
  $hname=$_SESSION['hostelname'];
	 $month=$_SESSION['month'];
		$y=$_SESSION['year'];
   require_once("connection.php");
		
   echo "<html><body>";
  $cnt=$conn->execute("select count(*) from mapmonthitem where year='$y' and month='$month' and hostelname='$hname'") or die("could not countt");
  for($i=1;$i<=$cnt->fields[0];$i++)
	{
    	for($j=1;$j<=10;$j++)
		{
  			$z[$j]=$_POST[z.$i.$j];
		
		if($j==3)
		{
		$p=$_POST[z.$i.$j];
		}
		if($j==4)
		{
		$q=$_POST[z.$i.$j];
		}
		if($j==5)
		{
		$z[$j]=$p*$q;
		}
		}
		$sql=$conn->execute("insert into purchases values($i,'$hname','$month',$y,'$z[2]',$z[3],$z[4],$z[5])");
		//echo "insert into purchases values($i,'$hname','$month',$y,'$z[2]',$z[3],$z[4],$z[5])";
		}
	$sql1=$conn->execute("select quantity,rate,amount,itemname from openingbalance where hostelname='$hname' and month='$month' and year=$y order by sno");
	$sql2=$conn->execute("select quantity,rate,amount from purchases where hostelname='$hname' and month='$month' and year=$y order by sno");
	$i=0;
		while(!$sql1->EOF)
	{
	$tq[$i]=$sql1->fields[0];
	$tr[$i]=$sql1->fields[1];
	$ta[$i]=$sql1->fields[2];
	$itemname[$i]=$sql1->fields[3];
	$i++;
	$sql1->MoveNext();
	}
  
	$i=0;
	while(!$sql2->EOF)
	{
	$cq[$i]=$sql2->fields[0];
	$cr[$i]=$sql2->fields[1];
	$ca[$i]=$sql2->fields[2];
	$i++;
	$sql2->MoveNext();
	}

	$cb=1;
	for($i=0;$i<$cnt->fields[0];$i++)
	{
	$clq[$i]=$tq[$i]+$cq[$i];
	$cla[$i]=$ta[$i]+$ca[$i];
	$total=$conn->execute("insert into total values($cb,'$hname','$month',$y,'$itemname[$i]',$clq[$i],$cr[$i],$cla[$i])");
	//echo "insert into total values($cb,'$hname','$month',$y,'$itemname[$i]',$clq[$i],$cr[$i],$cla[$i])";
	$cb++;
	}
	
	if($total || $sql1 || $sql2)
	  {
	  echo "<CENTER><H2>SUCESSFULLY  INSERTED PURCHASES FOR $hname DURING THE YEAR {$month}-{$y}</H2></CENTER> ";
	   $tpl->assign("year",$y);
	 $tpl->assign("hostelname",$hname);
	 $tpl->assign("month",$month);
	  $tpl->display("consumption.tpl");
	  }
	  else
	  echo "<CENTER><H2><FAILED TO INSERT PURCHASE VALUES </H2></CENTER> ";
		}

	}
?>   
