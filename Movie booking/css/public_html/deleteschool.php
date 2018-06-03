<?php
require_once("adodb.inc.php");

	class deleteschool
	{	   
		var $template="deleteschool.tpl";
		function deleteschool($params,$tpl)
		{				
				require_once("connection.php");
				$hname=$_SESSION['hname'];
				$sql = "select * from school where hostelname='$hname';";
				$rs= $conn->Execute($sql);
				$sname=array();
                $i=0;
                while(!$rs->EOF)
                {
                 $sname[$i]=$rs->fields[1];
                 $i++;
                 $rs->MoveNext();
                 }				
				$tpl->assign("message","Delete School");
				$tpl->assign("sname",$sname);
				$tpl->display($this->template);
				$con->Close();
		}		
	}
?>
