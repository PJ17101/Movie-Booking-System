<?php
	class schoolsave
	{					//<link rel="stylesheet" href="sun.css">
		var $template="addschool.tpl";
		
		function schoolsave($params, $tpl)
		{
			require_once("connection.php");
			$schoolid= (integer)$params['SchoolId'];
			$schoolname= $params['SchoolName'];
			$sql = "insert into addschool values($schoolid,'$schoolname');";
			$sn = $conn->Execute($sql);
			if($sn)
	  			echo "<center><h2><font color=green> Record Inserted Sucessfully</font></h2></center>";
			else
				echo "<center><h2><font color=green>Role Already Exists/Failed to Insert</font></h2></center>";
				
			$tpl->assign("message","ROLES CREATION FORM");	
			$tpl->display($this->template);				
		}
    }
?>
