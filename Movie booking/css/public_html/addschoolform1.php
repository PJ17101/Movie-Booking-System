<?php
class addschoolform1
{
function addschoolform1($params, $tpl)
	{ 
	 	$hname=$_SESSION['hname'];
		$sname=$_SESSION['sname'];
		$sst=$_SESSION['sst'];
		$year=$_SESSION['year'];
		$month=$_SESSION['month'];
		$w1=$params['w1'];
		$w2=$params['w2'];
		$w3=$params['w3'];
		require_once('adodb.inc.php');
		$conn=&ADONewConnection("postgres");
		$conn->Connect("localhost","hms","","hms") or die("could not connect to database");
		$rs1=$conn->Execute("insert into schoolattend(hostelname,schoolname,year,month) values('$hname','$sname',$year,'$month')") or die("no error");	
		//echo "insert into schoolattend(hostelname,schoolname,year,month) values('$hname','$sname',$year,'$month')";	   
	    if($rs1)
		//echo "hai";
		//$rs=$conn->Execute("update schoolattend set workingdays=$w1,holidays=$w2,totalatten=$w3 where hostelname='$hname' and year=$year and month='$month'") or die("error");
		//echo "update schoolattend set workingdays=$w1,holidays=$w2,totalatten=$w3 where hostelname='$hname' and year=$year and month='$month'";
	    if($rs)
		//echo "haiiiiiiiiiii";
	}
}	
?>
