<?php
class deletemonthlyitem1
{

		
		function deletemonthlyitem1($params, $tpl)
		{		 
				extract($params);
	 $_SESSION['year']=$year;
	 $_SESSION['hostelname']=$hostelname;
	 $_SESSION['month']=$month;
	 
	 require_once("connection.php");
				
				$sql=$conn->execute("select itemname from mapmonthitem where hostelname='$hostelname' and month='$month' and year=$year");
				//echo "select itemname from mapmonthitem where hostelname='$hostelname' and month='$month' and year=$year";
				$i=0;
                 $count=$conn->execute("select count(*) from mapmonthitem where hostelname='$hostelname' and month='$month' and year=$year");
			
				$itemname=array();
				while(!$sql->EOF)
				{
				$itemname[$i]=$sql->fields[0];
				$i++;
				$sql->MoveNext();
				}
				if($count->fields[0])
				{
				 $tpl->assign("message","deletemonthlyitem");
				 $tpl->assign("itemname",$itemname);
				 $tpl->display("deletemonthlyitem1.tpl");	
				}
				else
				{
				$tpl->assign("items","THERE ARE NO HOSTELS FOR THE CORRESPONDING YEAR");
				 
				 $tpl->display("deletemonthlyitem.tpl");
				}
				
				$conn->Close();
		}	
}
?>
