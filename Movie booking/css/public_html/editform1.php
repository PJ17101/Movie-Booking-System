<?php


	class editform1
	{	   
		var $template="editform1.tpl";
		
		function editform1($params, $tpl)
		{		 
				require_once("connection.php");	
                $sql=$conn->execute("select * from hostel");
				$i=0;

				$hname=array();
				while(!$sql->EOF)
				{
				$hname[$i]=$sql->fields[0];
				$i++;
				$sql->MoveNext();
				}
				
				 $tpl->assign("message","editform1");
				 $tpl->assign("hname",$hname);
				 $tpl->display("editform1.tpl");
				 	
				$conn->Close();
		}	
	}	
?>
