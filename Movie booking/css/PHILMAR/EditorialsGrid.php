<?php
/*********************************************************************************
 *       Filename: EditorialsGrid.php
 *       PHP 4.0 build 11/30/2001
 *********************************************************************************/

//-------------------------------
// EditorialsGrid CustomIncludes begin

include ("./common.php");
include ("./Header.php");
include ("./Footer.php");

// EditorialsGrid CustomIncludes end
//-------------------------------

session_start();

//===============================
// Save Page and File Name available into variables
//-------------------------------
$sFileName = "EditorialsGrid.php";
//===============================


//===============================
// EditorialsGrid PageSecurity begin
check_security(2);
// EditorialsGrid PageSecurity end
//===============================

//===============================
// EditorialsGrid Open Event begin
// EditorialsGrid Open Event end
//===============================

//===============================
// EditorialsGrid OpenAnyPage Event start
// EditorialsGrid OpenAnyPage Event end
//===============================

//===============================
//Save the name of the form and type of action into the variables
//-------------------------------
$sAction = get_param("FormAction");
$sForm = get_param("FormName");
//===============================

// EditorialsGrid Show begin

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

// EditorialsGrid Show end

//===============================
// EditorialsGrid Close Event begin
// EditorialsGrid Close Event end
//===============================
//********************************************************************************


//===============================
// Display Grid Form
//-------------------------------
function editorials_show()
{
//-------------------------------
// Initialize variables  
//-------------------------------
  
  
  global $db;
  global $seditorialsErr;
  global $sFileName;
  global $styles;
  $sWhere = "";
  $sOrder = "";
  $sSQL = "";
  $sFormTitle = "Editorials";
  $HasParam = false;
  $iRecordsPerPage = 20;
  $iCounter = 0;
  $iPage = 0;
  $bEof = false;
  $iSort = "";
  $iSorted = "";
  $sDirection = "";
  $sSortParams = "";
  $sActionFileName = "EditorialsRecord.php";

  $transit_params = "";
  $form_params = "";

//-------------------------------
// Build ORDER BY statement
//-------------------------------
  $sOrder = " order by e.article_title Asc";
  $iSort = get_param("Formeditorials_Sorting");
  $iSorted = get_param("Formeditorials_Sorted");
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
      $sSortParams = "Formeditorials_Sorting=" . $iSort . "&Formeditorials_Sorted=" . $iSort . "&";
    }
    else
    {
      $form_sorting = $iSort;
      $sDirection = " ASC";
      $sSortParams = "Formeditorials_Sorting=" . $iSort . "&Formeditorials_Sorted=" . "&";
    }
    if ($iSort == 1) $sOrder = " order by e.article_title" . $sDirection;
    if ($iSort == 2) $sOrder = " order by e1.editorial_cat_name" . $sDirection;
    if ($iSort == 3) $sOrder = " order by i.name" . $sDirection;
  }

//-------------------------------
// HTML column headers
//-------------------------------
?>
     <table style="width:100%">
      <tr>
       <td style="background-color: #336699; text-align: Center; border-style: outset; border-width: 1" colspan="3"><a name="editorials"><font style="font-size: 10pt; color: #FFFFFF; font-weight: bold"><?=$sFormTitle?></font></a></td>
      </tr>
      <tr>
       <td style="background-color: #FFFFFF; border-style: inset; border-width: 0"><a href="<?=$sFileName?>?<?=$form_params?>Formeditorials_Sorting=1&Formeditorials_Sorted=<?=$form_sorting?>&"><font style="font-size: 10pt; color: #CE7E00; font-weight: bold">Title</font></a></td>
       <td style="background-color: #FFFFFF; border-style: inset; border-width: 0"><a href="<?=$sFileName?>?<?=$form_params?>Formeditorials_Sorting=2&Formeditorials_Sorted=<?=$form_sorting?>&"><font style="font-size: 10pt; color: #CE7E00; font-weight: bold">Editorial Category</font></a></td>
       <td style="background-color: #FFFFFF; border-style: inset; border-width: 0"><a href="<?=$sFileName?>?<?=$form_params?>Formeditorials_Sorting=3&Formeditorials_Sorted=<?=$form_sorting?>&"><font style="font-size: 10pt; color: #CE7E00; font-weight: bold">Item</font></a></td>
      </tr>
<?




//-------------------------------
// Build base SQL statement
//-------------------------------
  $sSQL = "select e.article_id as e_article_id, " . 
    "e.article_title as e_article_title, " . 
    "e.editorial_cat_id as e_editorial_cat_id, " . 
    "e.item_id as e_item_id, " . 
    "e1.editorial_cat_id as e1_editorial_cat_id, " . 
    "e1.editorial_cat_name as e1_editorial_cat_name, " . 
    "i.item_id as i_item_id, " . 
    "i.name as i_name " . 
    " from editorials e, editorial_categories e1, items i" . 
    " where e1.editorial_cat_id=e.editorial_cat_id and i.item_id=e.item_id  ";
//-------------------------------

//-------------------------------
// editorials Open Event begin
// editorials Open Event end
//-------------------------------

//-------------------------------
// Assemble full SQL statement
//-------------------------------
  $sSQL .= $sWhere . $sOrder;
//-------------------------------

  

//-------------------------------
// Process the link to the record page
//-------------------------------
  $form_action = $sActionFileName;
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
     <td colspan="3" style="background-color: #FFFFFF; border-style: inset; border-width: 0"><font style="font-size: 10pt; color: #CE7E00; font-weight: bold"><a href="<?= $form_action ?>?<?= $transit_params ?>"><font style="font-size: 10pt; color: #CE7E00; font-weight: bold">Insert</font></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
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
// Process page scroller
//-------------------------------
  $iPage = get_param("Formeditorials_Page");
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
    $fldarticle_id = $db->f("e_article_id");
    $fldarticle_title_URLLink = "EditorialsRecord.php";
    $fldarticle_title_article_id = $db->f("e_article_id");
    $fldarticle_title = $db->f("e_article_title");
    $fldeditorial_cat_id = $db->f("e1_editorial_cat_name");
    $flditem_id = $db->f("i_name");
    $next_record = $db->next_record();
    
//-------------------------------
// editorials Show begin
//-------------------------------

//-------------------------------
// editorials Show Event begin
// editorials Show Event end
//-------------------------------


//-------------------------------
// Process the HTML controls
//-------------------------------
?>
      <tr>
       <td style="background-color: #FFFFFF; border-width: 1"><font style="font-size: 10pt; color: #000000"><a href="<?=$fldarticle_title_URLLink?>?article_id=<?=$fldarticle_title_article_id?>&<?= $transit_params ?>"><font style="font-size: 10pt; color: #000000"><?=$fldarticle_title?></font></a>&nbsp;</font></td>
       <td style="background-color: #FFFFFF; border-width: 1"><font style="font-size: 10pt; color: #000000">
      <?= tohtml($fldeditorial_cat_id) ?>&nbsp;</font></td>
       <td style="background-color: #FFFFFF; border-width: 1"><font style="font-size: 10pt; color: #000000">
      <?= tohtml($flditem_id) ?>&nbsp;</font></td>
      </tr><?
//-------------------------------
// editorials Show end
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
     <td colspan="3" style="background-color: #FFFFFF; border-style: inset; border-width: 0"><font style="font-size: 10pt; color: #CE7E00; font-weight: bold"><a href="<?= $form_action ?>?<?= $transit_params ?>"><font style="font-size: 10pt; color: #CE7E00; font-weight: bold">Insert</font></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<?
  // editorials Navigation begin
  $bEof = $next_record;
  if($bEof || $iPage != 1)
  {
    if ($iPage == 1) {
?>
        <font style="font-size: 10pt; color: #CE7E00; font-weight: bold">Previous</font>
<? }
    else {
?>
        <a href="<?=$sFileName?>?<?=$form_params?><?=$sSortParams?>Formeditorials_Page=<?=$iPage - 1?>#editorials"><font style="font-size: 10pt; color: #CE7E00; font-weight: bold">Previous</font></a>
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
        <a href="<?=$sFileName?>?<?=$form_params?><?=$sSortParams?>Formeditorials_Page=<?=$iPage + 1?>#editorials"><font style="font-size: 10pt; color: #CE7E00; font-weight: bold">Next</font></a>
<?
    }
  }

//-------------------------------
// editorials Navigation end
//-------------------------------

//-------------------------------
// Finish form processing
//-------------------------------
  ?>
      </font></td></tr>
    </table>
  <?


//-------------------------------
// editorials Close Event begin
// editorials Close Event end
//-------------------------------
}
//===============================

?>