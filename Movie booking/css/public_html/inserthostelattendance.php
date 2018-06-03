<?php
class insertform1
{
function insertform1($params,$tpl)
{
 
 	$hname=$_SESSION['hostelname'];
	 $month=$_SESSION['month'];
		$y=$_SESSION['year'];
   $sb=$params['asb'];
   $aho=$params['aho'];
   require_once('adodb.inc.php');
		$con=&ADONewConnection("postgres");
		$con->Connect("localhost","hms","","hms") or die("could not connect to database");
   echo "<html><body bgcolor=#7BA8B3>";

  $cnt=$con->execute("select count(*) from school where hostelname='$hname'") or die("could not countt");
 	$total=0;	
   for($i=1;$i<=$cnt->fields[0];$i++)
	{
    	for($j=0;$j<=10;$j++)
		{
  			$z[$j]=$_POST[z.$i.$j];
		}
		$u=$con->execute("insert into schoolattendance values('$hname','$z[2]',$y,'$month',$z[3],$z[4],$z[5],$z[6])");
		$total+=$z[6];
	}
	
	$total+=$sb+$aho;
	$sql=$con->execute("insert into hostelattendance values('$hname','$month',$y,$sb,$aho,$total)");
	if($u && $sql)
	  echo "<CENTER><H2>SUCESSFULLY  INSERTED SCHOOL ATTENDANCE </H2></CENTER> ";
	  else
	  echo "<CENTER><H2><FAILED TO INSERT SCHOOL ATTENDANCE</H2></CENTER> ";
		
}}	
	?>
	  
