<?php
class form2
{

		
		function form2($params, $tpl)
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
				
				 $tpl->assign("message","FORM2");
				 $tpl->assign("hname",$hname);
				 $tpl->display("form2.tpl");	
				$conn->Close();
		}	
}
?>
