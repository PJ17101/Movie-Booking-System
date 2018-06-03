<?php

class inserthosteldetails
{
	function inserthosteldetails($params,$tpl)
	{
$hn=$params['hostelname'];
		$m=$params['month'];
		$ye=$params['year'];
    	$_SESSION['hn']=$hn;
	$_SESSION['m']=$m;
		$_SESSION['ye']=$ye;
		require_once('adodb.inc.php');
		$con=&ADONewConnection("postgres");
		$con->Connect("localhost","hms","","hms") or die("could not connect to database");
        
			echo "<html>
			<body>
			
			<script language=javascript>

			function check1(a)
			{
				
								
				
				if(a.value<0)
				{
				  
						alert(\"invalid attendance\");
						a.focus();
						return false;
					&nbsp;
				}
				
  				
			
			}
	 
			</script></html>";
			
			
			
			echo "<body bgcolor=#70A3D0><form name=f3 method=POST action=index.php?service=INSERTHOSTELDETAILS1><center>
			<h2><u>ENTER HOSTEL DETAILS FOR $hn DURING $m-$ye";
			echo "<table height=100 width=50 border=1>";
			$sql="select * from category";
			$r=$con->execute($sql) or die("couldnot");
           
		   for($j=0;$j<=5;$j++)
		   {
		   $caste[$j]=$r->fields[1];
		   $r->MoveNext();
		   }
			echo "<tr><th><input type=text readonly=a size=7 value=CLASS></th>";
			for($i=0;$i<=4;$i++)
			{
  			echo "<th><input type=text readonly=a size=7 value=".$caste[$i]."></th>";
			}
			
		$rs=$con->execute("select * from classes") or die("couldtnot execute");

			
			for($i=1;$i<=10;$i++)
			{
    			echo "<tr>";
				for($j=0;$j<=5;$j++)
				{
					if($j==0)
		echo "<td><input type=text name=t$i$j readonly=yes size=10 value=".$rs->fields[1]."></td>";
					else
					{
						$col=$j;
					
					echo "<td><input type=text name=t$i$j size=7 onblur=\"return check1(this,$col)\" ></td>";
}
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
				$con->close();
	}}

?>
