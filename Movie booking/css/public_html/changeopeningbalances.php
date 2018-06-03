<?php
  class changeopeningbalances
  {
  function changeopeningbalances($params,$tpl)
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
		if($j==5)
		{
		$z[$j]=$p*$q;
		}
		}
		$u=$conn->execute("update openingbalance set quantity=$z[3],rate=$z[4],amount=$z[5] where hostelname='$hostelname' and year=$year and month='$month' and itemname='$z[2]'");
	  // echo "update openingbalance set quantity=$z[3],rate=$z[4],amount=$z[5] where hostelname='$hostelname' and year=$year and month='$month' and itemname='$z[2]'";
	}
	if($u)
	  echo "<CENTER><H2>  SUCESSFULLY   UPDATED OPENINGBALANCE ".$opt;
	  else
	  echo "   UPDATION FAILED: ".$m."</H2></CENTER> ";
	}
	}	
?>   
