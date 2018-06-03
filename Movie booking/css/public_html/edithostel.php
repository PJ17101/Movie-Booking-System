<?php
require_once("adodb.inc.php");

	class edithostel
	{	   
		var $template="edithostel.tpl";
		function edithostel($params,$tpl)
		{				
				require_once("connection.php");
				$sql = "select * from hostel;";
				$rs= $conn->Execute($sql);
				$hname=array();
                $i=0;
                while(!$rs->EOF)
                {
                 $hname[$i]=$rs->fields[0];
                 $i++;
                 $rs->MoveNext();
                 }				
				$tpl->assign("message","Edit Hostel");
				$tpl->assign("hname",$hname);
				$tpl->display($this->template);
				$con->Close();
		}		
	}
?>
