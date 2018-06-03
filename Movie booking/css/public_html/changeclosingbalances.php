<?php
  class changeclosingbalances
  {
  function changeclosingbalances($params,$tpl)
  {
  extract($params);
	 $year=$_SESSION['year'];
	$hostelname=$_SESSION['hostelname'];
	$month=$_SESSION['month'];

   require_once("connection.php");
   echo "<html><body bgcolor=#70A3D0>";
 
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
		
		$u1=$conn->execute("update closingbalances set quantity=$z[3],rate=$z[4],amount=$z[5] where hostelname='$hostelname' and year=$year and month='$month' and itemname='$z[2]'");
        //echo "<br>";
		//echo "update closingbalances set quantity=$z[3],rate=$z[4],amount=$z[5] where hostelname='$hostelname' and year=$year and month='$month' and itemname='$z[2]'";
		if($month=='DECEMBER')
		{
		static $count=0;
		if($count==0)
		{
		$y=$year+1;
		}$count++;
		$u2=$conn->execute("update openingbalance set quantity=$z[3],rate=$z[4],amount=$z[5] where hostelname='$hostelname' and year=$y and month='JANUARY' and itemname='$z[2]'");	  
		//echo "update openingbalance set quantity=$z[3],rate=$z[4],amount=$z[5] where hostelname='$hostelname' and year=$y and month='JANUARY' and itemname='$z[2]'";
		}
		else
		$u2=$conn->execute("update openingbalances set quantity=$z[3],rate=$z[4],amount=$z[5] where hostelname='$hostelname' and year=$year and month='$month' and itemname='$z[2]'");	  
	
	}
	
	
	if($u1 && $u2)
	  echo "<CENTER><H2>  SUCESSFULLY   UPDATED CLOSING BALANCES ".$opt;
	  else
	  echo "   UPDATION FAILED: ".$m."</H2></CENTER> ";
	}
	}	
?>   
