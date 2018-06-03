<?php
/*********************************************************************************
 *       Filename: Reservation.php
 *       PHP 4.0 build 11/30/2001
 *********************************************************************************/

//-------------------------------
// Reservation CustomIncludes begin

include ("./common.php");
include ("./Header.php");
include ("./Footer.php");

// Reservation CustomIncludes end
//-------------------------------

session_start();

//===============================
// Save Page and File Name available into variables
//-------------------------------
$sFileName = "Reservation.php";
//===============================


//===============================
// Reservation PageSecurity begin
check_security(1);
// Reservation PageSecurity end
//===============================

//===============================
// Reservation Open Event begin
// Reservation Open Event end
//===============================

//===============================
// Reservation OpenAnyPage Event start
// Reservation OpenAnyPage Event end
//===============================

//===============================
//Save the name of the form and type of action into the variables
//-------------------------------
$sAction = get_param("FormAction");
$sForm = get_param("FormName");
//===============================

// Reservation Show begin

//===============================
// Perform the form's action
//-------------------------------
// Initialize error variables
//-------------------------------
$sMemberErr = "";

//-------------------------------
// Select the FormAction
//-------------------------------
switch ($sForm) {
  case "Member":
    Member_action($sAction);
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
<?php Member_show() ?>
    </td>
   <td valign="top">
<?php Items_show() ?>
    
<?php Total_show() ?>
    
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

// Reservation Show end

//===============================
// Reservation Close Event begin
// Reservation Close Event end
//===============================
//********************************************************************************


//===============================
// Display Grid Form
//-------------------------------
function Items_show()
{
//-------------------------------
// Initialize variables  
//-------------------------------
  
  
  global $db;
  global $sItemsErr;
  global $sFileName;
  global $styles;
  $sWhere = "";
  $sOrder = "";
  $sSQL = "";
  $sFormTitle = "Vehicle Items";
  $HasParam = false;
  $bReq = true;
  $iRecordsPerPage = 20;
  $iCounter = 0;

  $transit_params = "";
  $form_params = "";

//-------------------------------
// HTML column headers
//-------------------------------
?>
     <table style="width:100%">
      <tr>
       <td style="background-color: #336699; text-align: Center; border-style: outset; border-width: 1" colspan="6"><a name="Items"><font style="font-size: 10pt; color: #FFFFFF; font-weight: bold"><?=$sFormTitle?></font></a></td>
      </tr>
      <tr>
       <td style="background-color: #FFFFFF; border-style: inset; border-width: 0"><font style="font-size: 10pt; color: #CE7E00; font-weight: bold">Details</td>
       <td style="background-color: #FFFFFF; border-style: inset; border-width: 0"><font style="font-size: 10pt; color: #CE7E00; font-weight: bold">Reservation #</td>
       <td style="background-color: #FFFFFF; border-style: inset; border-width: 0"><font style="font-size: 10pt; color: #CE7E00; font-weight: bold">Vehicle</td>
       <td style="background-color: #FFFFFF; border-style: inset; border-width: 0"><font style="font-size: 10pt; color: #CE7E00; font-weight: bold">Rate</td>
       <td style="background-color: #FFFFFF; border-style: inset; border-width: 0"><font style="font-size: 10pt; color: #CE7E00; font-weight: bold">No. of Hour(s)</td>
       <td style="background-color: #FFFFFF; border-style: inset; border-width: 0"><font style="font-size: 10pt; color: #CE7E00; font-weight: bold">Total</td>
      </tr>
<?
  
//-------------------------------
// Build WHERE statement
//-------------------------------
  $pUserID = get_session("UserID");
  if(is_number($pUserID) && strlen($pUserID))
    $pUserID = tosql($pUserID, "Number");
  else 
    $pUserID = "";

  if(strlen($pUserID))
  {
    $HasParam = true;
    $sWhere = $sWhere . "member_id=" . $pUserID;
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
  $sSQL = "SELECT order_id, name, if(orders.reservation_type <> 'Out of Town', 250, price), quantity, member_id, quantity * if(orders.reservation_type <> 'Out of Town', 250, price) as sub_total FROM items, orders WHERE orders.item_id=items.item_id";
  $sOrder = " ORDER BY order_id";
//-------------------------------

//-------------------------------
// Items Open Event begin
// Items Open Event end
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
      <td colspan="6" style="background-color: #FFFFFF; border-width: 1"><font style="font-size: 10pt; color: #000000">No records</font></td>
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
      <td colspan="6" style="background-color: #FFFFFF; border-width: 1"><font style="font-size: 10pt; color: #000000">No records</font></td>
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
    $fldField1_URLLink = "ReservationRecord.php";
    $fldField1_order_id = $db->f("order_id");
    $fldprice = $db->f("if(orders.reservation_type <> 'Out of Town', 250, price)");
    $flditem_id = $db->f("name");
    $fldorder_id = $db->f("order_id");
    $fldquantity = $db->f("quantity");
    $fldsub_total = $db->f("sub_total");
    $fldField1= "Details";
    $next_record = $db->next_record();
    
//-------------------------------
// Items Show begin
//-------------------------------

//-------------------------------
// Items Show Event begin
// Items Show Event end
//-------------------------------


//-------------------------------
// Process the HTML controls
//-------------------------------
?>
      <tr>
       <td style="background-color: #FFFFFF; border-width: 1"><font style="font-size: 10pt; color: #000000"><a href="<?=$fldField1_URLLink?>?order_id=<?=$fldField1_order_id?>&<?= $transit_params ?>"><font style="font-size: 10pt; color: #000000"><?=$fldField1?></font></a>&nbsp;</font></td>
       <td style="background-color: #FFFFFF; border-width: 1"><font style="font-size: 10pt; color: #000000">
      <?= tohtml($fldorder_id) ?>&nbsp;</font></td>
       <td style="background-color: #FFFFFF; border-width: 1"><font style="font-size: 10pt; color: #000000">
      <?= tohtml($flditem_id) ?>&nbsp;</font></td>
       <td style="background-color: #FFFFFF; border-width: 1"><font style="font-size: 10pt; color: #000000">
      <?= tohtml($fldprice) ?>&nbsp;</font></td>
       <td style="background-color: #FFFFFF; border-width: 1"><font style="font-size: 10pt; color: #000000">
      <?= tohtml($fldquantity) ?>&nbsp;</font></td>
       <td style="background-color: #FFFFFF; border-width: 1"><font style="font-size: 10pt; color: #000000">
      <?= tohtml($fldsub_total) ?>&nbsp;</font></td>
      </tr><?
//-------------------------------
// Items Show end
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
// Items Close Event begin
// Items Close Event end
//-------------------------------
}
//===============================


//===============================
// Display Grid Form
//-------------------------------
function Total_show()
{
//-------------------------------
// Initialize variables  
//-------------------------------
  
  
  global $db;
  global $sTotalErr;
  global $sFileName;
  global $styles;
  $sWhere = "";
  $sOrder = "";
  $sSQL = "";
  $sFormTitle = "";
  $HasParam = false;
  $bReq = true;
  $iRecordsPerPage = 20;
  $iCounter = 0;

  $transit_params = "";
  $form_params = "";

//-------------------------------
// HTML column headers
//-------------------------------
?>
     <table style="width:100%">
      <tr>
       <td style="background-color: #FFFFFF; border-style: inset; border-width: 0"><font style="font-size: 10pt; color: #CE7E00; font-weight: bold">Total</td>
      </tr>
<?
  
//-------------------------------
// Build WHERE statement
//-------------------------------
  $pUserID = get_session("UserID");
  if(is_number($pUserID) && strlen($pUserID))
    $pUserID = tosql($pUserID, "Number");
  else 
    $pUserID = "";

  if(strlen($pUserID))
  {
    $HasParam = true;
    $sWhere = $sWhere . "member_id=" . $pUserID;
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
  $sSQL = "SELECT member_id, sum(quantity * if(orders.reservation_type <> 'Out of Town', 250, price)) as sub_total FROM items, orders WHERE orders.item_id=items.item_id";
  $sOrder = " GROUP BY member_id";
//-------------------------------

//-------------------------------
// Total Open Event begin
// Total Open Event end
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
      <td colspan="1" style="background-color: #FFFFFF; border-width: 1"><font style="font-size: 10pt; color: #000000">No records</font></td>
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
      <td colspan="1" style="background-color: #FFFFFF; border-width: 1"><font style="font-size: 10pt; color: #000000">No records</font></td>
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
    $fldsub_total = $db->f("sub_total");
    $next_record = $db->next_record();
    
//-------------------------------
// Total Show begin
//-------------------------------

//-------------------------------
// Total Show Event begin
// Total Show Event end
//-------------------------------


//-------------------------------
// Process the HTML controls
//-------------------------------
?>
      <tr>
       <td style="background-color: #FFFFFF; border-width: 1"><font style="font-size: 10pt; color: #000000">
      <?= tohtml($fldsub_total) ?>&nbsp;</font></td>
      </tr><?
//-------------------------------
// Total Show end
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
// Total Close Event begin
// Total Close Event end
//-------------------------------
}
//===============================


//===============================
// Action of the Record Form
//-------------------------------
function Member_action($sAction)
{
//-------------------------------
// Initialize variables  
//-------------------------------
  global $db;
  
  global $sForm;
  global $sMemberErr;
  global $styles;
  $bExecSQL = true;
  $sActionFileName = "";
  $sParams = "?";
  $sWhere = "";
  $bErr = false;
  $pPKmember_id = "";
//-------------------------------

//-------------------------------
// Member Action begin
//-------------------------------
  $sActionFileName = "AdminMenu.php";
  $sParams .= "UserID=" . urlencode(get_param("Trn_UserID"));

//-------------------------------
// Load all form fields into variables
//-------------------------------
  $fldUserID = get_session("UserID");
//-------------------------------
// Member BeforeExecute Event begin
// Member BeforeExecute Event end
//-------------------------------

//-------------------------------
// Execute SQL statement
//-------------------------------
  if(strlen($sMemberErr)) return;
  if($bExecSQL)
    $db->query($sSQL);
  header("Location: " . $sActionFileName . $sParams);

//-------------------------------
// Member Action end
//-------------------------------
}

//===============================
// Display Record Form
//-------------------------------
function Member_show()
{
  global $db;
  
  global $sAction;
  global $sForm;
  global $sFileName;
  global $sMemberErr;
  global $styles;
  
  $fldmember_id = "";
  $fldmember_login = "";
  $fldname = "";
  $fldlast_name = "";
  $fldaddress = "";
  $fldemail = "";
  $fldphone = "";
//-------------------------------
// Member Show begin
//-------------------------------
  $sFormTitle = "User Information";
  $sWhere = "";
  $bPK = true;

?>
   
   <table style="width:100%">
   <form method="POST" action="<?= $sFileName ?>" name="Member">
   <tr><td style="background-color: #336699; text-align: Center; border-style: outset; border-width: 1" colspan="2"><font style="font-size: 10pt; color: #FFFFFF; font-weight: bold"><?=$sFormTitle?></font></td></tr>
   <? if ($sMemberErr) { ?>
		<tr><td style="background-color: #FFFFFF; border-width: 1" colspan="2"><font style="font-size: 10pt; color: #000000"><?= $sMemberErr ?></font></td></tr>
	 <? } ?>
<? 

//-------------------------------
// Load primary key and form parameters
//-------------------------------
  if($sMemberErr == "")
  {
  }
  else
  {
    $fldmember_id = strip(get_param("member_id"));
  }
//-------------------------------

//-------------------------------
// Load all form fields

//-------------------------------

//-------------------------------
// Build WHERE statement
//-------------------------------
  
  $pmember_id = get_session("UserID");
  if( !strlen($pmember_id)) $bPK = false;
  
  $sWhere .= "member_id=" . tosql($pmember_id, "Number");
//-------------------------------
//-------------------------------
// Member Open Event begin
// Member Open Event end
//-------------------------------

//-------------------------------
// Build SQL statement and execute query
//-------------------------------
  $sSQL = "select * from members where " . $sWhere;
  // Execute SQL statement
  $db->query($sSQL);
  $bIsUpdateMode = ($bPK && !($sAction == "insert" && $sForm == "Member") && $db->next_record());
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
    $fldmember_login_URLLink = "MyInfo.php";
    $fldmember_login = $db->f("member_login");
    $fldphone = $db->f("phone");
//-------------------------------
// Member ShowEdit Event begin
// Member ShowEdit Event end
//-------------------------------
  }
  else
  {
    if($sMemberErr == "")
    {
      $fldmember_id = tohtml(get_session("UserID"));
    }
//-------------------------------
// Member ShowInsert Event begin
// Member ShowInsert Event end
//-------------------------------
  }
//-------------------------------
// Member Show Event begin
// Member Show Event end
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
         <font style="font-size: 10pt; color: #000000"><a href="<?=$fldmember_login_URLLink?>?<?= $transit_params ?>"><font style="font-size: 10pt; color: #000000"><?=$fldmember_login?></font></a>&nbsp;</font>
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
         <font style="font-size: 10pt; color: #000000">Address</font>
       </td>
       <td style="background-color: #FFFFFF; border-width: 1">
         <font style="font-size: 10pt; color: #000000">
      <?= tohtml($fldaddress) ?>&nbsp;</font>
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
    <tr><td colspan="2" align="right">

  <input type="hidden" name="FormName" value="Member">
  
  <input type="hidden" name="Trn_UserID" value="<?= $trn_UserID ?>">
  <input type="hidden" name="PK_member_id" value="<?= $pmember_id ?>">  
  <input type="hidden" name="member_id" value="<?= tohtml($fldmember_id)?>">
  </td></tr>
  </form>
  </table>
<?
  


//-------------------------------
// Member Close Event begin
// Member Close Event end
//-------------------------------

//-------------------------------
// Member Show end
//-------------------------------
}
//===============================
?>