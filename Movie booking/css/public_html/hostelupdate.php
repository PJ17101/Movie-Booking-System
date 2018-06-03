<?php
	class hostelupdate
	{					
		var $template="addhostel.tpl";
		
		function hostelupdate($params, $tpl)
		{
			extract($params);
			require_once("connection.php");
			$sql = "update addhostel set hostelname='$hname',location='$hloc' "; 
		
			$rs= $conn->Execute($sql);
			if($rs)
	  			echo "<center><h2><font color=green> Record Updated Sucessfully</font></h2></center>";
			else
			    echo "<center><h2><font color=green> Unable to Update a Hostel</font></h2></center>";
			$tpl->display($this->template);
			$conn->Close();
		}
    }
?>
