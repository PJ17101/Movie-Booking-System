<?php
/*********************************************************************************
 *       Filename: ReservationRecord.php
 *       PHP 4.0 build 11/30/2001
 *********************************************************************************/

//-------------------------------
// ReservationRecord CustomIncludes begin

include ("./common.php");
include ("./Header.php");
include ("./Footer.php");

// ReservationRecord CustomIncludes end
//-------------------------------

session_start();

//===============================
// Save Page and File Name available into variables
//-------------------------------
$sFileName = "ReservationRecord.php";
//===============================


//===============================
// ReservationRecord PageSecurity begin
check_security(1);
// ReservationRecord PageSecurity end
//===============================

//===============================
// ReservationRecord Open Event begin
// ReservationRecord Open Event end
//===============================

//===============================
// ReservationRecord OpenAnyPage Event start
// ReservationRecord OpenAnyPage Event end
//===============================

//===============================
//Save the name of the form and type of action into the variables
//-------------------------------
$sAction = get_param("FormAction");
$sForm = get_param("FormName");
//===============================

// ReservationRecord Show begin

//===============================
// Perform the form's action
//-------------------------------
// Initialize error variables
//-------------------------------
$sReservationRecordErr = "";

//-------------------------------
// Select the FormAction
//-------------------------------
switch ($sForm) {
  case "ReservationRecord":
    ReservationRecord_action($sAction);
  break;
}
//===============================

//===============================
// Display page

//===============================
// HTML Page layout
//-------------------------------
?><html>
<head>
<title>Philmar Online Rent-a-Car</title>
<meta name="GENERATOR" content="Philmar">
<meta http-equiv="pragma" content="no-cache">
<meta http-equiv="expires" content="0">
<meta http-equiv="cache-control" content="no-cache">
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1"></head>
<body style="background-color: #FFFFFF; color: #000000; font-family: Arial, Tahoma, Verdana, Helveticabackground-color: #FFFFFF; color: #000000; font-family: Arial, Tahoma, Verdana, Helvetica">
<center>
 <table>
  <tr>
   <td valign="top"><html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Philmar Online Rent-a-Car</title>
<script language="JavaScript" type="text/JavaScript">
<!--
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
//-->
</script>
</head>

<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0" onLoad="MM_preloadImages('images/mazda6_1.jpg','images/home_2.jpg','images/aboutus_2.jpg','images/contactus_2.jpg')">
<table width="778" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td><img src="images/header1.jpg" width="778" height="110"></td>
  </tr>
</table>
<table width="778" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="55"><img src="images/header2.jpg" width="55" height="43"></td>
    <td width ="17"><a href="default.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('home','','images/home_2.jpg',1)"><img src="images/home_1.jpg" alt="home" name="home" width="63" height="43" border="0"></a></td>
    <td width ="114" valign="middle"><a href="about.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('aboutphilmar','','images/aboutus_2.jpg',1)"><img src="images/aboutus_1.jpg" alt="aboutphilmar" name="aboutphilmar" width="114" height="43" border="0"></a></td>
    <td width ="111"><a href="contact.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('contactus','','images/contactus_2.jpg',1)"><img src="images/contactus_1.jpg" alt="contactus" name="contactus" width="108" height="43" border="0"></a></td>
    <td width ="455"><img src="images/header3.jpg" width="438" height="43"></td>
  </tr>
</table>
<table width="778" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="55"><img src="images/header4.jpg" width="55" height="48"></td>
    <td>&nbsp;</td>
    <td width="438"><img src="images/header5.jpg" width="438" height="48"></td>
  </tr>
</table>
</body>
</html>
 <?php Menu_show() ?>
   
   </td>
  </tr>
 </table>
</center>
<table width="760" align="center">
<tr>
  <td align="center">
<hr color="#800000">
 <table>
  <tr>
   
   <td valign="top">
<?php ReservationRecord_show() ?>
    <SCRIPT Language="JavaScript">
if (document.forms["ReservationRecord"])
document.ReservationRecord.onsubmit=delconf;
function delconf() {
if (document.ReservationRecord.FormAction.value == 'delete')
  return confirm('Delete record?');
}
</SCRIPT>
   </td>
  </tr>
 </table>

<hr color="#800000" width="60%">
</td>
</tr>
</table>
<center>
 <table>
  <tr>
   <td valign="top">
<?php Footer_show() ?>
    </td>
   
  </tr>
 </table>
 </center>
</body>
</html>
<?php

// ReservationRecord Show end

//===============================
// ReservationRecord Close Event begin
// ReservationRecord Close Event end
//===============================
//********************************************************************************


//===============================
// Action of the Record Form
//-------------------------------
function ReservationRecord_action($sAction)
{
//-------------------------------
// Initialize variables  
//-------------------------------
  global $db;
  
  global $sForm;
  global $sReservationRecordErr;
  global $styles;
  $bExecSQL = true;
  $sActionFileName = "";
  $sWhere = "";
  $bErr = false;
  $pPKorder_id = "";
  $fldmember_id = "";
  $fldquantity = "";
//-------------------------------

//-------------------------------
// ReservationRecord Action begin
//-------------------------------
  $sActionFileName = "Reservation.php";

//-------------------------------
// CANCEL action
//-------------------------------
  if($sAction == "cancel")
  {

//-------------------------------
// ReservationRecord BeforeCancel Event begin
// ReservationRecord BeforeCancel Event end
//-------------------------------
    header("Location: " . $sActionFileName);
  }
//-------------------------------


//-------------------------------
// Build WHERE statement
//-------------------------------
  if($sAction == "update" || $sAction == "delete") 
  {
    $pPKorder_id = get_param("PK_order_id");
    if( !strlen($pPKorder_id)) return;
    $sWhere = "order_id=" . tosql($pPKorder_id, "Number");
  }
//-------------------------------


//-------------------------------
// Load all form fields into variables
//-------------------------------
  $fldUserID = get_session("UserID");
  $fldmember_id = get_param("member_id");
  $fldquantity = get_param("quantity");

//-------------------------------
// Validate fields
//-------------------------------
  if($sAction == "insert" || $sAction == "update") 
  {
    if(!strlen($fldquantity))
      $sReservationRecordErr .= "The value in field No. of Hour(s) is required.<br>";
    
    if(!is_number($fldmember_id))
      $sReservationRecordErr .= "The value in field member_id is incorrect.<br>";
    
    if(!is_number($fldquantity))
      $sReservationRecordErr .= "The value in field No. of Hour(s) is incorrect.<br>";
    
//-------------------------------
// ReservationRecord Check Event begin
// ReservationRecord Check Event end
//-------------------------------
    if(strlen($sReservationRecordErr)) return;
  }
//-------------------------------


//-------------------------------
// Create SQL statement
//-------------------------------
  switch(strtolower($sAction)) 
  {
    case "update":

//-------------------------------
// ReservationRecord Update Event begin
// ReservationRecord Update Event end
//-------------------------------
        $sSQL = "update orders set " .
          "member_id=" . tosql($fldmember_id, "Number") .
          ",quantity=" . tosql($fldquantity, "Number");
        $sSQL .= " where " . $sWhere;
    break;
    case "delete":
//-------------------------------
// ReservationRecord Delete Event begin
// ReservationRecord Delete Event end
//-------------------------------
        $sSQL = "delete from orders where " . $sWhere;
    break;
  }
//-------------------------------
//-------------------------------
// ReservationRecord BeforeExecute Event begin
// ReservationRecord BeforeExecute Event end
//-------------------------------

//-------------------------------
// Execute SQL statement
//-------------------------------
  if(strlen($sReservationRecordErr)) return;
  if($bExecSQL)
    $db->query($sSQL);
  header("Location: " . $sActionFileName);

//-------------------------------
// ReservationRecord Action end
//-------------------------------
}

//===============================
// Display Record Form
//-------------------------------
function ReservationRecord_show()
{
  global $db;
  
  global $sAction;
  global $sForm;
  global $sFileName;
  global $sReservationRecordErr;
  global $styles;
  
  $fldorder_id = "";
  $fldmember_id = "";
  $flditem_id = "";
  $fldquantity = "";
//-------------------------------
// ReservationRecord Show begin
//-------------------------------
  $sFormTitle = "Reservation";
  $sWhere = "";
  $bPK = true;

?>
   
   <table style="width:100%">
   <form method="POST" action="<?= $sFileName ?>" name="ReservationRecord">
   <tr><td style="background-color: #336699; text-align: Center; border-style: outset; border-width: 1" colspan="2"><font style="font-size: 10pt; color: #FFFFFF; font-weight: bold"><?=$sFormTitle?></font></td></tr>
   <? if ($sReservationRecordErr) { ?>
		<tr><td style="background-color: #FFFFFF; border-width: 1" colspan="2"><font style="font-size: 10pt; color: #000000"><?= $sReservationRecordErr ?></font></td></tr>
	 <? } ?>
<? 

//-------------------------------
// Load primary key and form parameters
//-------------------------------
  if($sReservationRecordErr == "")
  {
    $porder_id = get_param("order_id");
  }
  else
  {
    $fldorder_id = strip(get_param("order_id"));
    $fldmember_id = strip(get_param("member_id"));
    $fldquantity = strip(get_param("quantity"));
    $porder_id = get_param("PK_order_id");
  }
//-------------------------------

//-------------------------------
// Load all form fields

//-------------------------------

//-------------------------------
// Build WHERE statement
//-------------------------------
  
  if( !strlen($porder_id)) $bPK = false;
  
  $sWhere .= "order_id=" . tosql($porder_id, "Number");
//-------------------------------
//-------------------------------
// ReservationRecord Open Event begin
// ReservationRecord Open Event end
//-------------------------------

//-------------------------------
// Build SQL statement and execute query
//-------------------------------
  $sSQL = "select * from orders where " . $sWhere;
  // Execute SQL statement
  $db->query($sSQL);
  $bIsUpdateMode = ($bPK && !($sAction == "insert" && $sForm == "ReservationRecord") && $db->next_record());
//-------------------------------

//-------------------------------
// Load all fields into variables from recordset or input parameters
//-------------------------------
  if($bIsUpdateMode)
  {
    $flditem_id = $db->f("item_id");
    $fldmember_id = $db->f("member_id");
    $fldorder_id = $db->f("order_id");
//-------------------------------
// Load data from recordset when form displayed first time
//-------------------------------
    if($sReservationRecordErr == "") 
    {
      $fldquantity = $db->f("quantity");
    }
//-------------------------------
// ReservationRecord ShowEdit Event begin
// ReservationRecord ShowEdit Event end
//-------------------------------
  }
  else
  {
    if($sReservationRecordErr == "")
    {
      $fldmember_id = tohtml(get_session("UserID"));
    }
//-------------------------------
// ReservationRecord ShowInsert Event begin
// ReservationRecord ShowInsert Event end
//-------------------------------
  }
//-------------------------------
// Set lookup fields
//-------------------------------
  $flditem_id = get_db_value("SELECT name FROM items WHERE item_id=" . tosql($flditem_id, "Number"));
//-------------------------------
// ReservationRecord Show Event begin
// ReservationRecord Show Event end
//-------------------------------

//-------------------------------
// Show form field
//-------------------------------
    ?>
      <tr>
       <td style="background-color: #FFEAC5; border-style: inset; border-width: 0">
         <font style="font-size: 10pt; color: #000000">Vehicle #</font>
       </td>
       <td style="background-color: #FFFFFF; border-width: 1">
         <font style="font-size: 10pt; color: #000000">
      <?= tohtml($flditem_id) ?>&nbsp;</font>
       </td>
     </tr>
      <tr>
       <td style="background-color: #FFEAC5; border-style: inset; border-width: 0">
         <font style="font-size: 10pt; color: #000000">No. of Hour(s)</font>
       </td>
       <td style="background-color: #FFFFFF; border-width: 1">
         <font style="font-size: 10pt; color: #000000"><input type="text" name="quantity" maxlength="5" value="<?= tohtml($fldquantity) ?>" size="5" ></font>
       </td>
     </tr>
    <tr><td colspan="2" align="right">

<? if ($bIsUpdateMode) { ?>
  <input type="hidden" value="update" name="FormAction"/>
  <input type="submit" value="Update" onclick="document.ReservationRecord.FormAction.value = 'update';">
  <input type="submit" value="Delete" onclick="document.ReservationRecord.FormAction.value = 'delete';">
<? } ?>
  <input type="submit" value="Cancel" onclick="document.ReservationRecord.FormAction.value = 'cancel';">
  <input type="hidden" name="FormName" value="ReservationRecord">
  
  <input type="hidden" name="PK_order_id" value="<?= $porder_id ?>">  
  <input type="hidden" name="order_id" value="<?= tohtml($fldorder_id)?>">
  <input type="hidden" name="member_id" value="<?= tohtml($fldmember_id)?>">
  </td></tr>
  </form>
  </table>
<?
  


//-------------------------------
// ReservationRecord Close Event begin
// ReservationRecord Close Event end
//-------------------------------

//-------------------------------
// ReservationRecord Show end
//-------------------------------
}
//===============================
?>