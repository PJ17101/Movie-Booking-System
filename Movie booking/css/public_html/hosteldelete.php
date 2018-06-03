<?php
	class hosteldelete
	{					
		var $template="addhostel.tpl";
		
		function hosteldelete($params, $tpl)
		{
			extract($params);
			require_once("connection.php");
			$sql1 = $conn->Execute("delete from hostel where hostelname='$hostelname'");
			$sql2=$conn->Execute("delete from school where hostelname='$hostelname'");
			$sql3=$conn->Execute("delete from openingbalance where hostelname='$hostelname'");
			$sql4=$conn->Execute("delete from purchases where hostelname='$hostelname'");
			$sql5=$conn->Execute("delete from consumption where hostelname='$hostelname'");
			$sql6=$conn->Execute("delete from total where hostelname='$hostelname'");
			$sql7=$conn->Execute("delete from closingbalances where hostelname='$hostelname'");
			$sql8=$conn->Execute("delete from hostelattendance where hostelname='$hostelname'");
			$sql9=$conn->Execute("delete from hosteldate where hostelname='$hostelname'");
			$sql10=$conn->Execute("delete from stock where hostelname='$hostelname'");
			$sql11=$conn->Execute("delete from hostelstrength where hostelname='$hostelname'");
			if($sql1 && $sql2 && $sql3 && $sql4 && $sql5 && $sql6 && $sql7 && $sql8 && $sql9 && $sql10 && $sql11)
				echo "<center><h2><font color=green> Records Deleted Sucessfully</font></h2></center>";
			else
			    echo "<br><br><center><h2><font color=green>Failed to Delete</font></h2></center>";
				
			$tpl->display($this->template);
			$con->Close();
		}
    }
?>
