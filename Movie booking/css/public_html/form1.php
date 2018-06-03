<?php


	class form1
	{	   
		var $template="form1.tpl";
		
		function form1($params, $tpl)
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
				
				 $tpl->assign("message","FORM1");
				 $tpl->assign("hname",$hname);
				 $tpl->display("form1.tpl");
				 	
				$conn->Close();
		}	
	}	
?>
