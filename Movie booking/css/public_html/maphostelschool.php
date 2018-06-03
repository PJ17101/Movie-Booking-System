<?php
class maphostelschool
{
function maphostelschool($params,$tpl)
{
require_once("connection.php");
$hname=$params['hostelname'];
for ($k=0,$checked=0,$value=0;$k<$cnt;$k++)
							{
								if(isset($role[$k]))
								{
									//echo "K is :::".$k;
									//echo "Role Name ::::".$role[$k];
								
									$sql="insert into user_roles values('$hname','$role[$k]');";
									//echo $sql;
									$value++;
									$rs_userrole=$conn->Execute($sql);
									if($rs_userrole) 
										$checked++;
									else
										$checked--;
										
									$tst++;	
								}
							}	
							if($value==$checked and $tst>0)	
								echo "<center><h2><font color=green> Record Insertedd Sucessfully</font></h2></center>";
							else if($value!=$checked and $tst>0)		
								echo "<center><h2><font color=green> Unable to Insert a row</font></h2></center>";
							
							$tpl->assign("message","USER-ROLE MAPPING FORM");
							$tpl->assign("default",$userid);
							$tpl->display($this->template);
}
}
				