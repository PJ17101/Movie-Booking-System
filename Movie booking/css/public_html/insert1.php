<?php
class insert1
{
function insert1($params,$tpl)
{
require_once("connection.php");
$e=$params['event'];
$d=$params['date'];
$m=$params['mm'];
$y=$params['yy'];
$des=$params['des'];
$ppath=$params['photopath'];
$date="$d-$m-$y";
$sql=$conn->execute("insert into photogallery values('$e','$date','$des','$ppath')");
if($sql)
{
$tpl->display("insert.tpl");
}

$conn->close();
$tpl->display("photogallery.tpl");
}
}
?>
