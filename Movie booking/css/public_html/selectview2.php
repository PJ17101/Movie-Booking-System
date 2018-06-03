<?
class selectview2
{
	function selectview2($params,$tpl)
{
$b=$_POST['b'];
$s=$_POST['s'];
$y=$b.$s;
echo $y;
require_once('connection.php');
$rs=$conn->execute("select * from marks");
$nr=$conn->execute("select rollno from marks");
$sub=$conn->execute("select * from subjects where year=$y");
$s=array();
$i=0;
while(!$nr->EOF)
{
$s[$i]=$nr->fields[0];
$i++;
$nr->moveNext();
}
					    $conn->close();
						$tpl->assign('m',$s);
						$tpl->assign('sub',$sub);
				         $tpl->assign('x',$rs);
                        $tpl->display("selectview2.tpl");
	}
}
