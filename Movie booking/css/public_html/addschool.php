<?php
require_once("adodb.inc.php");

	class addschool
	{	   
		var $template="addschool.tpl";
		function addschool($params, $tpl)
		{	
				
				$hname=$_SESSION['hname'];
				$tpl->assign("hname",$hname);
				$tpl->display($this->template);
		}
	}
?>
