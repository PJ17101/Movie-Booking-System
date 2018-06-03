<?php
class printform1
	{	   
		function printform1($params, $tpl)
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
				
				 $tpl->assign("message","PRINTFORM-1");
				 $tpl->assign("hname",$hname);
				 $tpl->display("printform1.tpl");
				 	
				$conn->Close();
		}	
	}	
?>
