<?php
	class schooldelete
	{					
		var $template="addschool.tpl";
		
		function schooldelete($params, $tpl)
		{
			extract($params);
			require_once("connection.php");
			$sql = "delete from school where schoolname='$schoolname'";
			//echo $sql;
			$rs = $conn->Execute($sql);
			if($rs)
				echo "<center><h2><font color=green> Record Deleted Sucessfully</font></h2></center>";
			else
			    echo "<br><br><center><h2><font color=green>Role is being refered in other tables/Failed to Delete</font></h2></center>";
				
			$tpl->display($this->template);
			$con->Close();
		}
    }
?>
