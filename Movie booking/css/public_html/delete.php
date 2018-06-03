<?php
class delete
{
function delete($params,$tpl)
{
require_once("connection.php");
$sql1=$conn->execute("delete from openingbalance");
$sql2=$conn->execute("delete from purchases");
$sql3=$conn->execute("delete from total");
$sql4=$conn->execute("delete from consumption");
$sql5=$conn->execute("delete from closingbalances");
$sql6=$conn->execute("delete from mapmonthitem");

$conn->close();
}
}
