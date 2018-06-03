<?php
    class login
    {
        var $template="login1.tpl";
        var $temp1="mainformm.tpl";

		function login($params,$tpl)
        {
		    
		$branch=$params['branch'];
		        $_SESSION['b']=$branch;
			 extract($_POST);
            if(!(isset($params['username'])))
            {
				  
				  $tpl->assign("message","Enter Your Password");
                  $tpl->assign("branch",$branch);
				  $tpl->display($this->template);
            
			}
            else
            {     
                 $username=$params['username']; 
				 require_once("connection.php");	
                 $query="select * from add_users where userid='$username'";
                 $rs=$conn->Execute($query) or die("unable to exec");
          
                 $found=0; 
                 $uid="";
                 $pwd="";
                 while(!$rs->EOF)
                 {     
                      if(( $rs->fields[0]===$params['username'])and($rs->fields[1]===$params['password']))
                      {  
		         		$uid=$rs->fields[0];
                        $pwd=$rs->fields[1];
                        $found=1; 
                        break; 
                       }
                      $rs->MoveNext();
                 }
				 
                 if($found)
                 {
					   $_SESSION['USERNAME']=$username;
					   $_SESSION['PASSWORD']=$password;
					   $tpl->assign('branch',$_SESSION['b']);
					   $tpl->display($this->temp1);
                 }
                 else
                 {
                      $tpl->assign("message","Invalid UserName or Password<br>Please Try Again.."); $tpl->assign('branch',$branch);
                      $tpl->display($this->template);
                 } 
                
				$conn->close();  
            }
        } 
    }
?>
