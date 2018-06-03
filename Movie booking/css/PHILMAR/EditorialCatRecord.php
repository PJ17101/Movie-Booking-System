<?php
/*********************************************************************************
 *       Filename: EditorialCatRecord.php
 *       PHP 4.0 build 11/30/2001
 *********************************************************************************/

//-------------------------------
// EditorialCatRecord CustomIncludes begin

include ("./common.php");
include ("./Header.php");
include ("./Footer.php");

// EditorialCatRecord CustomIncludes end
//-------------------------------

session_start();

//===============================
// Save Page and File Name available into variables
//-------------------------------
$sFileName = "EditorialCatRecord.php";
//===============================


//===============================
// EditorialCatRecord PageSecurity begin
check_security(2);
// EditorialCatRecord PageSecurity end
//===============================

//===============================
// EditorialCatRecord Open Event begin
// EditorialCatRecord Open Event end
//===============================

//===============================
// EditorialCatRecord OpenAnyPage Event start
// EditorialCatRecord OpenAnyPage Event end
//===============================

//===============================
//Save the name of the form and type of action into the variables
//-------------------------------
$sAction = get_param("FormAction");
$sForm = get_param("FormName");
//===============================

// EditorialCatRecord Show begin

//===============================
// Perform the form's action
//-------------------------------
// Initialize error variables
//-------------------------------
$seditorial_categoriesErr = "";

//-------------------------------
// Select the FormAction
//-------------------------------
switch ($sForm) {
  case "editorial_categories":
    editorial_categories_action($sAction);
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
<?php editorial_categories_show() ?>
    
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

// EditorialCatRecord Show end

//===============================
// EditorialCatRecord Close Event begin
// EditorialCatRecord Close Event end
//===============================
//********************************************************************************


//===============================
// Action of the Record Form
//-------------------------------
function editorial_categories_action($sAction)
{
//-------------------------------
// Initialize variables  
//-------------------------------
  global $db;
  
  global $sForm;
  global $seditorial_categoriesErr;
  global $styles;
  $bExecSQL = true;
  $sActionFileName = "";
  $sWhere = "";
  $bErr = false;
  $pPKeditorial_cat_id = "";
  $fldeditorial_cat_name = "";
//-------------------------------

//-------------------------------
// editorial_categories Action begin
//-------------------------------
  $sActionFileName = "EditorialCatGrid.php";

//-------------------------------
// CANCEL action
//-------------------------------
  if($sAction == "cancel")
  {

//-------------------------------
// editorial_categories BeforeCancel Event begin
// editorial_categories BeforeCancel Event end
//-------------------------------
    header("Location: " . $sActionFileName);
  }
//-------------------------------


//-------------------------------
// Build WHERE statement
//-------------------------------
  if($sAction == "update" || $sAction == "delete") 
  {
    $pPKeditorial_cat_id = get_param("PK_editorial_cat_id");
    if( !strlen($pPKeditorial_cat_id)) return;
    $sWhere = "editorial_cat_id=" . tosql($pPKeditorial_cat_id, "Number");
  }
//-------------------------------


//-------------------------------
// Load all form fields into variables
//-------------------------------
  $fldeditorial_cat_name = get_param("editorial_cat_name");

//-------------------------------
// Validate fields
//-------------------------------
  if($sAction == "insert" || $sAction == "update") 
  {
//-------------------------------
// editorial_categories Check Event begin
// editorial_categories Check Event end
//-------------------------------
    if(strlen($seditorial_categoriesErr)) return;
  }
//-------------------------------


//-------------------------------
// Create SQL statement
//-------------------------------
  switch(strtolower($sAction)) 
  {
    case "insert":
//-------------------------------
// editorial_categories Insert Event begin
// editorial_categories Insert Event end
//-------------------------------
        $sSQL = "insert into editorial_categories (" . 
          "editorial_cat_name)" . 
          " values (" . 
          tosql($fldeditorial_cat_name, "Text") . 
          ")";
    break;
    case "update":

//-------------------------------
// editorial_categories Update Event begin
// editorial_categories Update Event end
//-------------------------------
        $sSQL = "update editorial_categories set " .
          "editorial_cat_name=" . tosql($fldeditorial_cat_name, "Text");
        $sSQL .= " where " . $sWhere;
    break;
    case "delete":
//-------------------------------
// editorial_categories Delete Event begin
// editorial_categories Delete Event end
//-------------------------------
        $sSQL = "delete from editorial_categories where " . $sWhere;
    break;
  }
//-------------------------------
//-------------------------------
// editorial_categories BeforeExecute Event begin
// editorial_categories BeforeExecute Event end
//-------------------------------

//-------------------------------
// Execute SQL statement
//-------------------------------
  if(strlen($seditorial_categoriesErr)) return;
  if($bExecSQL)
    $db->query($sSQL);
  header("Location: " . $sActionFileName);

//-------------------------------
// editorial_categories Action end
//-------------------------------
}

//===============================
// Display Record Form
//-------------------------------
function editorial_categories_show()
{
  global $db;
  
  global $sAction;
  global $sForm;
  global $sFileName;
  global $seditorial_categoriesErr;
  global $styles;
  
  $fldeditorial_cat_id = "";
  $fldeditorial_cat_name = "";
//-------------------------------
// editorial_categories Show begin
//-------------------------------
  $sFormTitle = "Editorial Categories";
  $sWhere = "";
  $bPK = true;

?>
   
   <table style="width:100%">
   <form method="POST" action="<?= $sFileName ?>" name="editorial_categories">
   <tr><td style="background-color: #336699; text-align: Center; border-style: outset; border-width: 1" colspan="2"><font style="font-size: 10pt; color: #FFFFFF; font-weight: bold"><?=$sFormTitle?></font></td></tr>
   <? if ($seditorial_categoriesErr) { ?>
		<tr><td style="background-color: #FFFFFF; border-width: 1" colspan="2"><font style="font-size: 10pt; color: #000000"><?= $seditorial_categoriesErr ?></font></td></tr>
	 <? } ?>
<? 

//-------------------------------
// Load primary key and form parameters
//-------------------------------
  if($seditorial_categoriesErr == "")
  {
    $fldeditorial_cat_id = get_param("editorial_cat_id");
    $peditorial_cat_id = get_param("editorial_cat_id");
  }
  else
  {
    $fldeditorial_cat_id = strip(get_param("editorial_cat_id"));
    $fldeditorial_cat_name = strip(get_param("editorial_cat_name"));
    $peditorial_cat_id = get_param("PK_editorial_cat_id");
  }
//-------------------------------

//-------------------------------
// Load all form fields

//-------------------------------

//-------------------------------
// Build WHERE statement
//-------------------------------
  
  if( !strlen($peditorial_cat_id)) $bPK = false;
  
  $sWhere .= "editorial_cat_id=" . tosql($peditorial_cat_id, "Number");
//-------------------------------
//-------------------------------
// editorial_categories Open Event begin
// editorial_categories Open Event end
//-------------------------------

//-------------------------------
// Build SQL statement and execute query
//-------------------------------
  $sSQL = "select * from editorial_categories where " . $sWhere;
  // Execute SQL statement
  $db->query($sSQL);
  $bIsUpdateMode = ($bPK && !($sAction == "insert" && $sForm == "editorial_categories") && $db->next_record());
//-------------------------------

//-------------------------------
// Load all fields into variables from recordset or input parameters
//-------------------------------
  if($bIsUpdateMode)
  {
    $fldeditorial_cat_id = $db->f("editorial_cat_id");
//-------------------------------
// Load data from recordset when form displayed first time
//-------------------------------
    if($seditorial_categoriesErr == "") 
    {
      $fldeditorial_cat_name = $db->f("editorial_cat_name");
    }
//-------------------------------
// editorial_categories ShowEdit Event begin
// editorial_categories ShowEdit Event end
//-------------------------------
  }
  else
  {
    if($seditorial_categoriesErr == "")
    {
      $fldeditorial_cat_id = tohtml(get_param("editorial_cat_id"));
    }
//-------------------------------
// editorial_categories ShowInsert Event begin
// editorial_categories ShowInsert Event end
//-------------------------------
  }
//-------------------------------
// editorial_categories Show Event begin
// editorial_categories Show Event end
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
         <font style="font-size: 10pt; color: #000000"><input type="text" name="editorial_cat_name" maxlength="50" value="<?= tohtml($fldeditorial_cat_name) ?>" size="50" ></font>
       </td>
     </tr>
    <tr><td colspan="2" align="right">
<? if (!$bIsUpdateMode) { ?>
   <input type="hidden" value="insert" name="FormAction">
   <input type="submit" value="Insert" onclick="document.editorial_categories.FormAction.value = 'insert';">
<? } ?>
<? if ($bIsUpdateMode) { ?>
  <input type="hidden" value="update" name="FormAction"/>
  <input type="submit" value="Update" onclick="document.editorial_categories.FormAction.value = 'update';">
  <input type="submit" value="Delete" onclick="document.editorial_categories.FormAction.value = 'delete';">
<? } ?>
  <input type="submit" value="Cancel" onclick="document.editorial_categories.FormAction.value = 'cancel';">
  <input type="hidden" name="FormName" value="editorial_categories">
  
  <input type="hidden" name="PK_editorial_cat_id" value="<?= $peditorial_cat_id ?>">  
  <input type="hidden" name="editorial_cat_id" value="<?= tohtml($fldeditorial_cat_id)?>">
  </td></tr>
  </form>
  </table>
<?
  


//-------------------------------
// editorial_categories Close Event begin
// editorial_categories Close Event end
//-------------------------------

//-------------------------------
// editorial_categories Show end
//-------------------------------
}
//===============================
?>