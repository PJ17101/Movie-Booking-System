<?php
  class changeconsumption
  {
  function changeconsumption($params,$tpl)
  {
  extract($params);
	 $year=$_SESSION['year'];
	$hostelname=$_SESSION['hostelname'];
	$month=$_SESSION['month'];

   require_once("connection.php");
   echo "<html><body background=im.jpg>";
 
	$cnt=$conn->execute("select count(*) from mapmonthitem where year='$year' and month='$month' and hostelname='$hostelname'");
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
		if($p=0 && $q==0)
		{
		echo "hai";
		if($j==5)
		{
		$z[$j]=$p*$q;
		print_r($z);
		}
		}
		}
		$u=$conn->execute("update consumption set quantity=$z[3],rate=$z[4],amount=$z[5] where hostelname='$hostelname' and year=$year and month='$month' and itemname='$z[2]'");
	  
	}
	$sql1=$conn->execute("select quantity,rate,amount,itemname from total where hostelname='$hostelname' and month='$month' and year=$year order by sno");
	$sql2=$conn->execute("select quantity,rate,amount from consumption where hostelname='$hostelname' and month='$month' and year=$year order by sno");
	$i=0;
		while(!$sql1->EOF)
	{
	$oq[$i]=$sql1->fields[0];
	$or[$i]=$sql1->fields[1];
	$oa[$i]=$sql1->fields[2];
	$itemname[$i]=$sql1->fields[3];
	$i++;
	$sql1->MoveNext();
	}
	
	$i=0;
	while(!$sql2->EOF)
	{
	$pq[$i]=$sql2->fields[0];
	$pr[$i]=$sql2->fields[1];
	$pa[$i]=$sql2->fields[2];
	$i++;
	$sql2->MoveNext();
	}
	
		for($i=0;$i<$cnt->fields[0];$i++)
	{
	$tq[$i]=$oq[$i]-$pq[$i];
	$ta[$i]=$oa[$i]-$pa[$i];
	$total=$conn->execute("update closingbalances set quantity=$tq[$i],rate=$pr[$i],amount=$ta[$i] where hostelname='$hostelname' and year=$year and month='$month' and itemname='$itemname[$i]'");
	
	}
	if($u)
	  echo "<CENTER><H2>  SUCESSFULLY   UPDATED CONSUMPTION ".$opt;
	  else
	  echo "   UPDATION FAILED: ".$m."</H2></CENTER> ";
	}
	}	
?>   
