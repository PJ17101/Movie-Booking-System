<?php
  class openingbalance
  {
  function openingbalance($params,$tpl)
  {
  $hostelname=$_COOKIE['hna'];

   $year=$_COOKIE['yr'];
   $month=$_COOKIE['mt'];
   require_once("connection.php");
   echo "<html><body bgcolor=#70A3D0>";
   $rs=$conn->execute("select itemname from mapmonthitem where hostelname='$hostelname' and year=$year and month='$month' order by sno");
	$cnt=$conn->execute("select count(*) from mapmonthitem where year='$year' and month='$month' and hostelname='$hostelname'");
   //echo "select count(*) from mapmonthitem where year='$year' and month='$month' and hostelname='$hostelname'";
  $sql=$conn->execute("select max(sno) from openingbalance");
  $no=$sql->fields[0];
  
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
		$u=$conn->execute("insert into openingbalance values($no+1,'$hostelname','$month',$year,'$z[2]',$z[3],$z[4],$z[5])");
	    //echo "insert into openingbalance values($no+1,'$hostelname','$month',$year,'$z[2]',$z[3],$z[4],$z[5])";
	$no++;
	}
	if($u)
	  echo "<CENTER><H2>  SUCESSFULLY   INSERTED OPENINGBALANCE ".$opt;
	  else
	  echo "<center> <H2>INSERTION FAILED</H2></CENTER> ";
		
}
}
?>   
