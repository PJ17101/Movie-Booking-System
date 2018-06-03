<?php
  class edithostelstrength2
  {
  function edithostelstrength2($params,$tpl)
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
		$u=$con->execute("update hostelstrength set sc=$z[1],hc=$z[2],st=$z[3],bc=$z[4],oc=$z[5],total=$total where hostelname='$hn' and year=$ye and month='$m' and class='$z[0]'");
	echo "update hostelstrength set sc=$z[1],hc=$z[2],st=$z[3],bc=$z[4],oc=$z[5],total=$total where hostelname='$hn' and year=$ye and month='$m' and class='$z[0]'";
	}
	if($u)
	  echo "<CENTER><H2>  SUCESSFULLY UPDATED ATTENDANCE   OF  ".$opt;
	  else
	  echo "   UPDATION FAILED : ".$m."</H2></CENTER> ";
		}
		}
?>   
