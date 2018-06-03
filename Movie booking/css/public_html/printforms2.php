<?php
class printform2
{

		
		function printform2($params, $tpl)
		{		 
				require_once("connection.php");
		
				$sql=$conn->execute("select hostelname from hostel");
				
				$i=0;

				$hname=array();
				while(!$sql->EOF)
				{
				$hname[$i]=$sql->fields[0];
				$i++;
				$sql->MoveNext();
				}
				
				 $tpl->assign("message","PRINTFORM-2");
				 $tpl->assign("hname",$hname);
				 $tpl->display("displayform2.tpl");	
				$conn->Close();
		}	
}
?>
