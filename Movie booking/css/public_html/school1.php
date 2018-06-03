<?php
	class school1
	{	   
		function school1($params,$tpl)
		{				
				$hname=$params['hostelname'];
				$_SESSION['hname']=$hname;
				
				$tpl->assign("message","School Addition Form");
				$tpl->assign("hname",$hname);
				$tpl->display("school1.tpl");
		}		
	}
?>
