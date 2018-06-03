<?php

class hostelattendance
{
	function hostelattendance($params,$tpl)
	{
     $hname=$_SESSION['hostelname'];
		$month=$_SESSION['month'];
		$y=$_SESSION['year'];
			require_once('adodb.inc.php');
		$con=&ADONewConnection("postgres");
		$con->Connect("localhost","hms","","hms") or die("could not connect to database");
       
			echo "<html>";
			echo "<body bgcolor=#7BA8B3><form name=f3 method=POST action=index.php?service=INSERTHOSTELATTENDANCE>
			<center><h1>FORM-1 FOR $hname HOSTEL OF $y-$month</center><hr><br><br><br> ";
			echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1. Names of schools and schoolwise no.of students<center>";
			
			echo "<br><table height=100 width=50 border=1>";
			$rs=$con->execute("select schoolname from school where hostelname='$hname'");
	
	$rs=$con->execute("select * from hostel where hostelname='$hname' and month='$month' and year=$y");
	
	
	echo "<tr><th bgcolor=abcabc>1 st</th>";
echo "<th bgcolor=abcabc>2 nd</th>";
echo "<th bgcolor=abcabc>3 rd</th>";
echo "<th bgcolor=abcabc>4 th</th>";
echo "<th bgcolor=abcabc>5 th</th>";
echo "<th bgcolor=abcabc>6 th</th>";
echo "<th bgcolor=abcabc>7 th</th>";
echo "<th bgcolor=abcabc>8 th</th>";
echo "<th bgcolor=abcabc>9 th</th>";
echo "<th bgcolor=abcabc>10 th</th>";
echo "</tr>";
	
	
    	
		echo "<tr>";
		for($j=1;$j<=10;$j++)
		{
  			
			
				echo "<td bgcolor=abcdef align=center><input type=text size=6 name=z$i$j value=".$rs->fields[$j+3]."></td>";
			
		}
		echo "</tr>";
		
		
		
			echo "</table>";
			echo "<center><br>
			<B><input type=submit value=INSERT></B>
			</center>";	
		echo "</form>
			</body>
			</html>";
						
				$con->close();
				
					}
	}

?>
