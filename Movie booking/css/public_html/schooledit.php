<?php
	class schooledit
	{					
		var $template="schooledit.tpl";
		
		function schooledit($params, $tpl)
		{
			extract($params);
			require_once("connection.php");
			$sql = "select * from  school where schoolname='$schoolname'";

			$rs= $conn->Execute($sql);
                        if($rs)
                         {
                          $hname=$rs->fields[0];
                          $sname=$rs->fields[1];
						  $sloc=$rs->fields[2];
						  $first=$rs->fields[3];
						  $second=$rs->fields[4];
						  $third=$rs->fields[5];
						  $fourth=$rs->fields[6];
						  $fifth=$rs->fields[7];
						  $sixth=$rs->fields[8];
						  $seventh=$rs->fields[9];
						  $eighth=$rs->fields[10];
						  $ninth=$rs->fields[11];
                         $tenth=$rs->fields[12];
						 }
                       	$tpl->assign("message","Edit School");
                        $tpl->assign("hname",$hname);
						$tpl->assign("sname",$sname);
                        $tpl->assign("sloc",$sloc);
						$tpl->assign('first',$first);
						$tpl->assign('second',$second);
						$tpl->assign('third',$third);
						$tpl->assign('fourth',$fourth);
						$tpl->assign('fifth',$fifth);
						$tpl->assign('sixth',$sixth);
						$tpl->assign('seventh',$seventh);
						$tpl->assign('eighth',$eighth);
						$tpl->assign('ninth',$ninth);
						$tpl->assign('tenth',$tenth);						
			$tpl->display($this->template);
			$con->Close();
		}
    }
?>
