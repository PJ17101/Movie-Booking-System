<?php
/*********************************************************************************
 *       Filename: Default.php
 *       PHP 4.0 build 11/30/2001
 *********************************************************************************/

//-------------------------------
// Default CustomIncludes begin

include ("./common.php");
include ("./Header.php");
include ("./Footer.php");

// Default CustomIncludes end
//-------------------------------

session_start();

//===============================
// Save Page and File Name available into variables
//-------------------------------
$sFileName = "Default.php";
//===============================


//===============================
// Default PageSecurity begin
// Default PageSecurity end
//===============================

//===============================
// Default Open Event begin
// Default Open Event end
//===============================

//===============================
// Default OpenAnyPage Event start
// Default OpenAnyPage Event end
//===============================

//===============================
//Save the name of the form and type of action into the variables
//-------------------------------
$sAction = get_param("FormAction");
$sForm = get_param("FormName");
//===============================

// Default Show begin

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
<?php Search_show() ?>
    
<?php AdvMenu_show() ?>
    <br>
<?php Categories_show() ?>
    <br>
<?php Specials_show() ?>
    </td>
   <td valign="top"><table width="250"><tr><td></td></tr></table>
<?php Recommended_show() ?>
    </td>
   <td valign="top">
<?php What_show() ?>
    
<?php New_show() ?>
    
<?php Weekly_show() ?>
    
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

// Default Show end

//===============================
// Default Close Event begin
// Default Close Event end
//===============================
//********************************************************************************


//===============================
// Display Search Form
//-------------------------------
function Search_show()
{
  global $db;
  global $styles;
  
  global $sForm;
  $sFormTitle = "Search";
  $sActionFileName = "Vehicle.php";
  $scategory_idDisplayValue = "All";

//-------------------------------
// Search Open Event begin
// Search Open Event end
//-------------------------------
//-------------------------------
// Set variables with search parameters
//-------------------------------
  $fldcategory_id = strip(get_param("category_id"));
  $fldname = strip(get_param("name"));

//-------------------------------
// Search Show begin
//-------------------------------


//-------------------------------
// Search Show Event begin
// Search Show Event end
//-------------------------------
?>
    <form method="GET" action="<?= $sActionFileName ?>" name="Search">
    <input type="hidden" name="FormName" value="Search"><input type="hidden" name="FormAction" value="search">
    <table style="width:100%">
     <tr>
      <td style="background-color: #336699; text-align: Center; border-style: outset; border-width: 1" colspan="5"><a name="Search"><font style="font-size: 10pt; color: #FFFFFF; font-weight: bold"><?=$sFormTitle?></font></a></td>
     </tr>
     <tr>
      <td style="background-color: #FFEAC5; border-style: inset; border-width: 0"><font style="font-size: 10pt; color: #000000">Category</font></td>
      <td style="background-color: #FFFFFF; border-width: 1"><select size="1" name="category_id">
<?
    echo "<option value=\"\">" . $scategory_idDisplayValue . "</option>";
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
    
?></select></td>
     </tr>
     <tr>
      <td style="background-color: #FFEAC5; border-style: inset; border-width: 0"><font style="font-size: 10pt; color: #000000">Vehicle</font></td>
      <td style="background-color: #FFFFFF; border-width: 1"><input type="text" name="name" maxlength="10" value="<?= tohtml($fldname) ?>" size="10" ></td>
     </tr>
     <tr>
     <td align="right" colspan="3"><input type="submit" value="Search"></td>
    </tr>
   </table>
   </form>
<?

//-------------------------------
// Search Show end
//-------------------------------

//-------------------------------
// Search Close Event begin
// Search Close Event end
//-------------------------------
//===============================
}


//===============================
// Display Menu Form
//-------------------------------
function AdvMenu_show()
{
  global $db;
  global $styles;
  $sFormTitle = "More Search Options";

//-------------------------------
// AdvMenu Open Event begin
// AdvMenu Open Event end
//-------------------------------

//-------------------------------
// Set URLs
//-------------------------------
  $fldField1 = "AdvSearch.php";
//-------------------------------
// AdvMenu Show begin
//-------------------------------


//-------------------------------
// AdvMenu BeforeShow Event begin
// AdvMenu BeforeShow Event end
//-------------------------------

//-------------------------------
// Show fields
//-------------------------------

?>
    <table style="width:100%">
     <tr>
      <td colspan="1"  style="background-color: #336699; text-align: Center; border-style: outset; border-width: 1"><font style="font-size: 10pt; color: #FFFFFF; font-weight: bold"><?= $sFormTitle ?></font></td>
     </tr>
     <tr>
      <td style="background-color: #FFFFFF; border-width: 1"><a href="<?= $fldField1?>"><font style="font-size: 10pt; color: #000000">Advanced search</font></a></td>
     </tr>
    </table>
<?php

//-------------------------------
// AdvMenu Show end
//-------------------------------
}
//===============================


//===============================
// Display Grid Form
//-------------------------------
function Recommended_show()
{
//-------------------------------
// Initialize variables  
//-------------------------------
  
  
  global $db;
  global $sRecommendedErr;
  global $sFileName;
  global $styles;
  $sWhere = "";
  $sOrder = "";
  $sSQL = "";
  $sFormTitle = "Recommended Rental Vehicles";
  $HasParam = false;
  $iRecordsPerPage = 5;
  $iCounter = 0;
  $iPage = 0;
  $bEof = false;
  $iSort = "";
  $iSorted = "";
  $sDirection = "";
  $sSortParams = "";

  $transit_params = "";
  $form_params = "";

//-------------------------------
// Build ORDER BY statement
//-------------------------------
  $iSort = get_param("FormRecommended_Sorting");
  $iSorted = get_param("FormRecommended_Sorted");
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
      $sSortParams = "FormRecommended_Sorting=" . $iSort . "&FormRecommended_Sorted=" . $iSort . "&";
    }
    else
    {
      $form_sorting = $iSort;
      $sDirection = " ASC";
      $sSortParams = "FormRecommended_Sorting=" . $iSort . "&FormRecommended_Sorted=" . "&";
    }
    if ($iSort == 1) $sOrder = " order by i.name" . $sDirection;
    if ($iSort == 2) $sOrder = " order by i.model" . $sDirection;
    if ($iSort == 3) $sOrder = " order by i.price" . $sDirection;
  }

//-------------------------------
// HTML column headers
//-------------------------------
?>
     <table style="width:100%">
      <tr>
       <td style="background-color: #336699; text-align: Center; border-style: outset; border-width: 1" colspan="1"><a name="Recommended"><font style="font-size: 10pt; color: #FFFFFF; font-weight: bold"><?=$sFormTitle?></font></a></td>
      </tr>
<?


  $sWhere = " WHERE is_recommended=1";


//-------------------------------
// Build base SQL statement
//-------------------------------
  $sSQL = "select i.image_url as i_image_url, " . 
    "i.item_id as i_item_id, " . 
    "i.model as i_model, " . 
    "i.name as i_name, " . 
    "i.price as i_price " . 
    " from items i ";
//-------------------------------

//-------------------------------
// Recommended Open Event begin
// Recommended Open Event end
//-------------------------------

//-------------------------------
// Assemble full SQL statement
//-------------------------------
  $sSQL .= $sWhere . $sOrder;
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
 
//-------------------------------
//  The insert link.
//-------------------------------
?>
    <tr>
     <td colspan="1" style="background-color: #FFFFFF; border-style: inset; border-width: 0"><font style="font-size: 10pt; color: #CE7E00; font-weight: bold">
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
  $iRecordsPerPage = 5;
  $iCounter = 0;
//-------------------------------

//-------------------------------
// Process page scroller
//-------------------------------
  $iPage = get_param("FormRecommended_Page");
  if(!strlen($iPage)) $iPage = 1; else $iPage = intval($iPage);

  if(($iPage - 1) * $iRecordsPerPage != 0)
  {
    do
    {
      $iCounter++;
    } while ($iCounter < ($iPage - 1) * $iRecordsPerPage && $db->next_record());
    $next_record = $db->next_record();
  }

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
    $fldimage_url = $db->f("i_image_url");
    $fldmodel = $db->f("i_model");
    $fldname_URLLink = "VehicleDetail.php";
    $fldname_item_id = $db->f("i_item_id");
    $fldname = $db->f("i_name");
    $fldprice = $db->f("i_price");
    $next_record = $db->next_record();
    
//-------------------------------
// Recommended Show begin
//-------------------------------

//-------------------------------
// Recommended Show Event begin
$fldname = "<img border=\"0\" src=\"" . $fldimage_url . "\"></td><td valign=\"top\"><table width=\"100%\" style=\"width:100%\"><tr><td style=\"background-color: #FFFFFF; border-style: inset; border-width: 0\"><font style=\"font-size: 10pt; color: #CE7E00; font-weight: bold\"><b>" . $fldname . "</b>";
// Recommended Show Event end
//-------------------------------


//-------------------------------
// Process the HTML controls
//-------------------------------
?>      <tr><td><table width="100%" style="width:100%">
      <tr>
       <td style="background-color: #FFFFFF; border-style: inset; border-width: 0"><font style="font-size: 10pt; color: #CE7E00; font-weight: bold"></font></td>
      </tr>
      <tr>
       <td style="background-color: #FFFFFF; border-width: 1"><font style="font-size: 10pt; color: #000000"><a href="<?=$fldname_URLLink?>?item_id=<?=$fldname_item_id?>&<?= $transit_params ?>"><font style="font-size: 10pt; color: #000000"><?=$fldname?></font></a>&nbsp;</font></td>
      </tr>
      <tr>
       <td style="background-color: #FFFFFF; border-style: inset; border-width: 0"><font style="font-size: 10pt; color: #CE7E00; font-weight: bold">Model</font></td>
      </tr>
      <tr>
       <td style="background-color: #FFFFFF; border-width: 1"><font style="font-size: 10pt; color: #000000">
      <?= tohtml($fldmodel) ?>&nbsp;</font></td>
      </tr>
      <tr>
       <td style="background-color: #FFFFFF; border-style: inset; border-width: 0"><font style="font-size: 10pt; color: #CE7E00; font-weight: bold">Rate</font></td>
      </tr>
      <tr>
       <td style="background-color: #FFFFFF; border-width: 1"><font style="font-size: 10pt; color: #000000">
      <?= tohtml($fldprice) ?>&nbsp;</font></td>
      </tr></table></td>
</tr>
</table>
</td></tr><?

//-------------------------------
// Process the record separator
//-------------------------------
    if($next_record  || $iCounter == $iRecordsPerPage - 1)
    {
?>
      <tr>
       <td colspan="1" style="background-color: #FFFFFF; border-width: 1">&nbsp;</td>
      </tr>
<?
    }
//-------------------------------
//-------------------------------
// Recommended Show end
//-------------------------------

//-------------------------------
// Move to the next record and increase record counter
//-------------------------------
    
    $iCounter++;
  }

 
//-------------------------------
//  Grid. The insert link and record navigator.
//-------------------------------
?>
    <tr>
     <td colspan="1" style="background-color: #FFFFFF; border-style: inset; border-width: 0"><font style="font-size: 10pt; color: #CE7E00; font-weight: bold">
<?
  
  // Recommended Navigation begin
  $bEof = $next_record;
  if($bEof || $iPage != 1)
  {
    if ($iPage == 1) {
?>
        <font style="font-size: 10pt; color: #CE7E00; font-weight: bold">Previous</font>
<? }
    else {
?>
        <a href="<?=$sFileName?>?<?=$form_params?><?=$sSortParams?>FormRecommended_Page=<?=$iPage - 1?>#Recommended"><font style="font-size: 10pt; color: #CE7E00; font-weight: bold">Previous</font></a>
<?
    }
    echo "&nbsp;[&nbsp;" . $iPage . "&nbsp;]&nbsp;";
    
    if (!$bEof) {
?>
        <font style="font-size: 10pt; color: #CE7E00; font-weight: bold">Next</font>
<?
    }
    else {
?>
        <a href="<?=$sFileName?>?<?=$form_params?><?=$sSortParams?>FormRecommended_Page=<?=$iPage + 1?>#Recommended"><font style="font-size: 10pt; color: #CE7E00; font-weight: bold">Next</font></a>
<?
    }
  }

//-------------------------------
// Recommended Navigation end
//-------------------------------

//-------------------------------
// Finish form processing
//-------------------------------
  ?>
      </font></td></tr>
    </table>
  <?


//-------------------------------
// Recommended Close Event begin
// Recommended Close Event end
//-------------------------------
}
//===============================


//===============================
// Display Grid Form
//-------------------------------
function What_show()
{
//-------------------------------
// Initialize variables  
//-------------------------------
  
  
  global $db;
  global $sWhatErr;
  global $sFileName;
  global $styles;
  $sWhere = "";
  $sOrder = "";
  $sSQL = "";
  $sFormTitle = "What We're Renting";
  $HasParam = false;
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
       <td style="background-color: #336699; text-align: Center; border-style: outset; border-width: 1" colspan="1"><a name="What"><font style="font-size: 10pt; color: #FFFFFF; font-weight: bold"><?=$sFormTitle?></font></a></td>
      </tr>
<?


  $sWhere = " WHERE editorial_cat_id=1";


//-------------------------------
// Build base SQL statement
//-------------------------------
  $sSQL = "select e.article_desc as e_article_desc, " . 
    "e.article_title as e_article_title, " . 
    "e.item_id as e_item_id " . 
    " from editorials e ";
//-------------------------------

//-------------------------------
// What Open Event begin
// What Open Event end
//-------------------------------

//-------------------------------
// Assemble full SQL statement
//-------------------------------
  $sSQL .= $sWhere . $sOrder;
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
      <td colspan="2" style="background-color: #FFFFFF; border-width: 1"><font style="font-size: 10pt; color: #000000">No records</font></td>
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
    $fldarticle_desc = $db->f("e_article_desc");
    $fldarticle_title_URLLink = "VehicleDetail.php";
    $fldarticle_title_item_id = $db->f("e_item_id");
    $fldarticle_title = $db->f("e_article_title");
    $flditem_id = $db->f("e_item_id");
    $next_record = $db->next_record();
    
//-------------------------------
// What Show begin
//-------------------------------

//-------------------------------
// What Show Event begin
$fldarticle_title = "<b>" . $fldarticle_title . "</b>";
$fldarticle_desc = "<img align=\"left\" border=\"0\" src=\"" . dlookup("items","image_url","item_id=" . $flditem_id) . "\">" . $fldarticle_desc;
// What Show Event end
//-------------------------------


//-------------------------------
// Process the HTML controls
//-------------------------------
?>
      <tr>
       <td style="background-color: #FFFFFF; border-style: inset; border-width: 0"><font style="font-size: 10pt; color: #CE7E00; font-weight: bold"></font></td>
      </tr>
      <tr>
       <td style="background-color: #FFFFFF; border-width: 1"><font style="font-size: 10pt; color: #000000"><a href="<?=$fldarticle_title_URLLink?>?item_id=<?=$fldarticle_title_item_id?>&<?= $transit_params ?>"><font style="font-size: 10pt; color: #000000"><?=$fldarticle_title?></font></a>&nbsp;</font></td>
      </tr>
      <tr>
       <td style="background-color: #FFFFFF; border-style: inset; border-width: 0"><font style="font-size: 10pt; color: #CE7E00; font-weight: bold"></font></td>
      </tr>
      <tr>
       <td style="background-color: #FFFFFF; border-width: 1"><font style="font-size: 10pt; color: #000000">
      <?= $fldarticle_desc ?>&nbsp;</font></td>
      </tr><?

//-------------------------------
// Process the record separator
//-------------------------------
    if($next_record  || $iCounter == $iRecordsPerPage - 1)
    {
?>
      <tr>
       <td colspan="1" style="background-color: #FFFFFF; border-width: 1">&nbsp;</td>
      </tr>
<?
    }
//-------------------------------
//-------------------------------
// What Show end
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
// What Close Event begin
// What Close Event end
//-------------------------------
}
//===============================


//===============================
// Display Grid Form
//-------------------------------
function Categories_show()
{
//-------------------------------
// Initialize variables  
//-------------------------------
  
  
  global $db;
  global $sCategoriesErr;
  global $sFileName;
  global $styles;
  $sWhere = "";
  $sOrder = "";
  $sSQL = "";
  $sFormTitle = "Categories";
  $HasParam = false;
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
       <td style="background-color: #336699; text-align: Center; border-style: outset; border-width: 1" colspan="1"><a name="Categories"><font style="font-size: 10pt; color: #FFFFFF; font-weight: bold"><?=$sFormTitle?></font></a></td>
      </tr>
      <tr>
       <td style="background-color: #FFFFFF; border-style: inset; border-width: 0"><font style="font-size: 10pt; color: #CE7E00; font-weight: bold"></td>
      </tr>
<?




//-------------------------------
// Build base SQL statement
//-------------------------------
  $sSQL = "select c.category_id as c_category_id, " . 
    "c.name as c_name " . 
    " from categories c ";
//-------------------------------

//-------------------------------
// Categories Open Event begin
// Categories Open Event end
//-------------------------------

//-------------------------------
// Assemble full SQL statement
//-------------------------------
  $sSQL .= $sWhere . $sOrder;
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
    $fldname_URLLink = "Vehicle.php";
    $fldname_category_id = $db->f("c_category_id");
    $fldname = $db->f("c_name");
    $next_record = $db->next_record();
    
//-------------------------------
// Categories Show begin
//-------------------------------

//-------------------------------
// Categories Show Event begin
// Categories Show Event end
//-------------------------------


//-------------------------------
// Process the HTML controls
//-------------------------------
?>
      <tr>
       <td style="background-color: #FFFFFF; border-width: 1"><font style="font-size: 10pt; color: #000000"><a href="<?=$fldname_URLLink?>?category_id=<?=$fldname_category_id?>&<?= $transit_params ?>"><font style="font-size: 10pt; color: #000000"><?=$fldname?></font></a>&nbsp;</font></td>
      </tr><?
//-------------------------------
// Categories Show end
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
// Categories Close Event begin
// Categories Close Event end
//-------------------------------
}
//===============================


//===============================
// Display Grid Form
//-------------------------------
function New_show()
{
//-------------------------------
// Initialize variables  
//-------------------------------
  
  
  global $db;
  global $sNewErr;
  global $sFileName;
  global $styles;
  $sWhere = "";
  $sOrder = "";
  $sSQL = "";
  $sFormTitle = "Current News";
  $HasParam = false;
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
       <td style="background-color: #336699; text-align: Center; border-style: outset; border-width: 1" colspan="1"><a name="New"><font style="font-size: 10pt; color: #FFFFFF; font-weight: bold"><?=$sFormTitle?></font></a></td>
      </tr>
<?


  $sWhere = " WHERE editorial_cat_id=2";


//-------------------------------
// Build base SQL statement
//-------------------------------
  $sSQL = "select e.article_desc as e_article_desc, " . 
    "e.article_title as e_article_title, " . 
    "e.item_id as e_item_id " . 
    " from editorials e ";
//-------------------------------

//-------------------------------
// New Open Event begin
// New Open Event end
//-------------------------------

//-------------------------------
// Assemble full SQL statement
//-------------------------------
  $sSQL .= $sWhere . $sOrder;
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
      <td colspan="2" style="background-color: #FFFFFF; border-width: 1"><font style="font-size: 10pt; color: #000000">No records</font></td>
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
    $fldarticle_desc = $db->f("e_article_desc");
    $fldarticle_title_URLLink = "VehicleDetail.php";
    $fldarticle_title_item_id = $db->f("e_item_id");
    $fldarticle_title = $db->f("e_article_title");
    $flditem_id = $db->f("e_item_id");
    $next_record = $db->next_record();
    
//-------------------------------
// New Show begin
//-------------------------------

//-------------------------------
// New Show Event begin
$fldarticle_title = "<b>" . $fldarticle_title . "</b>";
$fldarticle_desc = "<img align=\"left\" border=\"0\" src=\"" . dlookup("items","image_url","item_id=" . $flditem_id) . "\">" . $fldarticle_desc;
// New Show Event end
//-------------------------------


//-------------------------------
// Process the HTML controls
//-------------------------------
?>
      <tr>
       <td style="background-color: #FFFFFF; border-style: inset; border-width: 0"><font style="font-size: 10pt; color: #CE7E00; font-weight: bold"></font></td>
      </tr>
      <tr>
       <td style="background-color: #FFFFFF; border-width: 1"><font style="font-size: 10pt; color: #000000"><a href="<?=$fldarticle_title_URLLink?>?item_id=<?=$fldarticle_title_item_id?>&<?= $transit_params ?>"><font style="font-size: 10pt; color: #000000"><?=$fldarticle_title?></font></a>&nbsp;</font></td>
      </tr>
      <tr>
       <td style="background-color: #FFFFFF; border-style: inset; border-width: 0"><font style="font-size: 10pt; color: #CE7E00; font-weight: bold"></font></td>
      </tr>
      <tr>
       <td style="background-color: #FFFFFF; border-width: 1"><font style="font-size: 10pt; color: #000000">
      <?= $fldarticle_desc ?>&nbsp;</font></td>
      </tr><?

//-------------------------------
// Process the record separator
//-------------------------------
    if($next_record  || $iCounter == $iRecordsPerPage - 1)
    {
?>
      <tr>
       <td colspan="1" style="background-color: #FFFFFF; border-width: 1">&nbsp;</td>
      </tr>
<?
    }
//-------------------------------
//-------------------------------
// New Show end
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
// New Close Event begin
// New Close Event end
//-------------------------------
}
//===============================


//===============================
// Display Grid Form
//-------------------------------
function Weekly_show()
{
//-------------------------------
// Initialize variables  
//-------------------------------
  
  
  global $db;
  global $sWeeklyErr;
  global $sFileName;
  global $styles;
  $sWhere = "";
  $sOrder = "";
  $sSQL = "";
  $sFormTitle = "This Week's Featured Vehicle";
  $HasParam = false;
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
       <td style="background-color: #336699; text-align: Center; border-style: outset; border-width: 1" colspan="1"><a name="Weekly"><font style="font-size: 10pt; color: #FFFFFF; font-weight: bold"><?=$sFormTitle?></font></a></td>
      </tr>
<?


  $sWhere = " WHERE editorial_cat_id=3";


//-------------------------------
// Build base SQL statement
//-------------------------------
  $sSQL = "select e.article_desc as e_article_desc, " . 
    "e.article_title as e_article_title, " . 
    "e.item_id as e_item_id " . 
    " from editorials e ";
//-------------------------------

//-------------------------------
// Weekly Open Event begin
// Weekly Open Event end
//-------------------------------

//-------------------------------
// Assemble full SQL statement
//-------------------------------
  $sSQL .= $sWhere . $sOrder;
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
      <td colspan="2" style="background-color: #FFFFFF; border-width: 1"><font style="font-size: 10pt; color: #000000">No records</font></td>
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
    $fldarticle_desc = $db->f("e_article_desc");
    $fldarticle_title_URLLink = "VehicleDetail.php";
    $fldarticle_title_item_id = $db->f("e_item_id");
    $fldarticle_title = $db->f("e_article_title");
    $flditem_id = $db->f("e_item_id");
    $next_record = $db->next_record();
    
//-------------------------------
// Weekly Show begin
//-------------------------------

//-------------------------------
// Weekly Show Event begin
$fldarticle_title = "<b>" . $fldarticle_title . "</b>";
$fldarticle_desc = "<img align=\"left\" border=\"0\" src=\"" . dlookup("items","image_url","item_id=" . $flditem_id) . "\">" . $fldarticle_desc;
// Weekly Show Event end
//-------------------------------


//-------------------------------
// Process the HTML controls
//-------------------------------
?>      <tr><td><table width="100%" style="width:100%">
      <tr>
       <td style="background-color: #FFFFFF; border-style: inset; border-width: 0"><font style="font-size: 10pt; color: #CE7E00; font-weight: bold"></font></td>
      </tr>
      <tr>
       <td style="background-color: #FFFFFF; border-width: 1"><font style="font-size: 10pt; color: #000000"><a href="<?=$fldarticle_title_URLLink?>?item_id=<?=$fldarticle_title_item_id?>&<?= $transit_params ?>"><font style="font-size: 10pt; color: #000000"><?=$fldarticle_title?></font></a>&nbsp;</font></td>
      </tr>
      <tr>
       <td style="background-color: #FFFFFF; border-style: inset; border-width: 0"><font style="font-size: 10pt; color: #CE7E00; font-weight: bold"></font></td>
      </tr>
      <tr>
       <td style="background-color: #FFFFFF; border-width: 1"><font style="font-size: 10pt; color: #000000">
      <?= $fldarticle_desc ?>&nbsp;</font></td>
      </tr></table></td></tr><?

//-------------------------------
// Process the record separator
//-------------------------------
    if($next_record  || $iCounter == $iRecordsPerPage - 1)
    {
?>
      <tr>
       <td colspan="1" style="background-color: #FFFFFF; border-width: 1">&nbsp;</td>
      </tr>
<?
    }
//-------------------------------
//-------------------------------
// Weekly Show end
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
// Weekly Close Event begin
// Weekly Close Event end
//-------------------------------
}
//===============================


//===============================
// Display Grid Form
//-------------------------------
function Specials_show()
{
//-------------------------------
// Initialize variables  
//-------------------------------
  
  
  global $db;
  global $sSpecialsErr;
  global $sFileName;
  global $styles;
  $sWhere = "";
  $sOrder = "";
  $sSQL = "";
  $sFormTitle = "Weekly Special Bulletin";
  $HasParam = false;
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
       <td style="background-color: #336699; text-align: Center; border-style: outset; border-width: 1" colspan="1"><a name="Specials"><font style="font-size: 10pt; color: #FFFFFF; font-weight: bold"><?=$sFormTitle?></font></a></td>
      </tr>
<?


  $sWhere = " WHERE editorial_cat_id=4";


//-------------------------------
// Build base SQL statement
//-------------------------------
  $sSQL = "select e.article_desc as e_article_desc, " . 
    "e.article_title as e_article_title " . 
    " from editorials e ";
//-------------------------------

//-------------------------------
// Specials Open Event begin
// Specials Open Event end
//-------------------------------

//-------------------------------
// Assemble full SQL statement
//-------------------------------
  $sSQL .= $sWhere . $sOrder;
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
      <td colspan="2" style="background-color: #FFFFFF; border-width: 1"><font style="font-size: 10pt; color: #000000">No records</font></td>
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
    $fldarticle_desc = $db->f("e_article_desc");
    $fldarticle_title = $db->f("e_article_title");
    $next_record = $db->next_record();
    
//-------------------------------
// Specials Show begin
//-------------------------------

//-------------------------------
// Specials Show Event begin
// Specials Show Event end
//-------------------------------


//-------------------------------
// Process the HTML controls
//-------------------------------
?>
      <tr>
       <td style="background-color: #FFFFFF; border-style: inset; border-width: 0"><font style="font-size: 10pt; color: #CE7E00; font-weight: bold"></font></td>
      </tr>
      <tr>
       <td style="background-color: #FFFFFF; border-width: 1"><font style="font-size: 10pt; color: #000000">
      <?= $fldarticle_title ?>&nbsp;</font></td>
      </tr>
      <tr>
       <td style="background-color: #FFFFFF; border-style: inset; border-width: 0"><font style="font-size: 10pt; color: #CE7E00; font-weight: bold"></font></td>
      </tr>
      <tr>
       <td style="background-color: #FFFFFF; border-width: 1"><font style="font-size: 10pt; color: #000000">
      <?= $fldarticle_desc ?>&nbsp;</font></td>
      </tr><?

//-------------------------------
// Process the record separator
//-------------------------------
    if($next_record  || $iCounter == $iRecordsPerPage - 1)
    {
?>
      <tr>
       <td colspan="1" style="background-color: #FFFFFF; border-width: 1">&nbsp;</td>
      </tr>
<?
    }
//-------------------------------
//-------------------------------
// Specials Show end
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
// Specials Close Event begin
// Specials Close Event end
//-------------------------------
}
//===============================

?>