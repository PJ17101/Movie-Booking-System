<?php
class editconsumption
{
function editconsumption($params,$tpl)
{
require_once("connection.php");
extract($params);
	 $year=$_SESSION['year'];
	$hostelname=$_SESSION['hostelname'];
	$month=$_SESSION['month'];
echo "<html>";
			echo "<body bgcolor=#70A3D0><form name=f3 method=POST action=index.php?service=CHANGECONSUMPTION><center>
			<h2><u>UPDATE CONSUMPTION FOR $h HOSTEL FOR $month MONTH AND $year YEAR ";
			
			echo "<br><table height=100 width=50 border=1>";
			
	$rs=$conn->execute("select * from consumption where hostelname='$hostelname' and year=$year and month='$month' order by sno");
	//echo "select * from openingbalance where hostelname='$hostelname' and year=$year and month='$month'";
	$cnt=$conn->execute("select count(*) from mapmonthitem where year='$year' and month='$month' and hostelname='$hostelname'");
	//echo "select countt(*) from mapmonthitem where year='$year' and month='$month' and hostelname='$h'";
	echo "<tr><th rowspan=3>s.no</th>";
echo "<th rowspan=3>item</th>";
echo "<th colspan=2>Opening Balance</th>";
echo "<tr><th>Qty.</th><th>Rate</th><th>Amount</th>";
echo "</tr>";
echo "<tr>";
echo "<th>4(a)</th><th>4(b)</th>";
echo "</tr>";

	echo "<tr>";
	for($i=1;$i<=$cnt->fields[0];$i++)
	{
    	
		echo "<tr>";
		for($j=1;$j<=5;$j++)
		{
  			if($j==1)
			{
				static $k=0;
				$k++;
				echo "<td><input type=text readonly=true size=10 name=z$i$j value=".$k."></td>";
			}
			elseif($j==2)
				echo "<td><input type=text readonly=true size=10 name=z$i$j value=".$rs->fields[4]."></td>";
			else
			echo "<td><input type=text size=7 onblur=\"return check1(this)\" name=z$i$j value=".$rs->fields[$j+2]."></td>";
		}
		echo "</tr>";
		
		$rs->MoveNext();
	}
			echo "<input type=hidden name=year value=".$year.">";
			echo "</table></CENTER>
			<center><br><br><br><br>
			<B><input type=submit value=UPDATE></B>
			</center>";	
		echo "</form>
			</body>
			</html>";
}
}
