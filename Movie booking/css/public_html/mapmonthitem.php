<?php
require_once("adodb.inc.php");

	class mapmonthitem
	{	   
		var $template="mapmonthitems.tpl";
		function mapmonthitem($params, $tpl)
		{
				$h="SELECT";
				
				extract($params);
				setcookie("yr",$year);
       setcookie("mt",$month);
	   setcookie("hna",$hostelname);
				extract($_POST);
				 
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
				
				 if($req==1)
				{
				 $h=$params['hostelname'];
					$sql="select count(itemnumber) from stock;";
					$rs=$conn->Execute($sql);
					$cnt=$rs->fields[0];
					
					if(strcmp($mapmonthitem,"SAVE")==0)
					{
					
							
							for ($k=0;$k<$cnt;$k++)
							{
								if(!isset($itemname[$k]))
								{
							$del="delete from mapmonthitem where hostelname='$hname' and itemname='$itemname[$k]';";
							
							$del_rs=$conn->Execute($del);
							
							}
							}
							
							for ($k=0,$checked=0,$value=0;$k<$cnt;$k++)
							{
								if(isset($itemname[$k]))
								{
									
								
									$sql="insert into mapmonthitem values('$hostelname','$month','$year','$itemname[$k]',(select itemnumber from stock where itemname='$itemname[$k]'));";
							
						
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
								echo "<center><h2><font color=green> Record Inserted Sucessfully</font></h2></center>";
							else if($value!=$checked and $tst>0)		
								echo "<center><h2><font color=green> Unable to Insert a roow</font></h2></center>";
							$sql1=$conn->execute("select itemname from mapmonthitem where hostelname='$hostelname' and year=$year and month='$month'");
						                                                                                           
			echo "<html>";
			echo "<body bgcolor=#70A3D0><form name=f3 method=POST action=index.php?service=OPENINGBALANCE><center>
			<h2><u>ENTER OPENING BALANCE FOR $h HOSTEL FOR $month MONTH AND $year YEAR ";
			
			echo "<br><table height=100 width=50 border=1>";
			$rs=$conn->execute("select itemname from mapmonthitem where hostelname='$hostelname' and year=$year and month='$month'");
	//echo "select itemname from mapmonthitem where hostelname='$hostelname' and year=$year and month='$month'";
	$rs1=$conn->execute("select * from openingbalance where hostelname='$hostelname' and year=$year and month='$month' order by sno");
	//echo "select * from openingbalance where hostelname='$hostelname' and year=$year and month='$month'";
	$cnt=$conn->execute("select count(*) from mapmonthitem where year='$year' and month='$month' and hostelname='$hostelname'");
	//echo "select countt(*) from mapmonthitem where year='$year' and month='$month' and hostelname='$h'";
	echo "<tr><th rowspan=3>s.no</th>";
echo "<th rowspan=3>item</th>";
echo "<th colspan=2>Opening Balance</th>";
echo "<tr><th>Qty.</th><th>Rate</th>";
echo "</tr>";
echo "<tr>";
echo "<th>4(a)</th><th>4(b)</th>";
echo "</tr>";

	echo "<tr>";
	for($i=1;$i<=$cnt->fields[0];$i++)
	{
    	
		echo "<tr>";
		for($j=1;$j<=4;$j++)
		{
  			if($j==1)
			{
				static $k=0;
				$k++;
				echo "<td><input type=text readonly=true size=10 name=z$i$j value=".$k."></td>";
			}
			elseif($j==2)
				echo "<td><input type=text readonly=true size=10 name=z$i$j value=".$rs->fields[0]."></td>";
			else
			echo "<td><input type=text size=7 onblur=\"return check1(this)\" name=z$i$j value=".$rs1->fields[$j+2]."></td>";
		}
		echo "</tr>";
		$rs->MoveNext();
		$rs1->MoveNext();
	}
			echo "<input type=hidden name=year value=".$year.">";
			echo "</table></CENTER>
			<center><br><br><br><br>
			<B><input type=submit value=INSERT></B>
			</center>";	
		echo "</form>
			</body>
			</html>";
							$tpl->assign("message","HOSTEL-SCHOOL MAPPING FOoRM");
							$tpl->assign("default",$month);
							$tpl->assign("default1",$year);
							$tpl->assign("default2",$h);
							$tpl->assign("hname",$hname);
							$tpl->assign("year",$year);
							$tpl->assign("month",$month);
							$tpl->assign("h",$h);
							
					}
				
					else if(strcmp($month,"SELECT")!=0)
					{
					
						$sql1="select itemnumber, itemname from mapmonthitem where month='".$month."' and year=$year and hostelname='".$h."' order by itemnumber;";
				        $rs=$conn->Execute($sql1);
						$tst=0;
                        $i=0;
						while(!$rs->EOF)
						{
							$snumber_arr[$i]=$rs->fields[0];
							$sname_arr[$i]=$rs->fields[1];
							$i++;
							$rs->MoveNext();
						}
						
						$sql="select itemname from stock order by itemnumber";
		                 $rs1=$conn->Execute($sql);
		                 $j=0;
	 	while(!$rs1->EOF)
	 	{
	 		
			$iname[$j]=$rs1->fields[0];
			$j++;
			$rs1->moveNext();
			}
						//print_r($snames_arr);
						$tpl->assign("message","HOSTEL-SCHOOL MAPPING FORM");
						$tpl->assign("default",$month);
						$tpl->assign("default1",$year);
						$tpl->assign("count1",$j);
						$tpl->assign("inames",$iname);
						//$tpl->assign("default2",$hname);
						$tpl->assign("count",$i);
						$tpl->assign("getroles",$snumber_arr);
						$tpl->assign("getnames",$sname_arr);
						$tpl->assign("default2",$h);
						$tpl->assign("hname",$hname);
						$tpl->display($this->template);
					}
				}
     			else
             	{
					    $tpl->assign("message","HOSTEL-SCHOOL MAPPING FORM");
						$tpl->assign("hname",$hname);
						$tpl->assign("default","SELECT");
						$tpl->assign("default1","SELECT");
						$tpl->assign("default2",$h);
					$tpl->display($this->template);
				}	
				$conn->Close();
		}	
	}	
?>
