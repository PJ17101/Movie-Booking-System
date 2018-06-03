<?php
/*********************************************************************************
 *       Filename: MembersRecord.php
 *       PHP 4.0 build 11/30/2001
 *********************************************************************************/

//-------------------------------
// MembersRecord CustomIncludes begin

include ("./common.php");
include ("./Header.php");
include ("./Footer.php");

// MembersRecord CustomIncludes end
//-------------------------------

session_start();

//===============================
// Save Page and File Name available into variables
//-------------------------------
$sFileName = "MembersRecord.php";
//===============================


//===============================
// MembersRecord PageSecurity begin
check_security(2);
// MembersRecord PageSecurity end
//===============================

//===============================
// MembersRecord Open Event begin
// MembersRecord Open Event end
//===============================

//===============================
// MembersRecord OpenAnyPage Event start
// MembersRecord OpenAnyPage Event end
//===============================

//===============================
//Save the name of the form and type of action into the variables
//-------------------------------
$sAction = get_param("FormAction");
$sForm = get_param("FormName");
//===============================

// MembersRecord Show begin

//===============================
// Perform the form's action
//-------------------------------
// Initialize error variables
//-------------------------------
$sMembersErr = "";

//-------------------------------
// Select the FormAction
//-------------------------------
switch ($sForm) {
  case "Members":
    Members_action($sAction);
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
<?php Members_show() ?>
    <SCRIPT Language="JavaScript">
if (document.forms["Members"])
document.Members.onsubmit=delconf;
function delconf() {
if (document.Members.FormAction.value == 'delete')
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

// MembersRecord Show end

//===============================
// MembersRecord Close Event begin
// MembersRecord Close Event end
//===============================
//********************************************************************************


//===============================
// Action of the Record Form
//-------------------------------
function Members_action($sAction)
{
//-------------------------------
// Initialize variables  
//-------------------------------
  global $db;
  
  global $sForm;
  global $sMembersErr;
  global $styles;
  $bExecSQL = true;
  $sActionFileName = "";
  $sParams = "?";
  $sWhere = "";
  $bErr = false;
  $pPKmember_id = "";
  $fldmember_login = "";
  $fldmember_password = "";
  $fldmember_level = "";
  $fldname = "";
  $fldlast_name = "";
  $fldemail = "";
  $fldphone = "";
  $fldaddress = "";
  $fldnotes = "";
  $fldcard_type_id = "";
  $fldcard_number = "";
//-------------------------------

//-------------------------------
// Members Action begin
//-------------------------------
  $sActionFileName = "MembersGrid.php";
  $sParams .= "member_login=" . urlencode(get_param("Trn_member_login"));

//-------------------------------
// CANCEL action
//-------------------------------
  if($sAction == "cancel")
  {

//-------------------------------
// Members BeforeCancel Event begin
// Members BeforeCancel Event end
//-------------------------------
    header("Location: " . $sActionFileName . $sParams);
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
  $fldmember_level = get_param("member_level");
  $fldname = get_param("name");
  $fldlast_name = get_param("last_name");
  $fldemail = get_param("email");
  $fldphone = get_param("phone");
  $fldaddress = get_param("address");
  $fldnotes = get_param("notes");
  $fldcard_type_id = get_param("card_type_id");
  $fldcard_number = get_param("card_number");

//-------------------------------
// Validate fields
//-------------------------------
  if($sAction == "insert" || $sAction == "update") 
  {
    if(!strlen($fldmember_login))
      $sMembersErr .= "The value in field Username* is required.<br>";
    
    if(!strlen($fldmember_password))
      $sMembersErr .= "The value in field Password* is required.<br>";
    
    if(!strlen($fldmember_level))
      $sMembersErr .= "The value in field Level* is required.<br>";
    
    if(!strlen($fldname))
      $sMembersErr .= "The value in field First Name* is required.<br>";
    
    if(!strlen($fldlast_name))
      $sMembersErr .= "The value in field Last Name* is required.<br>";
    
    if(!strlen($fldemail))
      $sMembersErr .= "The value in field Email* is required.<br>";
    
    if(!is_number($fldmember_level))
      $sMembersErr .= "The value in field Level* is incorrect.<br>";
    
    if(!is_number($fldcard_type_id))
      $sMembersErr .= "The value in field Credit Card Type is incorrect.<br>";
    
    if(strlen($fldmember_login) )
    {
      $iCount = 0;

      if($sAction == "insert")
        $iCount = get_db_value("SELECT count(*) FROM members WHERE member_login=" . tosql($fldmember_login, "Text"));
      else if($sAction == "update")
        $iCount = get_db_value("SELECT count(*) FROM members WHERE member_login=" . tosql($fldmember_login, "Text") . " and not(" . $sWhere . ")");
      if($iCount > 0)
        $sMembersErr .= "The value in field Username* is already in database.<br>";
    }                                                                               
    
//-------------------------------
// Members Check Event begin
// Members Check Event end
//-------------------------------
    if(strlen($sMembersErr)) return;
  }
//-------------------------------


//-------------------------------
// Create SQL statement
//-------------------------------
  switch(strtolower($sAction)) 
  {
    case "insert":
//-------------------------------
// Members Insert Event begin
// Members Insert Event end
//-------------------------------
        $sSQL = "insert into members (" . 
          "member_login," . 
          "member_password," . 
          "member_level," . 
          "first_name," . 
          "last_name," . 
          "email," . 
          "phone," . 
          "address," . 
          "notes," . 
          "card_type_id," . 
          "card_number)" . 
          " values (" . 
          tosql($fldmember_login, "Text") . "," . 
          tosql($fldmember_password, "Text") . "," . 
          tosql($fldmember_level, "Number") . "," . 
          tosql($fldname, "Text") . "," . 
          tosql($fldlast_name, "Text") . "," . 
          tosql($fldemail, "Text") . "," . 
          tosql($fldphone, "Text") . "," . 
          tosql($fldaddress, "Text") . "," . 
          tosql($fldnotes, "Text") . "," . 
          tosql($fldcard_type_id, "Number") . "," . 
          tosql($fldcard_number, "Text") . 
          ")";
    break;
    case "update":

//-------------------------------
// Members Update Event begin
// Members Update Event end
//-------------------------------
        $sSQL = "update members set " .
          "member_login=" . tosql($fldmember_login, "Text") .
          ",member_password=" . tosql($fldmember_password, "Text") .
          ",member_level=" . tosql($fldmember_level, "Number") .
          ",first_name=" . tosql($fldname, "Text") .
          ",last_name=" . tosql($fldlast_name, "Text") .
          ",email=" . tosql($fldemail, "Text") .
          ",phone=" . tosql($fldphone, "Text") .
          ",address=" . tosql($fldaddress, "Text") .
          ",notes=" . tosql($fldnotes, "Text") .
          ",card_type_id=" . tosql($fldcard_type_id, "Number") .
          ",card_number=" . tosql($fldcard_number, "Text");
        $sSQL .= " where " . $sWhere;
    break;
    case "delete":
//-------------------------------
// Members Delete Event begin
// Members Delete Event end
//-------------------------------
        $sSQL = "delete from members where " . $sWhere;
    break;
  }
//-------------------------------
//-------------------------------
// Members BeforeExecute Event begin
// Members BeforeExecute Event end
//-------------------------------

//-------------------------------
// Execute SQL statement
//-------------------------------
  if(strlen($sMembersErr)) return;
  if($bExecSQL)
    $db->query($sSQL);
  header("Location: " . $sActionFileName . $sParams);

//-------------------------------
// Members Action end
//-------------------------------
}

//===============================
// Display Record Form
//-------------------------------
function Members_show()
{
  global $db;
  
  global $sAction;
  global $sForm;
  global $sFileName;
  global $sMembersErr;
  global $styles;
  
  $fldmember_id = "";
  $fldmember_login = "";
  $fldmember_password = "";
  $fldmember_level = "";
  $fldname = "";
  $fldlast_name = "";
  $fldemail = "";
  $fldphone = "";
  $fldaddress = "";
  $fldnotes = "";
  $fldcard_type_id = "";
  $fldcard_number = "";
//-------------------------------
// Members Show begin
//-------------------------------
  $sFormTitle = "Members";
  $sWhere = "";
  $bPK = true;
  $scard_type_idDisplayValue = "";

?>
   
   <table style="width:100%">
   <form method="POST" action="<?= $sFileName ?>" name="Members">
   <tr><td style="background-color: #336699; text-align: Center; border-style: outset; border-width: 1" colspan="2"><font style="font-size: 10pt; color: #FFFFFF; font-weight: bold"><?=$sFormTitle?></font></td></tr>
   <? if ($sMembersErr) { ?>
		<tr><td style="background-color: #FFFFFF; border-width: 1" colspan="2"><font style="font-size: 10pt; color: #000000"><?= $sMembersErr ?></font></td></tr>
	 <? } ?>
<? 

//-------------------------------
// Load primary key and form parameters
//-------------------------------
  if($sMembersErr == "")
  {
    $fldmember_login = get_param("member_login");
    $fldmember_id = get_param("member_id");
    $trn_member_login = get_param("member_login");
    $pmember_id = get_param("member_id");
  }
  else
  {
    $fldmember_id = strip(get_param("member_id"));
    $fldmember_login = strip(get_param("member_login"));
    $fldmember_password = strip(get_param("member_password"));
    $fldmember_level = strip(get_param("member_level"));
    $fldname = strip(get_param("name"));
    $fldlast_name = strip(get_param("last_name"));
    $fldemail = strip(get_param("email"));
    $fldphone = strip(get_param("phone"));
    $fldaddress = strip(get_param("address"));
    $fldnotes = strip(get_param("notes"));
    $fldcard_type_id = strip(get_param("card_type_id"));
    $fldcard_number = strip(get_param("card_number"));
    $trn_member_login = get_param("Trn_member_login");
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
// Members Open Event begin
// Members Open Event end
//-------------------------------

//-------------------------------
// Build SQL statement and execute query
//-------------------------------
  $sSQL = "select * from members where " . $sWhere;
  // Execute SQL statement
  $db->query($sSQL);
  $bIsUpdateMode = ($bPK && !($sAction == "insert" && $sForm == "Members") && $db->next_record());
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
    if($sMembersErr == "") 
    {
      $fldmember_login = $db->f("member_login");
      $fldmember_password = $db->f("member_password");
      $fldmember_level = $db->f("member_level");
      $fldname = $db->f("first_name");
      $fldlast_name = $db->f("last_name");
      $fldemail = $db->f("email");
      $fldphone = $db->f("phone");
      $fldaddress = $db->f("address");
      $fldnotes = $db->f("notes");
      $fldcard_type_id = $db->f("card_type_id");
      $fldcard_number = $db->f("card_number");
    }
//-------------------------------
// Members ShowEdit Event begin
// Members ShowEdit Event end
//-------------------------------
  }
  else
  {
    if($sMembersErr == "")
    {
      $fldmember_id = tohtml(get_param("member_id"));
      $fldmember_login = tohtml(get_param("member_login"));
    }
//-------------------------------
// Members ShowInsert Event begin
// Members ShowInsert Event end
//-------------------------------
  }
//-------------------------------
// Members Show Event begin
// Members Show Event end
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
         <font style="font-size: 10pt; color: #000000">Level*</font>
       </td>
       <td style="background-color: #FFFFFF; border-width: 1">
         <font style="font-size: 10pt; color: #000000"><select size="1" name="member_level">
<?
    $LOV = split(";", "1;Member;2;Administrator");
  
    if(sizeof($LOV)%2 != 0) 
      $array_length = sizeof($LOV) - 1;
    else
      $array_length = sizeof($LOV);
    
    for($i = 0; $i < $array_length; $i = $i + 2)
    {
      if($LOV[$i] == $fldmember_level) 
        $option="<option SELECTED value=\"" . $LOV[$i] . "\">" . $LOV[$i + 1];
      else
        $option="<option value=\"" . $LOV[$i] . "\">" . $LOV[$i + 1];

      echo $option;
    }
?></select></font>
       </td>
     </tr>
      <tr>
       <td style="background-color: #FFEAC5; border-style: inset; border-width: 0">
         <font style="font-size: 10pt; color: #000000">First Name*</font>
       </td>
       <td style="background-color: #FFFFFF; border-width: 1">
         <font style="font-size: 10pt; color: #000000"><input type="text" name="name" maxlength="50" value="<?= tohtml($fldname) ?>" size="50" ></font>
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
         <font style="font-size: 10pt; color: #000000">Phone</font>
       </td>
       <td style="background-color: #FFFFFF; border-width: 1">
         <font style="font-size: 10pt; color: #000000"><input type="text" name="phone" maxlength="50" value="<?= tohtml($fldphone) ?>" size="50" ></font>
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
         <font style="font-size: 10pt; color: #000000">Notes</font>
       </td>
       <td style="background-color: #FFFFFF; border-width: 1">
         <font style="font-size: 10pt; color: #000000"><textarea name="notes" cols="50" rows="5"><?=tohtml($fldnotes)?></textarea></font>
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
         <font style="font-size: 10pt; color: #000000"><input type="text" name="card_number" maxlength="50" value="<?= tohtml($fldcard_number) ?>" size="50" ></font>
       </td>
     </tr>
    <tr><td colspan="2" align="right">
<? if (!$bIsUpdateMode) { ?>
   <input type="hidden" value="insert" name="FormAction">
   <input type="submit" value="Insert" onclick="document.Members.FormAction.value = 'insert';">
<? } ?>
<? if ($bIsUpdateMode) { ?>
  <input type="hidden" value="update" name="FormAction"/>
  <input type="submit" value="Update" onclick="document.Members.FormAction.value = 'update';">
  <input type="submit" value="Delete" onclick="document.Members.FormAction.value = 'delete';">
<? } ?>
  <input type="submit" value="Cancel" onclick="document.Members.FormAction.value = 'cancel';">
  <input type="hidden" name="FormName" value="Members">
  
  <input type="hidden" name="Trn_member_login" value="<?= $trn_member_login ?>">
  <input type="hidden" name="PK_member_id" value="<?= $pmember_id ?>">  
  <input type="hidden" name="member_id" value="<?= tohtml($fldmember_id)?>">
  </td></tr>
  </form>
  </table>
<?
  


//-------------------------------
// Members Close Event begin
// Members Close Event end
//-------------------------------

//-------------------------------
// Members Show end
//-------------------------------
}
//===============================
?>