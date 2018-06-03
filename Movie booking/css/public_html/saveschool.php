<?php
	class saveschool
	{					
	var $template="addschool.tpl";
		
		function saveschool($params, $tpl)
		{
			require_once("connection.php");
			$hname=$_SESSION['hname'];
			$sn= $params['schoolname'];
			$sl= $params['schoollocation'];
			 $first=$params['first'];
			 $second=$params['second'];
			$third=$params['third'];
			$fourth=$params['fourth'];
			$fifth=$params['fifth'];
			$sixth=$params['sixth'];
			$seventh=$params['seventh'];
			$eighth=$params['eighth'];
			$ninth=$params['ninth'];
			$tenth=$params['tenth'];
			echo $total=$first+$second+$third+$fourth+$fifth+$sixth+$seventh+$eighth+$ninth+$ten;
			$sql = "insert into school values('$hname','$sn','$sl',$first,$second,$third,$fourth,$fifth,$sixth,$seventh,$eighth,$ninth,$tenth,$total);";
			
			$sn = $conn->Execute($sql);
			if($sn)
	  			echo "<center><h2><font color=green> Record Inserted Sucessfully</font></h2></center>";
			else
				echo "<center><h2><font color=green>Role Already Exists/Failed to Insert</font></h2></center>";
				
			$tpl->assign("message","SCHOOL ADDING FORM");	
			$tpl->display($this->template);				
		}
    }
?>
