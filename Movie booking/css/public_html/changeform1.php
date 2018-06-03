<?php
class changeform1
{
function changeform1($params,$tpl)
{
 
 	$hname=$_SESSION['hostelname'];
	 $month=$_SESSION['month'];
		$y=$_SESSION['year'];
   $sb=$params['asb'];
   $aho=$params['aho'];
   require_once('adodb.inc.php');
		$con=&ADONewConnection("postgres");
		$con->Connect("localhost","hms","","hms") or die("could not connect to database");
   echo "<html><body bgcolor=#70A3D0>";

  $cnt=$con->execute("select count(*) from school where hostelname='$hname'") or die("could not countt");
 	$total=0;	
   for($i=1;$i<=$cnt->fields[0];$i++)
	{
    	for($j=0;$j<=10;$j++)
		{
  			$z[$j]=$_POST[z.$i.$j];
		}
		$u=$con->execute("update schoolattendance set workingdays=$z[4],holidays=$z[5],totalattendance=$z[6] where hostelname='$hname' and schoolname='$z[2]' and year=$y and month='$month'");
		//echo "update schoolattendance set workingdays=$z[4],holidays=$z[5],totalattendance=$z[6] where hostelname='$hname' and schoolname='$z[2]' and year=$y and month='$month'";
		$total+=$z[6];
	}
	
	$total+=$sb+$aho;
	$sql=$con->execute("update hostelattendance set sickstudents=$sb,holidayattendance=$aho,totalattendance=$total where hostelname='$hname' and year=$y and month='$month'");
	//echo "update hostelattendance set sickstudents=$sb,holidayattendance=$aho,totalattendance=$total where hostelname='$hname' and year=$y and month='$month'";
	if($u && $sql)
	  echo "<CENTER><H2>SUCESSFULLY  UPDATED ATTENDANCE </H2></CENTER> ";
	  else
	  echo "<CENTER><H2><FAILED TO UPDATE  ATTENDANCE</H2></CENTER> ";
		
}}	
	?>
	  
