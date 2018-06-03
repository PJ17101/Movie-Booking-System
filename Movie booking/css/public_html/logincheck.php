<?php
class main
{
   
	function main($params,$tpl)
	{
	   //require_once('adodb.inc.php');
	   require_once('connection.php');
		 $query="select * from login";
	     $rs=$conn->Execute($query) or die('unable to execute');
	     $username=$params['username'];
	     $_SESSION['username']=$params['username'];
		 $flag=0;
	   while(!$rs->EOF)
	   { 
	    if(($params['username']==$rs->fields[0]) and ($rs->fields[1]==$params['password']))
		 {
		         
	       if($rs->fields[0]=='hod' and $rs->fields[1]=='hod')
	      	    
		    {
			  $tpl->display("hod.tpl");
		  
		    }
		if($rs->fields[0]=='clerk' and $rs->fields[1]=='clerk')
		    { 
			    $tpl->display("clerk.tpl");
			}
			
		
	 }
	 else 
	 {
	 //echo "hai";
	 $tpl->display("login.tpl");
	 }
 }
 }
 }
		 
?>
		   
		

				 
		
			 
			 
	   
