<?php
/*********************************************************************************
 *       Filename: MembersInfo.php
 *       PHP 4.0 build 11/30/2001
 *********************************************************************************/

//-------------------------------
// MembersInfo CustomIncludes begin

include ("./common.php");
include ("./Header.php");
include ("./Footer.php");

// MembersInfo CustomIncludes end
//-------------------------------

session_start();

//===============================
// Save Page and File Name available into variables
//-------------------------------
$sFileName = "MembersInfo.php";
//===============================


//===============================
// MembersInfo PageSecurity begin
check_security(2);
// MembersInfo PageSecurity end
//===============================

//===============================
// MembersInfo Open Event begin
// MembersInfo Open Event end
//===============================

//===============================
// MembersInfo OpenAnyPage Event start
// MembersInfo OpenAnyPage Event end
//===============================

//===============================
//Save the name of the form and type of action into the variables
//-------------------------------
$sAction = get_param("FormAction");
$sForm = get_param("FormName");
//===============================

// MembersInfo Show begin

//===============================
// Perform the form's action
//-------------------------------
// Initialize error variables
//-------------------------------
$sRecordErr = "";

//-------------------------------
// Select the FormAction
//-------------------------------
switch ($sForm) {
  case "Record":
    Record_action($sAction);
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
<?php Record_show() ?>
    
   </td>
  </tr>
 </table>
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

// MembersInfo Show end

//===============================
// MembersInfo Close Event begin
// MembersInfo Close Event end
//===============================
//********************************************************************************


//===============================
// Action of the Record Form
//-------------------------------
function Record_action($sAction)
{
//-------------------------------
// Initialize variables  
//-------------------------------
  global $db;
  
  global $sForm;
  global $sRecordErr;
  global $styles;
  $bExecSQL = true;
  $sActionFileName = "";
  $sWhere = "";
  $bErr = false;
  $pPKmember_id = "";
//-------------------------------

//-------------------------------
// Record Action begin
//-------------------------------
  $sActionFileName = "AdminMenu.php";

//-------------------------------
// Load all form fields into variables
//-------------------------------
//-------------------------------
// Record BeforeExecute Event begin
// Record BeforeExecute Event end
//-------------------------------

//-------------------------------
// Execute SQL statement
//-------------------------------
  if(strlen($sRecordErr)) return;
  if($bExecSQL)
    $db->query($sSQL);
  header("Location: " . $sActionFileName);

//-------------------------------
// Record Action end
//-------------------------------
}

//===============================
// Display Record Form
//-------------------------------
function Record_show()
{
  global $db;
  
  global $sAction;
  global $sForm;
  global $sFileName;
  global $sRecordErr;
  global $styles;
  
  $fldmember_id = "";
  $fldmember_login = "";
  $fldmember_level = "";
  $fldname = "";
  $fldlast_name = "";
  $fldemail = "";
  $fldphone = "";
  $fldaddress = "";
  $fldnotes = "";
//-------------------------------
// Record Show begin
//-------------------------------
  $sFormTitle = "Member Info";
  $sWhere = "";
  $bPK = true;

?>
   
   <table style="width:100%">
   <form method="POST" action="<?= $sFileName ?>" name="Record">
   <tr><td style="background-color: #336699; text-align: Center; border-style: outset; border-width: 1" colspan="2"><font style="font-size: 10pt; color: #FFFFFF; font-weight: bold"><?=$sFormTitle?></font></td></tr>
   <? if ($sRecordErr) { ?>
		<tr><td style="background-color: #FFFFFF; border-width: 1" colspan="2"><font style="font-size: 10pt; color: #000000"><?= $sRecordErr ?></font></td></tr>
	 <? } ?>
<? 

//-------------------------------
// Load primary key and form parameters
//-------------------------------
  if($sRecordErr == "")
  {
    $pmember_id = get_param("member_id");
  }
  else
  {
    $fldmember_id = strip(get_param("member_id"));
    $pmember_id = get_param("PK_member_id");
  }
//-------------------------------

//-------------------------------
// Load all form fields

//-------------------------------

//-------------------------------
// Build WHERE statement
//-------------------------------
  
  if( !strlen($pmember_id)) $bPK = false;
  
  $sWhere .= "member_id=" . tosql($pmember_id, "Number");
//-------------------------------
//-------------------------------
// Record Open Event begin
// Record Open Event end
//-------------------------------

//-------------------------------
// Build SQL statement and execute query
//-------------------------------
  $sSQL = "select * from members where " . $sWhere;
  // Execute SQL statement
  $db->query($sSQL);
  $bIsUpdateMode = ($bPK && !($sAction == "insert" && $sForm == "Record") && $db->next_record());
//-------------------------------

//-------------------------------
// Load all fields into variables from recordset or input parameters
//-------------------------------
  if($bIsUpdateMode)
  {
    $fldaddress = $db->f("address");
    $fldemail = $db->f("email");
    $fldname = $db->f("first_name");
    $fldlast_name = $db->f("last_name");
    $fldmember_id = $db->f("member_id");
    $fldmember_level = $db->f("member_level");
    $fldmember_login_URLLink = "MembersRecord.php";
    $fldmember_login_member_id = $db->f("member_id");
    $fldmember_login = $db->f("member_login");
    $fldnotes = $db->f("notes");
    $fldphone = $db->f("phone");
//-------------------------------
// Record ShowEdit Event begin
// Record ShowEdit Event end
//-------------------------------
  }
  else
  {
//-------------------------------
// Record ShowInsert Event begin
// Record ShowInsert Event end
//-------------------------------
  }
//-------------------------------
// Record Show Event begin
// Record Show Event end
//-------------------------------

//-------------------------------
// Show form field
//-------------------------------
    ?>
      <tr>
       <td style="background-color: #FFEAC5; border-style: inset; border-width: 0">
         <font style="font-size: 10pt; color: #000000">Username</font>
       </td>
       <td style="background-color: #FFFFFF; border-width: 1">
         <font style="font-size: 10pt; color: #000000"><a href="<?=$fldmember_login_URLLink?>?member_id=<?=$fldmember_login_member_id?>&<?= $transit_params ?>"><font style="font-size: 10pt; color: #000000"><?=$fldmember_login?></font></a>&nbsp;</font>
       </td>
     </tr>
      <tr>
       <td style="background-color: #FFEAC5; border-style: inset; border-width: 0">
         <font style="font-size: 10pt; color: #000000">Level</font>
       </td>
       <td style="background-color: #FFFFFF; border-width: 1">
         <font style="font-size: 10pt; color: #000000">
      <?= tohtml($fldmember_level) ?>&nbsp;</font>
       </td>
     </tr>
      <tr>
       <td style="background-color: #FFEAC5; border-style: inset; border-width: 0">
         <font style="font-size: 10pt; color: #000000">First Name</font>
       </td>
       <td style="background-color: #FFFFFF; border-width: 1">
         <font style="font-size: 10pt; color: #000000">
      <?= tohtml($fldname) ?>&nbsp;</font>
       </td>
     </tr>
      <tr>
       <td style="background-color: #FFEAC5; border-style: inset; border-width: 0">
         <font style="font-size: 10pt; color: #000000">Last Name</font>
       </td>
       <td style="background-color: #FFFFFF; border-width: 1">
         <font style="font-size: 10pt; color: #000000">
      <?= tohtml($fldlast_name) ?>&nbsp;</font>
       </td>
     </tr>
      <tr>
       <td style="background-color: #FFEAC5; border-style: inset; border-width: 0">
         <font style="font-size: 10pt; color: #000000">Email</font>
       </td>
       <td style="background-color: #FFFFFF; border-width: 1">
         <font style="font-size: 10pt; color: #000000">
      <?= tohtml($fldemail) ?>&nbsp;</font>
       </td>
     </tr>
      <tr>
       <td style="background-color: #FFEAC5; border-style: inset; border-width: 0">
         <font style="font-size: 10pt; color: #000000">Phone</font>
       </td>
       <td style="background-color: #FFFFFF; border-width: 1">
         <font style="font-size: 10pt; color: #000000">
      <?= tohtml($fldphone) ?>&nbsp;</font>
       </td>
     </tr>
      <tr>
       <td style="background-color: #FFEAC5; border-style: inset; border-width: 0">
         <font style="font-size: 10pt; color: #000000">Address</font>
       </td>
       <td style="background-color: #FFFFFF; border-width: 1">
         <font style="font-size: 10pt; color: #000000">
      <?= tohtml($fldaddress) ?>&nbsp;</font>
       </td>
     </tr>
      <tr>
       <td style="background-color: #FFEAC5; border-style: inset; border-width: 0">
         <font style="font-size: 10pt; color: #000000">Notes</font>
       </td>
       <td style="background-color: #FFFFFF; border-width: 1">
         <font style="font-size: 10pt; color: #000000">
      <?= tohtml($fldnotes) ?>&nbsp;</font>
       </td>
     </tr>
    <tr><td colspan="2" align="right">

  <input type="hidden" name="FormName" value="Record">
  
  <input type="hidden" name="PK_member_id" value="<?= $pmember_id ?>">  
  <input type="hidden" name="member_id" value="<?= tohtml($fldmember_id)?>">
  </td></tr>
  </form>
  </table>
<?
  


//-------------------------------
// Record Close Event begin
// Record Close Event end
//-------------------------------

//-------------------------------
// Record Show end
//-------------------------------
}
//===============================

//===============================
// Display Grid Form
//-------------------------------
function Orders_show()
{
//-------------------------------
// Initialize variables  
//-------------------------------
  
  
  global $db;
  global $sOrdersErr;
  global $sFileName;
  global $styles;
  $sWhere = "";
  $sOrder = "";
  $sSQL = "";
  $sFormTitle = "Reservation";
  $HasParam = false;
  $bReq = true;
  $iRecordsPerPage = 20;
  $iCounter = 0;
  $iSort = "";
  $iSorted = "";
  $sDirection = "";
  $sSortParams = "";

  $transit_params = "member_id=" . tourl(get_param("member_id")) . "&";
  $form_params = "member_id=" . tourl(get_param("member_id")) . "&";

//-------------------------------
// Build ORDER BY statement
//-------------------------------
  $iSort = get_param("FormOrders_Sorting");
  $iSorted = get_param("FormOrders_Sorted");
  if(!$iSort)
  {
    $form_sorting = "";
  }
  else
  {
    if($iSort == $iSorted)
    {
      $form_sorting = "";
      $sDirection = " DESC";
      $sSortParams = "FormOrders_Sorting=" . $iSort . "&FormOrders_Sorted=" . $iSort . "&";
    }
    else
    {
      $form_sorting = $iSort;
      $sDirection = " ASC";
      $sSortParams = "FormOrders_Sorting=" . $iSort . "&FormOrders_Sorted=" . "&";
    }
    if ($iSort == 1) $sOrder = " order by o.order_id" . $sDirection;
    if ($iSort == 2) $sOrder = " order by i.name" . $sDirection;
    if ($iSort == 3) $sOrder = " order by o.quantity" . $sDirection;
  }

//-------------------------------
// HTML column headers
//-------------------------------
?>
     <table style="width:100%">
      <tr>
       <td style="background-color: #336699; text-align: Center; border-style: outset; border-width: 1" colspan="3"><a name="Orders"><font style="font-size: 10pt; color: #FFFFFF; font-weight: bold"><?=$sFormTitle?></font></a></td>
      </tr>
      <tr>
       <td style="background-color: #FFFFFF; border-style: inset; border-width: 0"><a href="<?=$sFileName?>?<?=$form_params?>FormOrders_Sorting=1&FormOrders_Sorted=<?=$form_sorting?>&"><font style="font-size: 10pt; color: #CE7E00; font-weight: bold">Reservation #</font></a></td>
       <td style="background-color: #FFFFFF; border-style: inset; border-width: 0"><a href="<?=$sFileName?>?<?=$form_params?>FormOrders_Sorting=2&FormOrders_Sorted=<?=$form_sorting?>&"><font style="font-size: 10pt; color: #CE7E00; font-weight: bold">Vehicle #</font></a></td>
       <td style="background-color: #FFFFFF; border-style: inset; border-width: 0"><a href="<?=$sFileName?>?<?=$form_params?>FormOrders_Sorting=3&FormOrders_Sorted=<?=$form_sorting?>&"><font style="font-size: 10pt; color: #CE7E00; font-weight: bold">No. of  Hour(s)</font></a></td>
      </tr>
<?
  
//-------------------------------
// Build WHERE statement
//-------------------------------
  $pmember_id = get_param("member_id");
  if(is_number($pmember_id) && strlen($pmember_id))
    $pmember_id = tosql($pmember_id, "Number");
  else 
    $pmember_id = "";

  if(strlen($pmember_id))
  {
    $HasParam = true;
    $sWhere = $sWhere . "o.member_id=" . $pmember_id;
  }
  else
  {
    $bReq = false;
  }


  if($HasParam)
    $sWhere = " AND (" . $sWhere . ")";


//-------------------------------
// Build base SQL statement
//-------------------------------
  $sSQL = "select o.item_id as o_item_id, " . 
    "o.member_id as o_member_id, " . 
    "o.order_id as o_order_id, " . 
    "o.quantity as o_quantity, " . 
    "i.item_id as i_item_id, " . 
    "i.name as i_name " . 
    " from orders o, items i" . 
    " where i.item_id=o.item_id  ";
//-------------------------------

//-------------------------------
// Orders Open Event begin
// Orders Open Event end
//-------------------------------

//-------------------------------
// Assemble full SQL statement
//-------------------------------
  $sSQL .= $sWhere . $sOrder;
//-------------------------------

  

//-------------------------------
// Process if form has all required parameters
//-------------------------------
  if(!$bReq)
  {
?>
     <tr>
      <td colspan="3" style="background-color: #FFFFFF; border-width: 1"><font style="font-size: 10pt; color: #000000">No records</font></td>
     </tr>
    </table>
<?
    return;
  }
//-------------------------------

//-------------------------------
// Execute SQL statement
//-------------------------------
  $db->query($sSQL);
  $next_record = $db->next_record();
//-------------------------------
// Process empty recordset
//-------------------------------
  if(!$next_record)
  {
?>
     <tr>
      <td colspan="3" style="background-color: #FFFFFF; border-width: 1"><font style="font-size: 10pt; color: #000000">No records</font></td>
     </tr>
<?
   
?>
  </table>
<?

    return;
  }

//-------------------------------

//-------------------------------
// Initialize page counter and records per page
//-------------------------------
  $iRecordsPerPage = 20;
  $iCounter = 0;
//-------------------------------

//-------------------------------
// Display grid based on recordset
//-------------------------------
  while($next_record  && $iCounter < $iRecordsPerPage)
  {
//-------------------------------
// Create field variables based on database fields
//-------------------------------
    $flditem_id = $db->f("i_name");
    $fldorder_id_URLLink = "OrdersRecord.php";
    $fldorder_id_order_id = $db->f("o_order_id");
    $fldorder_id = $db->f("o_order_id");
    $fldquantity = $db->f("o_quantity");
    $next_record = $db->next_record();
    
//-------------------------------
// Orders Show begin
//-------------------------------

//-------------------------------
// Orders Show Event begin
// Orders Show Event end
//-------------------------------


//-------------------------------
// Process the HTML controls
//-------------------------------
?>
      <tr>
       <td style="background-color: #FFFFFF; border-width: 1"><font style="font-size: 10pt; color: #000000"><a href="<?=$fldorder_id_URLLink?>?order_id=<?=$fldorder_id_order_id?>&<?= $transit_params ?>"><font style="font-size: 10pt; color: #000000"><?=$fldorder_id?></font></a>&nbsp;</font></td>
       <td style="background-color: #FFFFFF; border-width: 1"><font style="font-size: 10pt; color: #000000">
      <?= tohtml($flditem_id) ?>&nbsp;</font></td>
       <td style="background-color: #FFFFFF; border-width: 1"><font style="font-size: 10pt; color: #000000">
      <?= tohtml($fldquantity) ?>&nbsp;</font></td>
      </tr><?
//-------------------------------
// Orders Show end
//-------------------------------

//-------------------------------
// Move to the next record and increase record counter
//-------------------------------
    
    $iCounter++;
  }

 

//-------------------------------
// Finish form processing
//-------------------------------
  ?>
    </table>
  <?


//-------------------------------
// Orders Close Event begin
// Orders Close Event end
//-------------------------------
}
//===============================

?>