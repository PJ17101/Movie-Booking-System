<?php

class purchases
{
	function purchases($params,$tpl)
	{

		
		
		
	 $hname=$_SESSION['hostelname'];
	 $month=$_SESSION['month'];
		$y=$_SESSION['year'];
		
    	require_once('adodb.inc.php');
		$con=&ADONewConnection("postgres");
		$con->Connect("localhost","hms","","hms") or die("could not connect to database");
        setcookie("y",$y);
        //setcookie("hname",$hname);
		//setcookie("month",$month);
			echo "<html>";
			echo "<body bgcolor=#70A3D0><form name=f3 method=POST action=index.php?service=INSERTPURCHASES><center>
			<h2><u>ENTER PURCHASES FOR $hname HOSTEL FOR $month MONTH AND $y YEAR ";
			
			echo "<br><table height=100 width=50 border=1>";
			$rs=$con->execute("select itemname from mapmonthitem where hostelname='$hname' and year=$y and month='$month'");
	$rs1=$con->execute("select * from purchases where hostelname='$hname' and year=$y and month='$month' order by sno");
	$cnt=$con->execute("select count(*) from mapmonthitem where year='$y' and month='$month' and hostelname='$hname'");
	//echo "select count(*) from mapmonthitem where year='$y' and month='$month' and hostelname='$hname'";
	echo "<tr  bgcolor=abcabc><th rowspan=3>s.no</th>";
echo "<th rowspan=3>item</th>";
echo "<th colspan=2>Purchases</th>";
echo "<tr bgcolor=abcabc><th>Qty.</th><th>Rate</th>";
echo "</tr>";
echo "<tr bgcolor=abcabc>";
echo "<th>4(a)</th><th>4(b)</th>";
echo "</tr>";

	echo "<tr >";
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
			echo "<td><input type=text size=7 onblur=\"return check1(this)\" name=z$i$j value=".$rs1->fields[$j+2]."></td>";
		}
		echo "</tr>";
		$rs->MoveNext();
		$rs1->MoveNext();
	}
			echo "</table></CENTER>
			<center><br><br><br><br>
			<B><input type=submit value=INSERT></B>
			</center>";	
		echo "</form>
			</body>
			</html>";
				$con->close();
	}
	}

?>
