<?php
	class schoolupdate
	{					
		var $template="addschool.tpl";
		
		function schoolupdate($params, $tpl)
		{
			extract($params);
			require_once("connection.php");
			$sql = "update addschool set schoolname='$sname' where schoolid=$sid "; 
			//echo $sql;
			$rs_serve = $conn->Execute($sql);
			if($rs_serve)
	  			echo "<center><h2><font color=green> Record Updated Sucessfully</font></h2></center>";
			else
			    echo "<center><h2><font color=green> Unable to Update a Role</font></h2></center>";
			$tpl->display($this->template);
			$con->Close();
		}
    }
?>
