<?php
/*********************************************************************************
 *       Filename: CardTypesRecord.php
 *       PHP 4.0 build 11/30/2001
 *********************************************************************************/

//-------------------------------
// CardTypesRecord CustomIncludes begin

include ("./common.php");
include ("./Header.php");
include ("./Footer.php");

// CardTypesRecord CustomIncludes end
//-------------------------------

session_start();

//===============================
// Save Page and File Name available into variables
//-------------------------------
$sFileName = "CardTypesRecord.php";
//===============================


//===============================
// CardTypesRecord PageSecurity begin
check_security(2);
// CardTypesRecord PageSecurity end
//===============================

//===============================
// CardTypesRecord Open Event begin
// CardTypesRecord Open Event end
//===============================

//===============================
// CardTypesRecord OpenAnyPage Event start
// CardTypesRecord OpenAnyPage Event end
//===============================

//===============================
//Save the name of the form and type of action into the variables
//-------------------------------
$sAction = get_param("FormAction");
$sForm = get_param("FormName");
//===============================

// CardTypesRecord Show begin

//===============================
// Perform the form's action
//-------------------------------
// Initialize error variables
//-------------------------------
$sCardTypesErr = "";

//-------------------------------
// Select the FormAction
//-------------------------------
switch ($sForm) {
  case "CardTypes":
    CardTypes_action($sAction);
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
<?php CardTypes_show() ?>
    
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

// CardTypesRecord Show end

//===============================
// CardTypesRecord Close Event begin
// CardTypesRecord Close Event end
//===============================
//********************************************************************************


//===============================
// Action of the Record Form
//-------------------------------
function CardTypes_action($sAction)
{
//-------------------------------
// Initialize variables  
//-------------------------------
  global $db;
  
  global $sForm;
  global $sCardTypesErr;
  global $styles;
  $bExecSQL = true;
  $sActionFileName = "";
  $sWhere = "";
  $bErr = false;
  $pPKcard_type_id = "";
  $fldname = "";
//-------------------------------

//-------------------------------
// CardTypes Action begin
//-------------------------------
  $sActionFileName = "CardTypesGrid.php";

//-------------------------------
// CANCEL action
//-------------------------------
  if($sAction == "cancel")
  {

//-------------------------------
// CardTypes BeforeCancel Event begin
// CardTypes BeforeCancel Event end
//-------------------------------
    header("Location: " . $sActionFileName);
  }
//-------------------------------


//-------------------------------
// Build WHERE statement
//-------------------------------
  if($sAction == "update" || $sAction == "delete") 
  {
    $pPKcard_type_id = get_param("PK_card_type_id");
    if( !strlen($pPKcard_type_id)) return;
    $sWhere = "card_type_id=" . tosql($pPKcard_type_id, "Number");
  }
//-------------------------------


//-------------------------------
// Load all form fields into variables
//-------------------------------
  $fldname = get_param("name");

//-------------------------------
// Validate fields
//-------------------------------
  if($sAction == "insert" || $sAction == "update") 
  {
    if(!strlen($fldname))
      $sCardTypesErr .= "The value in field Name is required.<br>";
    
//-------------------------------
// CardTypes Check Event begin
// CardTypes Check Event end
//-------------------------------
    if(strlen($sCardTypesErr)) return;
  }
//-------------------------------


//-------------------------------
// Create SQL statement
//-------------------------------
  switch(strtolower($sAction)) 
  {
    case "insert":
//-------------------------------
// CardTypes Insert Event begin
// CardTypes Insert Event end
//-------------------------------
        $sSQL = "insert into card_types (" . 
          "name)" . 
          " values (" . 
          tosql($fldname, "Text") . 
          ")";
    break;
    case "update":

//-------------------------------
// CardTypes Update Event begin
// CardTypes Update Event end
//-------------------------------
        $sSQL = "update card_types set " .
          "name=" . tosql($fldname, "Text");
        $sSQL .= " where " . $sWhere;
    break;
    case "delete":
//-------------------------------
// CardTypes Delete Event begin
// CardTypes Delete Event end
//-------------------------------
        $sSQL = "delete from card_types where " . $sWhere;
    break;
  }
//-------------------------------
//-------------------------------
// CardTypes BeforeExecute Event begin
// CardTypes BeforeExecute Event end
//-------------------------------

//-------------------------------
// Execute SQL statement
//-------------------------------
  if(strlen($sCardTypesErr)) return;
  if($bExecSQL)
    $db->query($sSQL);
  header("Location: " . $sActionFileName);

//-------------------------------
// CardTypes Action end
//-------------------------------
}

//===============================
// Display Record Form
//-------------------------------
function CardTypes_show()
{
  global $db;
  
  global $sAction;
  global $sForm;
  global $sFileName;
  global $sCardTypesErr;
  global $styles;
  
  $fldcard_type_id = "";
  $fldname = "";
//-------------------------------
// CardTypes Show begin
//-------------------------------
  $sFormTitle = "Card Type";
  $sWhere = "";
  $bPK = true;

?>
   
   <table style="width:100%">
   <form method="POST" action="<?= $sFileName ?>" name="CardTypes">
   <tr><td style="background-color: #336699; text-align: Center; border-style: outset; border-width: 1" colspan="2"><font style="font-size: 10pt; color: #FFFFFF; font-weight: bold"><?=$sFormTitle?></font></td></tr>
   <? if ($sCardTypesErr) { ?>
		<tr><td style="background-color: #FFFFFF; border-width: 1" colspan="2"><font style="font-size: 10pt; color: #000000"><?= $sCardTypesErr ?></font></td></tr>
	 <? } ?>
<? 

//-------------------------------
// Load primary key and form parameters
//-------------------------------
  if($sCardTypesErr == "")
  {
    $fldcard_type_id = get_param("card_type_id");
    $pcard_type_id = get_param("card_type_id");
  }
  else
  {
    $fldcard_type_id = strip(get_param("card_type_id"));
    $fldname = strip(get_param("name"));
    $pcard_type_id = get_param("PK_card_type_id");
  }
//-------------------------------

//-------------------------------
// Load all form fields

//-------------------------------

//-------------------------------
// Build WHERE statement
//-------------------------------
  
  if( !strlen($pcard_type_id)) $bPK = false;
  
  $sWhere .= "card_type_id=" . tosql($pcard_type_id, "Number");
//-------------------------------
//-------------------------------
// CardTypes Open Event begin
// CardTypes Open Event end
//-------------------------------

//-------------------------------
// Build SQL statement and execute query
//-------------------------------
  $sSQL = "select * from card_types where " . $sWhere;
  // Execute SQL statement
  $db->query($sSQL);
  $bIsUpdateMode = ($bPK && !($sAction == "insert" && $sForm == "CardTypes") && $db->next_record());
//-------------------------------

//-------------------------------
// Load all fields into variables from recordset or input parameters
//-------------------------------
  if($bIsUpdateMode)
  {
    $fldcard_type_id = $db->f("card_type_id");
//-------------------------------
// Load data from recordset when form displayed first time
//-------------------------------
    if($sCardTypesErr == "") 
    {
      $fldname = $db->f("name");
    }
//-------------------------------
// CardTypes ShowEdit Event begin
// CardTypes ShowEdit Event end
//-------------------------------
  }
  else
  {
    if($sCardTypesErr == "")
    {
      $fldcard_type_id = tohtml(get_param("card_type_id"));
    }
//-------------------------------
// CardTypes ShowInsert Event begin
// CardTypes ShowInsert Event end
//-------------------------------
  }
//-------------------------------
// CardTypes Show Event begin
// CardTypes Show Event end
//-------------------------------

//-------------------------------
// Show form field
//-------------------------------
    ?>
      <tr>
       <td style="background-color: #FFEAC5; border-style: inset; border-width: 0">
         <font style="font-size: 10pt; color: #000000">Name</font>
       </td>
       <td style="background-color: #FFFFFF; border-width: 1">
         <font style="font-size: 10pt; color: #000000"><input type="text" name="name" maxlength="50" value="<?= tohtml($fldname) ?>" size="50" ></font>
       </td>
     </tr>
    <tr><td colspan="2" align="right">
<? if (!$bIsUpdateMode) { ?>
   <input type="hidden" value="insert" name="FormAction">
   <input type="submit" value="Insert" onclick="document.CardTypes.FormAction.value = 'insert';">
<? } ?>
<? if ($bIsUpdateMode) { ?>
  <input type="hidden" value="update" name="FormAction"/>
  <input type="submit" value="Update" onclick="document.CardTypes.FormAction.value = 'update';">
  <input type="submit" value="Delete" onclick="document.CardTypes.FormAction.value = 'delete';">
<? } ?>
  <input type="submit" value="Cancel" onclick="document.CardTypes.FormAction.value = 'cancel';">
  <input type="hidden" name="FormName" value="CardTypes">
  
  <input type="hidden" name="PK_card_type_id" value="<?= $pcard_type_id ?>">  
  <input type="hidden" name="card_type_id" value="<?= tohtml($fldcard_type_id)?>">
  </td></tr>
  </form>
  </table>
<?
  


//-------------------------------
// CardTypes Close Event begin
// CardTypes Close Event end
//-------------------------------

//-------------------------------
// CardTypes Show end
//-------------------------------
}
//===============================
?>