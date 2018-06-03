<?php
/*********************************************************************************
 *       Filename: EditorialsRecord.php
 *       PHP 4.0 build 11/30/2001
 *********************************************************************************/

//-------------------------------
// EditorialsRecord CustomIncludes begin

include ("./common.php");
include ("./Header.php");
include ("./Footer.php");

// EditorialsRecord CustomIncludes end
//-------------------------------

session_start();

//===============================
// Save Page and File Name available into variables
//-------------------------------
$sFileName = "EditorialsRecord.php";
//===============================


//===============================
// EditorialsRecord PageSecurity begin
check_security(2);
// EditorialsRecord PageSecurity end
//===============================

//===============================
// EditorialsRecord Open Event begin
// EditorialsRecord Open Event end
//===============================

//===============================
// EditorialsRecord OpenAnyPage Event start
// EditorialsRecord OpenAnyPage Event end
//===============================

//===============================
//Save the name of the form and type of action into the variables
//-------------------------------
$sAction = get_param("FormAction");
$sForm = get_param("FormName");
//===============================

// EditorialsRecord Show begin

//===============================
// Perform the form's action
//-------------------------------
// Initialize error variables
//-------------------------------
$seditorialsErr = "";

//-------------------------------
// Select the FormAction
//-------------------------------
switch ($sForm) {
  case "editorials":
    editorials_action($sAction);
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
<?php editorials_show() ?>
    
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

// EditorialsRecord Show end

//===============================
// EditorialsRecord Close Event begin
// EditorialsRecord Close Event end
//===============================
//********************************************************************************


//===============================
// Action of the Record Form
//-------------------------------
function editorials_action($sAction)
{
//-------------------------------
// Initialize variables  
//-------------------------------
  global $db;
  
  global $sForm;
  global $seditorialsErr;
  global $styles;
  $bExecSQL = true;
  $sActionFileName = "";
  $sWhere = "";
  $bErr = false;
  $pPKarticle_id = "";
  $fldarticle_desc = "";
  $fldarticle_title = "";
  $fldeditorial_cat_id = "";
  $flditem_id = "";
//-------------------------------

//-------------------------------
// editorials Action begin
//-------------------------------
  $sActionFileName = "EditorialsGrid.php";

//-------------------------------
// CANCEL action
//-------------------------------
  if($sAction == "cancel")
  {

//-------------------------------
// editorials BeforeCancel Event begin
// editorials BeforeCancel Event end
//-------------------------------
    header("Location: " . $sActionFileName);
  }
//-------------------------------


//-------------------------------
// Build WHERE statement
//-------------------------------
  if($sAction == "update" || $sAction == "delete") 
  {
    $pPKarticle_id = get_param("PK_article_id");
    if( !strlen($pPKarticle_id)) return;
    $sWhere = "article_id=" . tosql($pPKarticle_id, "Number");
  }
//-------------------------------


//-------------------------------
// Load all form fields into variables
//-------------------------------
  $fldarticle_desc = get_param("article_desc");
  $fldarticle_title = get_param("article_title");
  $fldeditorial_cat_id = get_param("editorial_cat_id");
  $flditem_id = get_param("item_id");

//-------------------------------
// Validate fields
//-------------------------------
  if($sAction == "insert" || $sAction == "update") 
  {
    if(!strlen($fldeditorial_cat_id))
      $seditorialsErr .= "The value in field Editorial Category is required.<br>";
    
    if(!is_number($fldeditorial_cat_id))
      $seditorialsErr .= "The value in field Editorial Category is incorrect.<br>";
    
    if(!is_number($flditem_id))
      $seditorialsErr .= "The value in field Item is incorrect.<br>";
    
//-------------------------------
// editorials Check Event begin
// editorials Check Event end
//-------------------------------
    if(strlen($seditorialsErr)) return;
  }
//-------------------------------


//-------------------------------
// Create SQL statement
//-------------------------------
  switch(strtolower($sAction)) 
  {
    case "insert":
//-------------------------------
// editorials Insert Event begin
// editorials Insert Event end
//-------------------------------
        $sSQL = "insert into editorials (" . 
          "article_desc," . 
          "article_title," . 
          "editorial_cat_id," . 
          "item_id)" . 
          " values (" . 
          tosql($fldarticle_desc, "Text") . "," . 
          tosql($fldarticle_title, "Text") . "," . 
          tosql($fldeditorial_cat_id, "Number") . "," . 
          tosql($flditem_id, "Number") . 
          ")";
    break;
    case "update":

//-------------------------------
// editorials Update Event begin
// editorials Update Event end
//-------------------------------
        $sSQL = "update editorials set " .
          "article_desc=" . tosql($fldarticle_desc, "Text") .
          ",article_title=" . tosql($fldarticle_title, "Text") .
          ",editorial_cat_id=" . tosql($fldeditorial_cat_id, "Number") .
          ",item_id=" . tosql($flditem_id, "Number");
        $sSQL .= " where " . $sWhere;
    break;
    case "delete":
//-------------------------------
// editorials Delete Event begin
// editorials Delete Event end
//-------------------------------
        $sSQL = "delete from editorials where " . $sWhere;
    break;
  }
//-------------------------------
//-------------------------------
// editorials BeforeExecute Event begin
// editorials BeforeExecute Event end
//-------------------------------

//-------------------------------
// Execute SQL statement
//-------------------------------
  if(strlen($seditorialsErr)) return;
  if($bExecSQL)
    $db->query($sSQL);
  header("Location: " . $sActionFileName);

//-------------------------------
// editorials Action end
//-------------------------------
}

//===============================
// Display Record Form
//-------------------------------
function editorials_show()
{
  global $db;
  
  global $sAction;
  global $sForm;
  global $sFileName;
  global $seditorialsErr;
  global $styles;
  
  $fldarticle_id = "";
  $fldarticle_desc = "";
  $fldarticle_title = "";
  $fldeditorial_cat_id = "";
  $flditem_id = "";
//-------------------------------
// editorials Show begin
//-------------------------------
  $sFormTitle = "Editorial";
  $sWhere = "";
  $bPK = true;
  $sitem_idDisplayValue = "";

?>
   
   <table style="width:100%">
   <form method="POST" action="<?= $sFileName ?>" name="editorials">
   <tr><td style="background-color: #336699; text-align: Center; border-style: outset; border-width: 1" colspan="2"><font style="font-size: 10pt; color: #FFFFFF; font-weight: bold"><?=$sFormTitle?></font></td></tr>
   <? if ($seditorialsErr) { ?>
		<tr><td style="background-color: #FFFFFF; border-width: 1" colspan="2"><font style="font-size: 10pt; color: #000000"><?= $seditorialsErr ?></font></td></tr>
	 <? } ?>
<? 

//-------------------------------
// Load primary key and form parameters
//-------------------------------
  if($seditorialsErr == "")
  {
    $fldarticle_id = get_param("article_id");
    $particle_id = get_param("article_id");
  }
  else
  {
    $fldarticle_id = strip(get_param("article_id"));
    $fldarticle_desc = strip(get_param("article_desc"));
    $fldarticle_title = strip(get_param("article_title"));
    $fldeditorial_cat_id = strip(get_param("editorial_cat_id"));
    $flditem_id = strip(get_param("item_id"));
    $particle_id = get_param("PK_article_id");
  }
//-------------------------------

//-------------------------------
// Load all form fields

//-------------------------------

//-------------------------------
// Build WHERE statement
//-------------------------------
  
  if( !strlen($particle_id)) $bPK = false;
  
  $sWhere .= "article_id=" . tosql($particle_id, "Number");
//-------------------------------
//-------------------------------
// editorials Open Event begin
// editorials Open Event end
//-------------------------------

//-------------------------------
// Build SQL statement and execute query
//-------------------------------
  $sSQL = "select * from editorials where " . $sWhere;
  // Execute SQL statement
  $db->query($sSQL);
  $bIsUpdateMode = ($bPK && !($sAction == "insert" && $sForm == "editorials") && $db->next_record());
//-------------------------------

//-------------------------------
// Load all fields into variables from recordset or input parameters
//-------------------------------
  if($bIsUpdateMode)
  {
    $fldarticle_id = $db->f("article_id");
//-------------------------------
// Load data from recordset when form displayed first time
//-------------------------------
    if($seditorialsErr == "") 
    {
      $fldarticle_desc = $db->f("article_desc");
      $fldarticle_title = $db->f("article_title");
      $fldeditorial_cat_id = $db->f("editorial_cat_id");
      $flditem_id = $db->f("item_id");
    }
//-------------------------------
// editorials ShowEdit Event begin
// editorials ShowEdit Event end
//-------------------------------
  }
  else
  {
    if($seditorialsErr == "")
    {
      $fldarticle_id = tohtml(get_param("article_id"));
    }
//-------------------------------
// editorials ShowInsert Event begin
// editorials ShowInsert Event end
//-------------------------------
  }
//-------------------------------
// editorials Show Event begin
// editorials Show Event end
//-------------------------------

//-------------------------------
// Show form field
//-------------------------------
    ?>
      <tr>
       <td style="background-color: #FFEAC5; border-style: inset; border-width: 0">
         <font style="font-size: 10pt; color: #000000">Article Description</font>
       </td>
       <td style="background-color: #FFFFFF; border-width: 1">
         <font style="font-size: 10pt; color: #000000"><input type="text" name="article_desc" maxlength="200" value="<?= tohtml($fldarticle_desc) ?>" size="50" ></font>
       </td>
     </tr>
      <tr>
       <td style="background-color: #FFEAC5; border-style: inset; border-width: 0">
         <font style="font-size: 10pt; color: #000000">Article Title</font>
       </td>
       <td style="background-color: #FFFFFF; border-width: 1">
         <font style="font-size: 10pt; color: #000000"><input type="text" name="article_title" maxlength="200" value="<?= tohtml($fldarticle_title) ?>" size="50" ></font>
       </td>
     </tr>
      <tr>
       <td style="background-color: #FFEAC5; border-style: inset; border-width: 0">
         <font style="font-size: 10pt; color: #000000">Editorial Category</font>
       </td>
       <td style="background-color: #FFFFFF; border-width: 1">
         <font style="font-size: 10pt; color: #000000"><select size="1" name="editorial_cat_id">
<?
    $lookup_editorial_cat_id = db_fill_array("select editorial_cat_id, editorial_cat_name from editorial_categories order by 2");

    if(is_array($lookup_editorial_cat_id))
    {
      reset($lookup_editorial_cat_id);
      while(list($key, $value) = each($lookup_editorial_cat_id))
      {
        if($key == $fldeditorial_cat_id)
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
         <font style="font-size: 10pt; color: #000000">Item</font>
       </td>
       <td style="background-color: #FFFFFF; border-width: 1">
         <font style="font-size: 10pt; color: #000000"><select size="1" name="item_id">
<?
    echo "<option value=\"\">" . $sitem_idDisplayValue . "</option>";
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
    <tr><td colspan="2" align="right">
<? if (!$bIsUpdateMode) { ?>
   <input type="hidden" value="insert" name="FormAction">
   <input type="submit" value="Insert" onclick="document.editorials.FormAction.value = 'insert';">
<? } ?>
<? if ($bIsUpdateMode) { ?>
  <input type="hidden" value="update" name="FormAction"/>
  <input type="submit" value="Update" onclick="document.editorials.FormAction.value = 'update';">
  <input type="submit" value="Delete" onclick="document.editorials.FormAction.value = 'delete';">
<? } ?>
  <input type="submit" value="Cancel" onclick="document.editorials.FormAction.value = 'cancel';">
  <input type="hidden" name="FormName" value="editorials">
  
  <input type="hidden" name="PK_article_id" value="<?= $particle_id ?>">  
  <input type="hidden" name="article_id" value="<?= tohtml($fldarticle_id)?>">
  </td></tr>
  </form>
  </table>
<?
  


//-------------------------------
// editorials Close Event begin
// editorials Close Event end
//-------------------------------

//-------------------------------
// editorials Show end
//-------------------------------
}
//===============================
?>