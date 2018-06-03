<?php
/*********************************************************************************
 *       Filename: VehicleMaint.php
 *       PHP 4.0 build 11/30/2001
 *********************************************************************************/

//-------------------------------
// VehicleMaint CustomIncludes begin

include ("./common.php");
include ("./Header.php");
include ("./Footer.php");

// VehicleMaint CustomIncludes end
//-------------------------------

session_start();

//===============================
// Save Page and File Name available into variables
//-------------------------------
$sFileName = "VehicleMaint.php";
//===============================


//===============================
// VehicleMaint PageSecurity begin
check_security(2);
// VehicleMaint PageSecurity end
//===============================

//===============================
// VehicleMaint Open Event begin
// VehicleMaint Open Event end
//===============================

//===============================
// VehicleMaint OpenAnyPage Event start
// VehicleMaint OpenAnyPage Event end
//===============================

//===============================
//Save the name of the form and type of action into the variables
//-------------------------------
$sAction = get_param("FormAction");
$sForm = get_param("FormName");
//===============================

// VehicleMaint Show begin

//===============================
// Perform the form's action
//-------------------------------
// Initialize error variables
//-------------------------------
$sVehicleErr = "";

//-------------------------------
// Select the FormAction
//-------------------------------
switch ($sForm) {
  case "Vehicle":
    Vehicle_action($sAction);
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
<?php Vehicle_show() ?>
    <SCRIPT Language="JavaScript">
if (document.forms["Book"])
document.Book.onsubmit=delconf;
function delconf() {
if (document.Book.FormAction.value == 'delete')
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

// VehicleMaint Show end

//===============================
// VehicleMaint Close Event begin
// VehicleMaint Close Event end
//===============================
//********************************************************************************


//===============================
// Action of the Record Form
//-------------------------------
function Vehicle_action($sAction)
{
//-------------------------------
// Initialize variables  
//-------------------------------
  global $db;
  
  global $sForm;
  global $sVehicleErr;
  global $styles;
  $bExecSQL = true;
  $sActionFileName = "";
  $sParams = "?";
  $sWhere = "";
  $bErr = false;
  $pPKitem_id = "";
  $fldname = "";
  $fldmodel = "";
  $fldcategory_id = "";
  $fldprice = "";
  $fldproduct_url = "";
  $fldimage_url = "";
  $fldnotes = "";
  $fldis_recommended = "";
//-------------------------------

//-------------------------------
// Vehicle Action begin
//-------------------------------
  $sActionFileName = "AdminVehicle.php";
  $sParams .= "category_id=" . urlencode(get_param("Trn_category_id"));

//-------------------------------
// CANCEL action
//-------------------------------
  if($sAction == "cancel")
  {

//-------------------------------
// Vehicle BeforeCancel Event begin
// Vehicle BeforeCancel Event end
//-------------------------------
    header("Location: " . $sActionFileName . $sParams);
  }
//-------------------------------


//-------------------------------
// Build WHERE statement
//-------------------------------
  if($sAction == "update" || $sAction == "delete") 
  {
    $pPKitem_id = get_param("PK_item_id");
    if( !strlen($pPKitem_id)) return;
    $sWhere = "item_id=" . tosql($pPKitem_id, "Number");
  }
//-------------------------------


//-------------------------------
// Load all form fields into variables
//-------------------------------
  $fldname = get_param("name");
  $fldmodel = get_param("model");
  $fldcategory_id = get_param("category_id");
  $fldprice = get_param("price");
  $fldproduct_url = get_param("product_url");
  $fldimage_url = get_param("image_url");
  $fldnotes = get_param("notes");
  $fldis_recommended = get_checkbox_value(get_param("is_recommended"), "1", "0", "Number");

//-------------------------------
// Validate fields
//-------------------------------
  if($sAction == "insert" || $sAction == "update") 
  {
    if(!strlen($fldname))
      $sVehicleErr .= "The value in field Vehicle is required.<br>";
    
    if(!strlen($fldcategory_id))
      $sVehicleErr .= "The value in field Category is required.<br>";
    
    if(!strlen($fldprice))
      $sVehicleErr .= "The value in field Rate is required.<br>";
    
    if(!is_number($fldcategory_id))
      $sVehicleErr .= "The value in field Category is incorrect.<br>";
    
    if(!is_number($fldprice))
      $sVehicleErr .= "The value in field Rate is incorrect.<br>";
    
//-------------------------------
// Vehicle Check Event begin
// Vehicle Check Event end
//-------------------------------
    if(strlen($sVehicleErr)) return;
  }
//-------------------------------


//-------------------------------
// Create SQL statement
//-------------------------------
  switch(strtolower($sAction)) 
  {
    case "insert":
//-------------------------------
// Vehicle Insert Event begin
// Vehicle Insert Event end
//-------------------------------
        $sSQL = "insert into items (" . 
          "name," . 
          "model," . 
          "category_id," . 
          "price," . 
          "product_url," . 
          "image_url," . 
          "notes," . 
          "is_recommended)" . 
          " values (" . 
          tosql($fldname, "Text") . "," . 
          tosql($fldmodel, "Text") . "," . 
          tosql($fldcategory_id, "Number") . "," . 
          tosql($fldprice, "Number") . "," . 
          tosql($fldproduct_url, "Text") . "," . 
          tosql($fldimage_url, "Text") . "," . 
          tosql($fldnotes, "Text") . "," . 
          $fldis_recommended . 
          ")";
    break;
    case "update":

//-------------------------------
// Vehicle Update Event begin
// Vehicle Update Event end
//-------------------------------
        $sSQL = "update items set " .
          "name=" . tosql($fldname, "Text") .
          ",model=" . tosql($fldmodel, "Text") .
          ",category_id=" . tosql($fldcategory_id, "Number") .
          ",price=" . tosql($fldprice, "Number") .
          ",product_url=" . tosql($fldproduct_url, "Text") .
          ",image_url=" . tosql($fldimage_url, "Text") .
          ",notes=" . tosql($fldnotes, "Text") .
          ",is_recommended=" . $fldis_recommended;
        $sSQL .= " where " . $sWhere;
    break;
    case "delete":
//-------------------------------
// Vehicle Delete Event begin
// Vehicle Delete Event end
//-------------------------------
        $sSQL = "delete from items where " . $sWhere;
    break;
  }
//-------------------------------
//-------------------------------
// Vehicle BeforeExecute Event begin
// Vehicle BeforeExecute Event end
//-------------------------------

//-------------------------------
// Execute SQL statement
//-------------------------------
  if(strlen($sVehicleErr)) return;
  if($bExecSQL)
    $db->query($sSQL);
  header("Location: " . $sActionFileName . $sParams);

//-------------------------------
// Vehicle Action end
//-------------------------------
}

//===============================
// Display Record Form
//-------------------------------
function Vehicle_show()
{
  global $db;
  
  global $sAction;
  global $sForm;
  global $sFileName;
  global $sVehicleErr;
  global $styles;
  
  $flditem_id = "";
  $fldname = "";
  $fldmodel = "";
  $fldcategory_id = "";
  $fldprice = "";
  $fldproduct_url = "";
  $fldimage_url = "";
  $fldnotes = "";
  $fldis_recommended = "";
//-------------------------------
// Vehicle Show begin
//-------------------------------
  $sFormTitle = "Vehicle";
  $sWhere = "";
  $bPK = true;

?>
   
   <table style="width:100%">
   <form method="POST" action="<?= $sFileName ?>" name="Vehicle">
   <tr><td style="background-color: #336699; text-align: Center; border-style: outset; border-width: 1" colspan="2"><font style="font-size: 10pt; color: #FFFFFF; font-weight: bold"><?=$sFormTitle?></font></td></tr>
   <? if ($sVehicleErr) { ?>
		<tr><td style="background-color: #FFFFFF; border-width: 1" colspan="2"><font style="font-size: 10pt; color: #000000"><?= $sVehicleErr ?></font></td></tr>
	 <? } ?>
<? 

//-------------------------------
// Load primary key and form parameters
//-------------------------------
  if($sVehicleErr == "")
  {
    $fldcategory_id = get_param("category_id");
    $flditem_id = get_param("item_id");
    $trn_category_id = get_param("category_id");
    $pitem_id = get_param("item_id");
  }
  else
  {
    $flditem_id = strip(get_param("item_id"));
    $fldname = strip(get_param("name"));
    $fldmodel = strip(get_param("model"));
    $fldcategory_id = strip(get_param("category_id"));
    $fldprice = strip(get_param("price"));
    $fldproduct_url = strip(get_param("product_url"));
    $fldimage_url = strip(get_param("image_url"));
    $fldnotes = strip(get_param("notes"));
    $fldis_recommended = get_checkbox_value(get_param("is_recommended"), "1", "0", "Number");
    $trn_category_id = get_param("Trn_category_id");
    $pitem_id = get_param("PK_item_id");
  }
//-------------------------------

//-------------------------------
// Load all form fields

//-------------------------------

//-------------------------------
// Build WHERE statement
//-------------------------------
  
  if( !strlen($pitem_id)) $bPK = false;
  
  $sWhere .= "item_id=" . tosql($pitem_id, "Number");
//-------------------------------
//-------------------------------
// Vehicle Open Event begin
// Vehicle Open Event end
//-------------------------------

//-------------------------------
// Build SQL statement and execute query
//-------------------------------
  $sSQL = "select * from items where " . $sWhere;
  // Execute SQL statement
  $db->query($sSQL);
  $bIsUpdateMode = ($bPK && !($sAction == "insert" && $sForm == "Vehicle") && $db->next_record());
//-------------------------------

//-------------------------------
// Load all fields into variables from recordset or input parameters
//-------------------------------
  if($bIsUpdateMode)
  {
    $flditem_id = $db->f("item_id");
//-------------------------------
// Load data from recordset when form displayed first time
//-------------------------------
    if($sVehicleErr == "") 
    {
      $fldname = $db->f("name");
      $fldmodel = $db->f("model");
      $fldcategory_id = $db->f("category_id");
      $fldprice = $db->f("price");
      $fldproduct_url = $db->f("product_url");
      $fldimage_url = $db->f("image_url");
      $fldnotes = $db->f("notes");
      $fldis_recommended = $db->f("is_recommended");
    }
//-------------------------------
// Vehicle ShowEdit Event begin
// Vehicle ShowEdit Event end
//-------------------------------
  }
  else
  {
    if($sVehicleErr == "")
    {
      $flditem_id = tohtml(get_param("item_id"));
      $fldcategory_id = tohtml(get_param("category_id"));
      $fldis_recommended= "0";
    }
//-------------------------------
// Vehicle ShowInsert Event begin
// Vehicle ShowInsert Event end
//-------------------------------
  }
//-------------------------------
// Vehicle Show Event begin
// Vehicle Show Event end
//-------------------------------

//-------------------------------
// Show form field
//-------------------------------
    ?>
      <tr>
       <td style="background-color: #FFEAC5; border-style: inset; border-width: 0">
         <font style="font-size: 10pt; color: #000000">Vehicle</font>
       </td>
       <td style="background-color: #FFFFFF; border-width: 1">
         <font style="font-size: 10pt; color: #000000"><input type="text" name="name" maxlength="100" value="<?= tohtml($fldname) ?>" size="30" ></font>
       </td>
     </tr>
      <tr>
       <td style="background-color: #FFEAC5; border-style: inset; border-width: 0">
         <font style="font-size: 10pt; color: #000000">Model</font>
       </td>
       <td style="background-color: #FFFFFF; border-width: 1">
         <font style="font-size: 10pt; color: #000000"><input type="text" name="model" maxlength="100" value="<?= tohtml($fldmodel) ?>" size="30" ></font>
       </td>
     </tr>
      <tr>
       <td style="background-color: #FFEAC5; border-style: inset; border-width: 0">
         <font style="font-size: 10pt; color: #000000">Category</font>
       </td>
       <td style="background-color: #FFFFFF; border-width: 1">
         <font style="font-size: 10pt; color: #000000"><select size="1" name="category_id">
<?
    $lookup_category_id = db_fill_array("select category_id, name from categories order by 2");

    if(is_array($lookup_category_id))
    {
      reset($lookup_category_id);
      while(list($key, $value) = each($lookup_category_id))
      {
        if($key == $fldcategory_id)
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
         <font style="font-size: 10pt; color: #000000">Rate</font>
       </td>
       <td style="background-color: #FFFFFF; border-width: 1">
         <font style="font-size: 10pt; color: #000000"><input type="text" name="price" maxlength="10" value="<?= tohtml($fldprice) ?>" size="10" ></font>
       </td>
     </tr>
      <tr>
       <td style="background-color: #FFEAC5; border-style: inset; border-width: 0">
         <font style="font-size: 10pt; color: #000000">Product URL</font>
       </td>
       <td style="background-color: #FFFFFF; border-width: 1">
         <font style="font-size: 10pt; color: #000000"><input type="text" name="product_url" maxlength="100" value="<?= tohtml($fldproduct_url) ?>" size="40" ></font>
       </td>
     </tr>
      <tr>
       <td style="background-color: #FFEAC5; border-style: inset; border-width: 0">
         <font style="font-size: 10pt; color: #000000">Image URL</font>
       </td>
       <td style="background-color: #FFFFFF; border-width: 1">
         <font style="font-size: 10pt; color: #000000"><input type="text" name="image_url" maxlength="100" value="<?= tohtml($fldimage_url) ?>" size="40" ></font>
       </td>
     </tr>
      <tr>
       <td style="background-color: #FFEAC5; border-style: inset; border-width: 0">
         <font style="font-size: 10pt; color: #000000">Notes</font>
       </td>
       <td style="background-color: #FFFFFF; border-width: 1">
         <font style="font-size: 10pt; color: #000000"><textarea name="notes" cols="60" rows="8"><?=tohtml($fldnotes)?></textarea></font>
       </td>
     </tr>
      <tr>
       <td style="background-color: #FFEAC5; border-style: inset; border-width: 0">
         <font style="font-size: 10pt; color: #000000">Recommended</font>
       </td>
       <td style="background-color: #FFFFFF; border-width: 1">
         <font style="font-size: 10pt; color: #000000">
      <? if(strtolower($fldis_recommended) == strtolower("1")) { ?>
        <input CHECKED type="checkbox" name="is_recommended">
      <? } else {?>
        <input type="checkbox" name="is_recommended">
      <? } ?>
</font>
       </td>
     </tr>
    <tr><td colspan="2" align="right">
<? if (!$bIsUpdateMode) { ?>
   <input type="hidden" value="insert" name="FormAction">
   <input type="submit" value="Add" onclick="document.Vehicle.FormAction.value = 'insert';">
<? } ?>
<? if ($bIsUpdateMode) { ?>
  <input type="hidden" value="update" name="FormAction"/>
  <input type="submit" value="Update" onclick="document.Vehicle.FormAction.value = 'update';">
  <input type="submit" value="Delete" onclick="document.Vehicle.FormAction.value = 'delete';">
<? } ?>
  <input type="submit" value="Cancel" onclick="document.Vehicle.FormAction.value = 'cancel';">
  <input type="hidden" name="FormName" value="Vehicle">
  
  <input type="hidden" name="Trn_category_id" value="<?= $trn_category_id ?>">
  <input type="hidden" name="PK_item_id" value="<?= $pitem_id ?>">  
  <input type="hidden" name="item_id" value="<?= tohtml($flditem_id)?>">
  </td></tr>
  </form>
  </table>
<?
  


//-------------------------------
// Vehicle Close Event begin
// Vehicle Close Event end
//-------------------------------

//-------------------------------
// Vehicle Show end
//-------------------------------
}
//===============================
?>