<?php

class schoolform1
{
function schoolform1($params, $tpl)
	{ 
	 	
			
	 $hname=$params['hostelname'];
	 $month=$params['month'];
     $y=$params['year'];
	 //echo $hname;
	 //echo $month;
	 //echo $y;	
    	require_once('adodb.inc.php');
		$con=&ADONewConnection("postgres");
		$con->Connect("localhost","hms","","hms") or die("could not connect to database");
        //setcookie("y",$y);
        //setcookie("hname",$hname);
		//setcookie("month",$month);
			echo "<html>";
			echo "<body background=im.jpg><form name=f3 method=POST action=index.php?service=ADDSCHOOLFORM1><center>
			<h2><u>ENTER PURCHASES FOR $hname HOSTEL FOR $month MONTH AND $y YEAR ";
			
			echo "<br><table height=100 width=50 border=1>";
			$rs=$con->execute("select schoolname from school where hostelname='$hname' and month=$");
	
	$cnt=$con->execute("select count(*) from mapmonthitem where year='$y' and month='$month' and hostelname='$hname'");
	//echo "select count(*) from mapmonthitem where year='$y' and month='$month' and hostelname='$hname'";
	echo "<tr><th>s.no</th>";
echo "<th>SCHOOL NAME</th>";
echo "<th>NO OF STUDENTS</th>";
echo "<th>NO OF SCHOOL WORKING DAYS</th>";
echo "<th>NO OF HOLIDAYS</th>";
echo "<th>TOTAL SCHOOL ATTENDANCE</th>";
echo "</tr>";

	echo "<tr>";
	for($i=1;$i<=$cnt->fields[0];$i++)
	{
    	
		echo "<tr>";
		for($j=1;$j<=4;$j++)
		{
  			if($j==1)
			{
				static $k=0;
				$k++;
				echo "<td><input type=text readonly=true size=10 name=z$i$j value=".$k."></td>";
			}
			elseif($j==2)
				echo "<td><input type=text readonly=true size=10 name=z$i$j value=".$rs->fields[0]."></td>";
			else
			echo "<td><input type=text size=7 onblur=\"return check1(this)\" name=z$i$j value=".$rs->fields[$j]."></td>";
		}
		echo "</tr>";
		$rs->MoveNext();
	}
			echo "</table></CENTER>
			<center><br><br><br><br>
			<B><input type=submit value=INSERT></B>
			</center>";	
		echo "</form>
			</body>
			</html>";
	
	}
}	
?>
