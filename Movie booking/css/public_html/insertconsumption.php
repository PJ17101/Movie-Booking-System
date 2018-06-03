<?php
  class insertconsumption
  {
  function insertconsumption($params,$tpl)
  {
  $hname=$_SESSION['hostelname'];
	 $month=$_SESSION['month'];
		$y=$_SESSION['year'];
   $monthname=$_SESSION['monthname'];
   //echo $monthname;
   require_once('adodb.inc.php');
		$con=&ADONewConnection("postgres");
		$con->Connect("localhost","hms","","hms") or die("could not connect to database");
   echo "<html><body bgcolor=#7BA8B3>";
  $cnt=$con->execute("select count(*) from mapmonthitem where year='$y' and month='$month' and hostelname='$hname'") or die("could not countt");
  $sql1=$con->execute("select quantity,rate,amount,itemname from total where hostelname='$hname' and month='$month' and year=$y order by sno");
$obno1=$con->execute("select max(sno) from openingbalance");
	$obno2=$ob1->fields[0];
	$ob=$obno2+1;
	$cno1=$con->execute("select max(sno) from consumption");
	$cno2=$cno1->fields[0];
	$cl=$cno2+1;
	$cbno1=$con->execute("select max(sno) from closingbalances");
	$cbno2=$cbno1->fields[0];
	$cb=$cbno2+1;
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
		
		$u=$con->execute("insert into consumption values($cl,'$hname','$month',$y,'$z[2]',$z[3],$z[4],$z[5])");
		$cl++;
		//echo "insert into purchases values('$hname','$month',$y,'$z[2]',$z[3],$z[4],$z[5])";
	
	}
	$in1=$con->execute("select itemnumber from mapmonthitem where hostelname='$hname' and month='$month' and year=$y");
	
	$i=0;
	while(!$in1->EOF)
	{
	$itemnumber[$i]=$in1->fields[0];
	$i++;
	$in1->MoveNext();
	}
	
	$sql2=$con->execute("select quantity,rate,amount from consumption where hostelname='$hname' and month='$month' and year=$y order by sno");
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
	
	
	for($i=0;$i<$cnt->fields[0];$i++)
	{
	$clq[$i]=$tq[$i]-$cq[$i];
	$cla[$i]=$ta[$i]-$ca[$i];
	$total=$con->execute("insert into closingbalances values($cb,'$hname','$month',$y,'$itemname[$i]',$clq[$i],$cr[$i],$cla[$i])");
	$cb++;
	//echo "insert into closingbalances values($i+1,'$hname','$month',$y,'$itemname[$i]',$clq[$i],$cr[$i],$cla[$i])";
	}$k=$i;
	$mn=$con->execute("select monthnumber from month where monthname='$month'");
	//echo "select monthnumber from month where monthname='$month'";
	$mno=$mn->fields[0];
	if($month=='DECEMBER')
	{
	$mnumber=1;
	$y=$y+1;
	}
	else
	{
	
	$mnumber=$mno+1;
	}
	$mn1=$con->execute("select monthname from month where monthnumber='$mnumber'");
	$mn2=$mn1->fields[0];
	
	for($j=0;$j<$cnt->fields[0];$j++)
	{
	$sql1=$con->execute("insert into openingbalance values($ob,'$hname','$mn2',$y,'$itemname[$j]',$clq[$j],$cr[$j],$cla[$j])");
	//echo "insert into openingbalance values($k,'$hname','$mn2',$y,'$itemname[$j]',$clq[$j],$cr[$j],$cla[$j])";
	$ob++;
	}
	for($j=0,$k=$i;$j<$cnt->fields[0];$j++,$k++)
	{
	$sql2=$con->execute("insert into mapmonthitem values('$hname','$mn2',$y,'$itemname[$j]',$itemnumber[$j])");
	//echo "insert into mapmonthitem values('$hname','$mn2',$y,'$itemname[$j]',$itemnumber[$j])";
	}
	
	
	if(1)
	  {
	  echo "<CENTER><H2>SUCESSFULLY  INSERTED CONSUMPTION FOR $hname DURING $month-$y</H2></CENTER> ";
	  }
	  else
	  {
	  echo "<CENTER><H2><FAILED TO INSERT CONSUMPTION VALUES </H2></CENTER> ";
	}}	

}
?>   
