<?php
	class hosteledit
	{					
		var $template="hosteledit.tpl";
		
		function hosteledit($params, $tpl)
		{
			extract($params);
			$_SESSION['hostelname']=$params['hostelname'];
			require_once("connection.php");
			$sql = "select * from  hostel where hostelname='$hostelname'";
//			echo $sql;
			$rs= $conn->Execute($sql);
                        if($rs)
                         {
                          $hname=$rs->fields[0];
                          $hcode=$rs->fields[1];
						  $hloc=$rs->fields[2];
						  $hwoname=$rs->fields[3];
						  $first=$rs->fields[4];
						  $second=$rs->fields[5];
						  $third=$rs->fields[6];
						  $fourth=$rs->fields[7];
						  $fifth=$rs->fields[8];
						  $sixth=$rs->fields[9];
						  $seventh=$rs->fields[10];
						  $eighth=$rs->fields[11];
						  $ninth=$rs->fields[12];
                         $tenth=$rs->fields[13];
						 }
                       	$tpl->assign("message","Edit Hostel");
                        $tpl->assign("hname",$hname);
						$tpl->assign("hcode",$hcode);
                        $tpl->assign("hloc",$hloc);
						$tpl->assign('hwoname',$hwoname);
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
