<html>
 <head>
 </head>
 
<?php
   class left
    {
        function left($params,$tpl)
        {
   		require("connection.php");
		$userid= $_SESSION['PASSWORD'];
		$branch=$_SESSION['USERNAME'];
		$_SESSION['branch']=$branch;
			 
		$sql = "select servicename,mode from add_services where serviceid IN (select serviceid from role_service where roleid IN (select roleid from user_roles where roles='$userid')) order by displayorder;";  //$userid is cookie var.
	
                $sql1="select roleid from user_roles where roles='$userid'";
               $rs1=$conn->Execute($sql1);
                if(!$rs1->EOF)
                 {
                   $roleid=$rs1->fields[0];
                 }
	 	$rs=$conn->Execute($sql);
		echo "<body background=im.jpg>";
		echo "<TABLE>";
	 	while(!$rs->EOF)
	 	{
	 		$code=$rs->fields[0];
			$mode=$rs->fields[1];
                        
			if ($mode === 'EXAM')
			    echo "<tr><td align=left><a href='./index.php?service=$mode' target=new><b>$code</b></td></tr>";
			else if ($mode === 'LOGOUT')
			    echo "<tr><td align=left><a href='./index.php?service=$mode' target=_parent><b>$code</b></td></tr>";
			else if($mode == 'FINALREPORTS')
			   echo "<tr><td align=left><a href='./index.php?service=$mode' target=_new><b>$code</b></td></tr>";
         else
			 echo "<tr><td align=left><a href='./index.php?service=$mode' target=right><b>$code</b></td></tr>";
			$rs->MoveNext();
	 	}
		                                                                                                        
	    echo "</TABLE></body>";
	 	$tpl->assign("branch",$branch);
		$conn->Close();
		}
	}	
?>

</html>
