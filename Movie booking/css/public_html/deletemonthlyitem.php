<?php
class deletemonthlyitem
{

		
		function deletemonthlyitem($params, $tpl)
		{		 
				require_once('adodb.inc.php');
		$conn=&ADONewConnection("postgres");
		$conn->Connect("localhost","hms","","hms") or die("could not connect to database");
				$sql=$conn->execute("select hostelname from hostel");
				
				$i=0;
               
				$hname=array();
				while(!$sql->EOF)
				{
				$hname[$i]=$sql->fields[0];
				$i++;
				$sql->MoveNext();
				}
				
				 $tpl->assign("message","deletemonthlyitem");
				 $tpl->assign("hname",$hname);
				 $tpl->display("deletemonthlyitem.tpl");	
				$conn->Close();
		}	
}
?>
