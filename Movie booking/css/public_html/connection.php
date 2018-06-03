<?php
require_once('adodb.inc.php');
$conn=&ADONewconnection("postgres");
if(!($conn->connect("localhost","hms","","hms")))
echo "unable to connect";
?>
