<?php
/*********************************************************************************
 *       Filename: OrdersRecord.php
 *       PHP 4.0 build 11/30/2001
 *********************************************************************************/

//-------------------------------
// OrdersRecord CustomIncludes begin

include ("./common.php");
include ("./Header.php");
include ("./Footer.php");

// OrdersRecord CustomIncludes end
//-------------------------------

session_start();

//===============================
// Save Page and File Name available into variables
//-------------------------------
$sFileName = "OrdersRecord.php";
//===============================


//===============================
// OrdersRecord PageSecurity begin
check_security(2);
// OrdersRecord PageSecurity end
//===============================

//===============================
// OrdersRecord Open Event begin
// OrdersRecord Open Event end
//===============================

//===============================
// OrdersRecord OpenAnyPage Event start
// OrdersRecord OpenAnyPage Event end
//===============================

//===============================
//Save the name of the form and type of action into the variables
//-------------------------------
$sAction = get_param("FormAction");
$sForm = get_param("FormName");
//===============================

// OrdersRecord Show begin

//===============================
// Perform the form's action
//-------------------------------
// Initialize error variables
//-------------------------------
$sOrdersErr = "";

//-------------------------------
// Select the FormAction
//-------------------------------
switch ($sForm) {
  case "Orders":
    Orders_action($sAction);
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
<?php Orders_show() ?>
    
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

// OrdersRecord Show end

//===============================
// OrdersRecord Close Event begin
// OrdersRecord Close Event end
//===============================
//********************************************************************************


//===============================
// Action of the Record Form
//-------------------------------
function Orders_action($sAction)
{
//-------------------------------
// Initialize variables  
//-------------------------------
  global $db;
  
  global $sForm;
  global $sOrdersErr;
  global $styles;
  $bExecSQL = true;
  $sActionFileName = "";
  $sParams = "?";
  $sWhere = "";
  $bErr = false;
  $pPKorder_id = "";
  $fldmember_id = "";
  $flditem_id = "";
  $fldquantity = "";
//-------------------------------

//-------------------------------
// Orders Action begin
//-------------------------------
  $sActionFileName = "OrdersGrid.php";
  $sParams .= "item_id=" . urlencode(get_param("Trn_item_id")) . "&";
  $sParams .= "member_id=" . urlencode(get_param("Trn_member_id"));

//-------------------------------
// CANCEL action
//-------------------------------
  if($sAction == "cancel")
  {

//-------------------------------
// Orders BeforeCancel Event begin
// Orders BeforeCancel Event end
//-------------------------------
    header("Location: " . $sActionFileName . $sParams);
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
  $fldmember_id = get_param("member_id");
  $flditem_id = get_param("item_id");
  $fldquantity = get_param("quantity");

//-------------------------------
// Validate fields
//-------------------------------
  if($sAction == "insert" || $sAction == "update") 
  {
    if(!strlen($fldmember_id))
      $sOrdersErr .= "The value in field Member is required.<br>";
    
    if(!strlen($flditem_id))
      $sOrdersErr .= "The value in field Vehicle # is required.<br>";
    
    if(!strlen($fldquantity))
      $sOrdersErr .= "The value in field No. of Hour(s) is required.<br>";
    
    if(!is_number($fldmember_id))
      $sOrdersErr .= "The value in field Member is incorrect.<br>";
    
    if(!is_number($flditem_id))
      $sOrdersErr .= "The value in field Vehicle # is incorrect.<br>";
    
    if(!is_number($fldquantity))
      $sOrdersErr .= "The value in field No. of Hour(s) is incorrect.<br>";
    
//-------------------------------
// Orders Check Event begin
// Orders Check Event end
//-------------------------------
    if(strlen($sOrdersErr)) return;
  }
//-------------------------------


//-------------------------------
// Create SQL statement
//-------------------------------
  switch(strtolower($sAction)) 
  {
    case "insert":
//-------------------------------
// Orders Insert Event begin
// Orders Insert Event end
//-------------------------------
        $sSQL = "insert into orders (" . 
          "member_id," . 
          "item_id," . 
          "quantity)" . 
          " values (" . 
          tosql($fldmember_id, "Number") . "," . 
          tosql($flditem_id, "Number") . "," . 
          tosql($fldquantity, "Number") . 
          ")";
    break;
    case "update":

//-------------------------------
// Orders Update Event begin
// Orders Update Event end
//-------------------------------
        $sSQL = "update orders set " .
          "member_id=" . tosql($fldmember_id, "Number") .
          ",item_id=" . tosql($flditem_id, "Number") .
          ",quantity=" . tosql($fldquantity, "Number");
        $sSQL .= " where " . $sWhere;
    break;
    case "delete":
//-------------------------------
// Orders Delete Event begin
// Orders Delete Event end
//-------------------------------
        $sSQL = "delete from orders where " . $sWhere;
    break;
  }
//-------------------------------
//-------------------------------
// Orders BeforeExecute Event begin
// Orders BeforeExecute Event end
//-------------------------------

//-------------------------------
// Execute SQL statement
//-------------------------------
  if(strlen($sOrdersErr)) return;
  if($bExecSQL)
    $db->query($sSQL);
  header("Location: " . $sActionFileName . $sParams);

//-------------------------------
// Orders Action end
//-------------------------------
}

//===============================
// Display Record Form
//-------------------------------
function Orders_show()
{
  global $db;
  
  global $sAction;
  global $sForm;
  global $sFileName;
  global $sOrdersErr;
  global $styles;
  
  $fldorder_id = "";
  $fldmember_id = "";
  $flditem_id = "";
  $fldquantity = "";
//-------------------------------
// Orders Show begin
//-------------------------------
  $sFormTitle = "Orders";
  $sWhere = "";
  $bPK = true;

?>
   
   <table style="width:100%">
   <form method="POST" action="<?= $sFileName ?>" name="Orders">
   <tr><td style="background-color: #336699; text-align: Center; border-style: outset; border-width: 1" colspan="2"><font style="font-size: 10pt; color: #FFFFFF; font-weight: bold"><?=$sFormTitle?></font></td></tr>
   <? if ($sOrdersErr) { ?>
		<tr><td style="background-color: #FFFFFF; border-width: 1" colspan="2"><font style="font-size: 10pt; color: #000000"><?= $sOrdersErr ?></font></td></tr>
	 <? } ?>
<? 

//-------------------------------
// Load primary key and form parameters
//-------------------------------
  if($sOrdersErr == "")
  {
    $flditem_id = get_param("item_id");
    $fldmember_id = get_param("member_id");
    $fldorder_id = get_param("order_id");
    $trn_item_id = get_param("item_id");
    $trn_member_id = get_param("member_id");
    $porder_id = get_param("order_id");
  }
  else
  {
    $fldmember_id = strip(get_param("member_id"));
    $flditem_id = strip(get_param("item_id"));
    $fldquantity = strip(get_param("quantity"));
    $trn_item_id = get_param("Trn_item_id");
    $trn_member_id = get_param("Trn_member_id");
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
// Orders Open Event begin
// Orders Open Event end
//-------------------------------

//-------------------------------
// Build SQL statement and execute query
//-------------------------------
  $sSQL = "select * from orders where " . $sWhere;
  // Execute SQL statement
  $db->query($sSQL);
  $bIsUpdateMode = ($bPK && !($sAction == "insert" && $sForm == "Orders") && $db->next_record());
//-------------------------------

//-------------------------------
// Load all fields into variables from recordset or input parameters
//-------------------------------
  if($bIsUpdateMode)
  {
    $fldorder_id = $db->f("order_id");
//-------------------------------
// Load data from recordset when form displayed first time
//-------------------------------
    if($sOrdersErr == "") 
    {
      $fldmember_id = $db->f("member_id");
      $flditem_id = $db->f("item_id");
      $fldquantity = $db->f("quantity");
    }
//-------------------------------
// Orders ShowEdit Event begin
// Orders ShowEdit Event end
//-------------------------------
  }
  else
  {
    if($sOrdersErr == "")
    {
      $fldorder_id = tohtml(get_param("order_id"));
      $fldmember_id = tohtml(get_param("member_id"));
      $flditem_id = tohtml(get_param("item_id"));
    }
//-------------------------------
// Orders ShowInsert Event begin
// Orders ShowInsert Event end
//-------------------------------
  }
//-------------------------------
// Orders Show Event begin
// Orders Show Event end
//-------------------------------

//-------------------------------
// Show form field
//-------------------------------
    ?>
      <tr>
       <td style="background-color: #FFEAC5; border-style: inset; border-width: 0">
         <font style="font-size: 10pt; color: #000000">Reservation #</font>
       </td>
       <td style="background-color: #FFFFFF; border-width: 1">
         <font style="font-size: 10pt; color: #000000">
      <?= tohtml($fldorder_id) ?>&nbsp;</font>
       </td>
     </tr>
      <tr>
       <td style="background-color: #FFEAC5; border-style: inset; border-width: 0">
         <font style="font-size: 10pt; color: #000000">Member</font>
       </td>
       <td style="background-color: #FFFFFF; border-width: 1">
         <font style="font-size: 10pt; color: #000000"><select size="1" name="member_id">
<?
    $lookup_member_id = db_fill_array("select member_id, member_login from members order by 2");

    if(is_array($lookup_member_id))
    {
      reset($lookup_member_id);
      while(list($key, $value) = each($lookup_member_id))
      {
        if($key == $fldmember_id)
          $option="<option SELECTED value=\"$key\">$value";
        else 
          $option="<option value=\"$key\">$value";
        echo $option;
      }
    }
    
?></select></font>
       </td>
     </tr>
      <tr>
       <td style="background-color: #FFEAC5; border-style: inset; border-width: 0">
         <font style="font-size: 10pt; color: #000000">Vehicle #</font>
       </td>
       <td style="background-color: #FFFFFF; border-width: 1">
         <font style="font-size: 10pt; color: #000000"><select size="1" name="item_id">
<?
    $lookup_item_id = db_fill_array("select item_id, name from items order by 2");

    if(is_array($lookup_item_id))
    {
      reset($lookup_item_id);
      while(list($key, $value) = each($lookup_item_id))
      {
        if($key == $flditem_id)
          $option="<option SELECTED value=\"$key\">$value";
        else 
          $option="<option value=\"$key\">$value";
        echo $option;
      }
    }
    
?></select></font>
       </td>
     </tr>
      <tr>
       <td style="background-color: #FFEAC5; border-style: inset; border-width: 0">
         <font style="font-size: 10pt; color: #000000">No. of Hour(s)</font>
       </td>
       <td style="background-color: #FFFFFF; border-width: 1">
         <font style="font-size: 10pt; color: #000000"><input type="text" name="quantity" maxlength="10" value="<?= tohtml($fldquantity) ?>" size="10" ></font>
       </td>
     </tr>
    <tr><td colspan="2" align="right">
<? if (!$bIsUpdateMode) { ?>
   <input type="hidden" value="insert" name="FormAction">
   <input type="submit" value="Insert" onclick="document.Orders.FormAction.value = 'insert';">
<? } ?>
<? if ($bIsUpdateMode) { ?>
  <input type="hidden" value="update" name="FormAction"/>
  <input type="submit" value="Update" onclick="document.Orders.FormAction.value = 'update';">
  <input type="submit" value="Delete" onclick="document.Orders.FormAction.value = 'delete';">
<? } ?>
  <input type="submit" value="Cancel" onclick="document.Orders.FormAction.value = 'cancel';">
  <input type="hidden" name="FormName" value="Orders">
  
  <input type="hidden" name="Trn_item_id" value="<?= $trn_item_id ?>">
  <input type="hidden" name="Trn_member_id" value="<?= $trn_member_id ?>">
  <input type="hidden" name="PK_order_id" value="<?= $porder_id ?>">  
  </td></tr>
  </form>
  </table>
<?
  


//-------------------------------
// Orders Close Event begin
// Orders Close Event end
//-------------------------------

//-------------------------------
// Orders Show end
//-------------------------------
}
//===============================
?>