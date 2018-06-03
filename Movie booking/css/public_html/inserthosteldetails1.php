<?php
  class inserthosteldetails1
  {
  function inserthosteldetails1($params,$tpl)
  {
  	$hn=$_SESSION['hn'];
	 $m=$_SESSION['m'];
		$ye=$_SESSION['ye'];
   require_once('adodb.inc.php');
		$con=&ADONewConnection("postgres");
		$con->Connect("localhost","hms","","hms") or die("could not connect to database");
   echo "<html><body bgcolor=#70A3D0>";
   for($i=1;$i<=10;$i++)
	{
    	for($j=0;$j<=5;$j++)
		{
  			$z[$j]=$_POST[t.$i.$j];
		}
		$total=$z[1]+$z[2]+$z[3]+$z[4]+$z[5];
		$count=$con->execute("select count(*) from hostelstrength");
		$sno=$count->fields[0];
		$u=$con->execute("insert into hostelstrength values($sno,'$hn',$ye,'$m','$z[0]',$z[1],$z[2],$z[3],$z[4],$z[5],$total)");
	//echo "insert into hostelstrength values('$hn',$ye,'$m','$z[0]',$z[1],$z[2],$z[3],$z[4],$z[5],$total)";
	}
	if($u)
	  echo "<CENTER><H2>  SUCESSFULLY  INSERTED ATTENDANCE   OF $hn FOR $ye-$m ";
	  else
	  echo "   INSERTION FAILED : ".$m."</H2></CENTER> ";
		}
		}
?>   
