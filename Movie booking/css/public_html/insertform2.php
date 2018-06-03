<?php
class insertform2
{
function insertform2($params,$tpl)
{
$year=$_COOKIE['y'];
 
   $month=$_COOKIE['month'];
   $hname=$_COOKIE['hname'];
   require_once("connection.php");
		
   echo "<html><body>";
   $cnt=$conn->execute("select count(*) from mapmonthitem where year='$year' and month='$month' and hostelname='$hname'") or die("can not execute");
	//echo "select count(*) from mapmonthitem where year='$year' and month='$month' and hostelname='$hname'";
	for($i=1;$i<=$cnt->fields[0];$i++)
	{
    	for($j=2,$l=1;$j<17;$j++,$l++)
		{
  			$k=4;
			
			$t=$l.$k;
			if($i.$j==$t)
			{
			$z[$j]=$_POST[z.$i.$j-2]+$_POST[z.$i.$j-1];
			}
			else
			$z[$j]=$_POST[z.$i.$j];
		}
		//$u=$conn->execute("insert into openingbalance values('$hname','$month','$year','$z[2]',$z[3],$z[4])");
		echo "insert into openingbalance values('$hname','$month','$year','$z[2]',$z[3],$z[4])";
	}
	if($u)
		echo "INSERTION SUCCESS";
		else
		echo "FAILED TO INSERT";
		
}}	
	?>
	  
