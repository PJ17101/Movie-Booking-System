<?php

class selectform1
{
	function selectform1($params,$tpl)
	{
     $hname=$params['hostelname'];
	 $month=$params['month'];
		$y=$params['year'];
		
		$_SESSION['hostelname']=$hname;
		$_SESSION['month']=$month;
		$_SESSION['year']=$y;
    	require_once('adodb.inc.php');
		$con=&ADONewConnection("postgres");
		$con->Connect("localhost","hms","","hms") or die("could not connect to database");
       
			echo "<html>";
			echo "<body bgcolor=#7BA8B3><form name=f3 method=POST action=index.php?service=INSERTFORM1>
			<center><h1>FORM-1 FOR $hname HOSTEL OF $y-$month</center><hr><br><br><br> ";
			echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1. Names of schools and schoolwise no.of students<center>";
			
			echo "<br><table height=100 width=50 border=1>";
			$rs=$con->execute("select schoolname from school where hostelname='$hname'");
	$rs1=$con->execute("select total from school where hostelname='$hname'");
	$rs2=$con->execute("select * from schoolattendance where hostelname='$hname' and month='$month' and year=$y");
	$rs3=$con->execute("select * from hostelattendance where hostelname='$hname' and month='$month' and year=$y");
	$cnt=$con->execute("select count(*) from school where hostelname='$hname'");
	//$rs3=$con->execute("select * from hostelattendance where hostelname=
	echo "<tr><th bgcolor=abcabc>s.no</th>";
echo "<th bgcolor=abcabc>SCHOOL NAME</th>";
echo "<th bgcolor=abcabc>NO OF STUDENTS</th>";
echo "<th bgcolor=abcabc>NO OF SCHOOL WORKING DAYS</th>";
echo "<th bgcolor=abcabc>NO OF HOLIDAYS</th>";
echo "<th bgcolor=abcabc>TOTAL SCHOOL ATTENDANCE</th>";
echo "</tr>";
	echo "<tr>";
	for($i=1;$i<=$cnt->fields[0];$i++)
	{
    	
		echo "<tr>";
		for($j=1;$j<=6;$j++)
		{
  			if($j==1)
			{
				static $k=0;
				$k++;
				echo "<td bgcolor=fedcba align=center><input type=text readonly=true size=10 name=z$i$j value=".$k."></td>";
			}
			elseif($j==2)
				echo "<td bgcolor=abcdef align=center><input type=text readonly=true size=10 name=z$i$j value=".$rs->fields[0]."></td>";
			elseif($j==3)
				echo "<td bgcolor=abcdef align=center><input type=text readonly=true size=10 name=z$i$j value=".$rs1->fields[0]."></td>";
			else
			echo "<td bgcolor=abcdef align=center><input type=text size=7 onblur=\"return check1(this)\" name=z$i$j value=".$rs2->fields[$j+1]."></td>";
		}
		echo "</tr>";
		$rs->MoveNext();
		$rs1->MoveNext();
		$rs2->MoveNext();
	}
			echo "</table>";
			echo "<br><br>";
			echo "<table>";
			echo "<tr><td>2.Attendance for sick boarders in hostel for the school working days :<input type=text name=asb size=3 value=".$rs3->fields[3]."></td></tr>";
			echo "<tr><td>3.Attendance in the hostel for the holidays only(Hostel attendance can not be more than school holidays) :<input type=text name=aho size=3 value=".$rs3->fields[4]."></td></tr>";
			
			echo "</table>";
			echo "</CENTER>
			<center><br>
			<B><input type=submit value=INSERT></B>
			</center>";	
		echo "</form>
			</body>
			</html>";
						
				$con->close();
				
					}
	}

?>
