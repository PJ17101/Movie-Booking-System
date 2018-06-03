<?php
/*********************************************************************************
 *       Filename: Registration.php
 *       PHP 4.0 build 11/30/2001
 *********************************************************************************/

//-------------------------------
// Registration CustomIncludes begin

include ("./common.php");
include ("./Header.php");
include ("./Footer.php");

// Registration CustomIncludes end
//-------------------------------

session_start();

//===============================
// Save Page and File Name available into variables
//-------------------------------
$sFileName = "Registration.php";
//===============================


//===============================
// Registration PageSecurity begin
// Registration PageSecurity end
//===============================

//===============================
// Registration Open Event begin
// Registration Open Event end
//===============================

//===============================
// Registration OpenAnyPage Event start
// Registration OpenAnyPage Event end
//===============================

//===============================
//Save the name of the form and type of action into the variables
//-------------------------------
$sAction = get_param("FormAction");
$sForm = get_param("FormName");
//===============================

// Registration Show begin

//===============================
// Perform the form's action
//-------------------------------
// Initialize error variables
//-------------------------------
$sRegErr = "";

//-------------------------------
// Select the FormAction
//-------------------------------
switch ($sForm) {
  case "Reg":
    Reg_action($sAction);
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
<hr color="#800000"><center>
 <table>
  <tr>
   
   <td valign="top">
<?php Reg_show() ?>
    
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

// Registration Show end

//===============================
// Registration Close Event begin
// Registration Close Event end
//===============================
//********************************************************************************


//===============================
// Action of the Record Form
//-------------------------------
function Reg_action($sAction)
{
//-------------------------------
// Initialize variables  
//-------------------------------
  global $db;
  
  global $sForm;
  global $sRegErr;
  global $styles;
  $bExecSQL = true;
  $sActionFileName = "";
  $sWhere = "";
  $bErr = false;
  $pPKmember_id = "";
  $fldmember_login = "";
  $fldmember_password = "";
  $fldmember_password2 = "";
  $fldfirst_name = "";
  $fldlast_name = "";
  $fldemail = "";
  $fldaddress = "";
  $fldphone = "";
  $fldcard_type_id = "";
  $fldcard_number = "";
//-------------------------------

//-------------------------------
// Reg Action begin
//-------------------------------
  $sActionFileName = "Default.php";

//-------------------------------
// CANCEL action
//-------------------------------
  if($sAction == "cancel")
  {

//-------------------------------
// Reg BeforeCancel Event begin
// Reg BeforeCancel Event end
//-------------------------------
    header("Location: " . $sActionFileName);
  }
//-------------------------------


//-------------------------------
// Build WHERE statement
//-------------------------------
  if($sAction == "update" || $sAction == "delete") 
  {
    $pPKmember_id = get_param("PK_member_id");
    if( !strlen($pPKmember_id)) return;
    $sWhere = "member_id=" . tosql($pPKmember_id, "Number");
  }
//-------------------------------


//-------------------------------
// Load all form fields into variables
//-------------------------------
  $fldmember_login = get_param("member_login");
  $fldmember_password = get_param("member_password");
  $fldmember_password2 = get_param("member_password2");
  $fldfirst_name = get_param("first_name");
  $fldlast_name = get_param("last_name");
  $fldemail = get_param("email");
  $fldaddress = get_param("address");
  $fldphone = get_param("phone");
  $fldcard_type_id = get_param("card_type_id");
  $fldcard_number = get_param("card_number");

//-------------------------------
// Validate fields
//-------------------------------
  if($sAction == "insert" || $sAction == "update") 
  {
    if(!strlen($fldmember_login))
      $sRegErr .= "The value in field Username* is required.<br>";
    
    if(!strlen($fldmember_password))
      $sRegErr .= "The value in field Password* is required.<br>";
    
    if(!strlen($fldmember_password2))
      $sRegErr .= "The value in field Confirm Password* is required.<br>";
    
    if(!strlen($fldfirst_name))
      $sRegErr .= "The value in field First Name* is required.<br>";
    
    if(!strlen($fldlast_name))
      $sRegErr .= "The value in field Last Name* is required.<br>";
    
    if(!strlen($fldemail))
      $sRegErr .= "The value in field Email* is required.<br>";
    
    if(!is_number($fldcard_type_id))
      $sRegErr .= "The value in field Credit Card Type is incorrect.<br>";
    
    if(strlen($fldmember_login) )
    {
      $iCount = 0;

      if($sAction == "insert")
        $iCount = get_db_value("SELECT count(*) FROM members WHERE member_login=" . tosql($fldmember_login, "Text"));
      else if($sAction == "update")
        $iCount = get_db_value("SELECT count(*) FROM members WHERE member_login=" . tosql($fldmember_login, "Text") . " and not(" . $sWhere . ")");
      if($iCount > 0)
        $sRegErr .= "The value in field Username* is already in database.<br>";
    }                                                                               
    
//-------------------------------
// Reg Check Event begin
if (get_param("member_password") != get_param("member_password2"))
  $sRegErr .= "\nPassword and Confirm Password fields don't match";
// Reg Check Event end
//-------------------------------
    if(strlen($sRegErr)) return;
  }
//-------------------------------


//-------------------------------
// Create SQL statement
//-------------------------------
  switch(strtolower($sAction)) 
  {
    case "insert":
//-------------------------------
// Reg Insert Event begin
// Reg Insert Event end
//-------------------------------
        $sSQL = "insert into members (" . 
          "member_login," . 
          "member_password," . 
          "first_name," . 
          "last_name," . 
          "email," . 
          "address," . 
          "phone," . 
          "card_type_id," . 
          "card_number)" . 
          " values (" . 
          tosql($fldmember_login, "Text") . "," . 
          tosql($fldmember_password, "Text") . "," . 
          tosql($fldfirst_name, "Text") . "," . 
          tosql($fldlast_name, "Text") . "," . 
          tosql($fldemail, "Text") . "," . 
          tosql($fldaddress, "Text") . "," . 
          tosql($fldphone, "Text") . "," . 
          tosql($fldcard_type_id, "Number") . "," . 
          tosql($fldcard_number, "Text") . 
          ")";
    break;
    case "update":

//-------------------------------
// Reg Update Event begin
// Reg Update Event end
//-------------------------------
        $sSQL = "update members set " .
          "member_login=" . tosql($fldmember_login, "Text") .
          ",member_password=" . tosql($fldmember_password, "Text") .
          ",first_name=" . tosql($fldfirst_name, "Text") .
          ",last_name=" . tosql($fldlast_name, "Text") .
          ",email=" . tosql($fldemail, "Text") .
          ",address=" . tosql($fldaddress, "Text") .
          ",phone=" . tosql($fldphone, "Text") .
          ",card_type_id=" . tosql($fldcard_type_id, "Number") .
          ",card_number=" . tosql($fldcard_number, "Text");
        $sSQL .= " where " . $sWhere;
    break;
  }
//-------------------------------
//-------------------------------
// Reg BeforeExecute Event begin
// Reg BeforeExecute Event end
//-------------------------------

//-------------------------------
// Execute SQL statement
//-------------------------------
  if(strlen($sRegErr)) return;
  if($bExecSQL)
    $db->query($sSQL);
  header("Location: " . $sActionFileName);

//-------------------------------
// Reg Action end
//-------------------------------
}

//===============================
// Display Record Form
//-------------------------------
function Reg_show()
{
  global $db;
  
  global $sAction;
  global $sForm;
  global $sFileName;
  global $sRegErr;
  global $styles;
  
  $fldmember_id = "";
  $fldmember_login = "";
  $fldmember_password = "";
  $fldfirst_name = "";
  $fldlast_name = "";
  $fldemail = "";
  $fldaddress = "";
  $fldphone = "";
  $fldcard_type_id = "";
  $fldcard_number = "";
//-------------------------------
// Reg Show begin
//-------------------------------
  $sFormTitle = "Registration";
  $sWhere = "";
  $bPK = true;
  $scard_type_idDisplayValue = "";

?>
   
   <table style="width:100%">
   <form method="POST" action="<?= $sFileName ?>" name="Reg">
   <tr><td style="background-color: #336699; text-align: Center; border-style: outset; border-width: 1" colspan="2"><font style="font-size: 10pt; color: #FFFFFF; font-weight: bold"><?=$sFormTitle?></font></td></tr>
   <? if ($sRegErr) { ?>
		<tr><td style="background-color: #FFFFFF; border-width: 1" colspan="2"><font style="font-size: 10pt; color: #000000"><?= $sRegErr ?></font></td></tr>
	 <? } ?>
<? 

//-------------------------------
// Load primary key and form parameters
//-------------------------------
  if($sRegErr == "")
  {
  }
  else
  {
    $fldmember_id = strip(get_param("member_id"));
    $fldmember_login = strip(get_param("member_login"));
    $fldmember_password = strip(get_param("member_password"));
    $fldfirst_name = strip(get_param("first_name"));
    $fldlast_name = strip(get_param("last_name"));
    $fldemail = strip(get_param("email"));
    $fldaddress = strip(get_param("address"));
    $fldphone = strip(get_param("phone"));
    $fldcard_type_id = strip(get_param("card_type_id"));
    $fldcard_number = strip(get_param("card_number"));
  }
//-------------------------------

//-------------------------------
// Load all form fields

  $fldmember_password2 = get_param("member_password2");
//-------------------------------

//-------------------------------
// Build WHERE statement
//-------------------------------
  
  $pmember_id = get_session("UserID");
  if( !strlen($pmember_id)) $bPK = false;
  
  $sWhere .= "member_id=" . tosql($pmember_id, "Number");
//-------------------------------
//-------------------------------
// Reg Open Event begin
// Reg Open Event end
//-------------------------------

//-------------------------------
// Build SQL statement and execute query
//-------------------------------
  $sSQL = "select * from members where " . $sWhere;
  // Execute SQL statement
  $db->query($sSQL);
  $bIsUpdateMode = ($bPK && !($sAction == "insert" && $sForm == "Reg") && $db->next_record());
//-------------------------------

//-------------------------------
// Load all fields into variables from recordset or input parameters
//-------------------------------
  if($bIsUpdateMode)
  {
    $fldmember_id = $db->f("member_id");
//-------------------------------
// Load data from recordset when form displayed first time
//-------------------------------
    if($sRegErr == "") 
    {
      $fldmember_login = $db->f("member_login");
      $fldmember_password = $db->f("member_password");
      $fldfirst_name = $db->f("first_name");
      $fldlast_name = $db->f("last_name");
      $fldemail = $db->f("email");
      $fldaddress = $db->f("address");
      $fldphone = $db->f("phone");
      $fldcard_type_id = $db->f("card_type_id");
      $fldcard_number = $db->f("card_number");
    }
//-------------------------------
// Reg ShowEdit Event begin
// Reg ShowEdit Event end
//-------------------------------
  }
  else
  {
    if($sRegErr == "")
    {
      $fldmember_id = tohtml(get_session("UserID"));
    }
//-------------------------------
// Reg ShowInsert Event begin
// Reg ShowInsert Event end
//-------------------------------
  }
//-------------------------------
// Reg Show Event begin
// Reg Show Event end
//-------------------------------

//-------------------------------
// Show form field
//-------------------------------
    ?>
      <tr>
       <td style="background-color: #FFEAC5; border-style: inset; border-width: 0">
         <font style="font-size: 10pt; color: #000000">Username*</font>
       </td>
       <td style="background-color: #FFFFFF; border-width: 1">
         <font style="font-size: 10pt; color: #000000"><input type="text" name="member_login" maxlength="20" value="<?= tohtml($fldmember_login) ?>" size="20" ></font>
       </td>
     </tr>
      <tr>
       <td style="background-color: #FFEAC5; border-style: inset; border-width: 0">
         <font style="font-size: 10pt; color: #000000">Password*</font>
       </td>
       <td style="background-color: #FFFFFF; border-width: 1">
         <font style="font-size: 10pt; color: #000000"><input type="password" name="member_password" maxlength="20" value="<?= tohtml($fldmember_password) ?>" size="20" ></font>
       </td>
     </tr>
      <tr>
       <td style="background-color: #FFEAC5; border-style: inset; border-width: 0">
         <font style="font-size: 10pt; color: #000000">Confirm Password*</font>
       </td>
       <td style="background-color: #FFFFFF; border-width: 1">
         <font style="font-size: 10pt; color: #000000"><input type="password" name="member_password2" maxlength="20" value="<?= tohtml($fldmember_password2) ?>" size="20" ></font>
       </td>
     </tr>
      <tr>
       <td style="background-color: #FFEAC5; border-style: inset; border-width: 0">
         <font style="font-size: 10pt; color: #000000">First Name*</font>
       </td>
       <td style="background-color: #FFFFFF; border-width: 1">
         <font style="font-size: 10pt; color: #000000"><input type="text" name="first_name" maxlength="50" value="<?= tohtml($fldfirst_name) ?>" size="50" ></font>
       </td>
     </tr>
      <tr>
       <td style="background-color: #FFEAC5; border-style: inset; border-width: 0">
         <font style="font-size: 10pt; color: #000000">Last Name*</font>
       </td>
       <td style="background-color: #FFFFFF; border-width: 1">
         <font style="font-size: 10pt; color: #000000"><input type="text" name="last_name" maxlength="50" value="<?= tohtml($fldlast_name) ?>" size="50" ></font>
       </td>
     </tr>
      <tr>
       <td style="background-color: #FFEAC5; border-style: inset; border-width: 0">
         <font style="font-size: 10pt; color: #000000">Email*</font>
       </td>
       <td style="background-color: #FFFFFF; border-width: 1">
         <font style="font-size: 10pt; color: #000000"><input type="text" name="email" maxlength="50" value="<?= tohtml($fldemail) ?>" size="50" ></font>
       </td>
     </tr>
      <tr>
       <td style="background-color: #FFEAC5; border-style: inset; border-width: 0">
         <font style="font-size: 10pt; color: #000000">Address</font>
       </td>
       <td style="background-color: #FFFFFF; border-width: 1">
         <font style="font-size: 10pt; color: #000000"><input type="text" name="address" maxlength="50" value="<?= tohtml($fldaddress) ?>" size="50" ></font>
       </td>
     </tr>
      <tr>
       <td style="background-color: #FFEAC5; border-style: inset; border-width: 0">
         <font style="font-size: 10pt; color: #000000">Phone</font>
       </td>
       <td style="background-color: #FFFFFF; border-width: 1">
         <font style="font-size: 10pt; color: #000000"><input type="text" name="phone" maxlength="50" value="<?= tohtml($fldphone) ?>" size="50" ></font>
       </td>
     </tr>
      <tr>
       <td style="background-color: #FFEAC5; border-style: inset; border-width: 0">
         <font style="font-size: 10pt; color: #000000">Credit Card Type</font>
       </td>
       <td style="background-color: #FFFFFF; border-width: 1">
         <font style="font-size: 10pt; color: #000000"><select size="1" name="card_type_id">
<?
    echo "<option value=\"\">" . $scard_type_idDisplayValue . "</option>";
    $lookup_card_type_id = db_fill_array("select card_type_id, name from card_types order by 2");

    if(is_array($lookup_card_type_id))
    {
      reset($lookup_card_type_id);
      while(list($key, $value) = each($lookup_card_type_id))
      {
        if($key == $fldcard_type_id)
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
         <font style="font-size: 10pt; color: #000000">Credit Card Number</font>
       </td>
       <td style="background-color: #FFFFFF; border-width: 1">
         <font style="font-size: 10pt; color: #000000"><input type="text" name="card_number" maxlength="20" value="<?= tohtml($fldcard_number) ?>" size="20" ></font>
       </td>
     </tr>
    <tr><td colspan="2" align="right">
<? if (!$bIsUpdateMode) { ?>
   <input type="hidden" value="insert" name="FormAction">
   <input type="submit" value="Register" onclick="document.Reg.FormAction.value = 'insert';">
<? } ?>
<? if ($bIsUpdateMode) { ?>
  <input type="hidden" value="update" name="FormAction"/>
  <input type="submit" value="Update" onclick="document.Reg.FormAction.value = 'update';">
<? } ?>
  <input type="submit" value="Cancel" onclick="document.Reg.FormAction.value = 'cancel';">
  <input type="hidden" name="FormName" value="Reg">
  
  <input type="hidden" name="PK_member_id" value="<?= $pmember_id ?>">  
  <input type="hidden" name="member_id" value="<?= tohtml($fldmember_id)?>">
  </td></tr>
  </form>
  </table>
<?
  


//-------------------------------
// Reg Close Event begin
// Reg Close Event end
//-------------------------------

//-------------------------------
// Reg Show end
//-------------------------------
}
//===============================
?>