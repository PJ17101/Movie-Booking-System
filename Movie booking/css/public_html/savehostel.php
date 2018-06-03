<?php
	class savehostel
	{					//<link rel="stylesheet" href="sun.css">
		var $template="addhostel.tpl";
		
		function savehostel($params, $tpl)
		{
			require_once("connection.php");
			$hn= $params['hostelname'];
			$hl= $params['hostellocation'];
			$hc=$params['hostelcode'];
			$hwoname=$params['hwoname'];
			 $year=$params['year'];
			 $month=$params['month'];
			
			$sql="insert into hostel values('$hn',$hc,$year,'$month','$hl','$hwoname')";
			//echo "insert into hostel values('$hn',$hc,$year,'$month','$hl','$hwoname')";
			$sn=$conn->Execute($sql);
			$sql2=$conn->execute("select monthnumber from month where monthname='$month'");
			$monthnumber=$sql2->fields[0];
			$sql1=$conn->execute("insert into hosteldate values('$hn',$year,'$month',$monthnumber)");
			//echo "insert into hosteldate values('$hn',$year,'$month',$monthnumber)";
			
			$_SESSION['$monthnumber']=$monthnumber;
			
			
			if($sn)
	  			echo "<center><h2><font color=green> Record Inserted Sucessfully</font></h2></center>";
			else
				echo "<center><h2><font color=green>Failed to Insert Hostel Details</font></h2></center>";
				
			$tpl->assign("message","HOSTEL ADDING FORM");	
			$tpl->display($this->template);				
		}
    }
?>
