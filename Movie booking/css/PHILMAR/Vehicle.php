<?php
/*********************************************************************************
 *       Filename: Vehicle.php
 *       PHP 4.0 build 11/30/2001
 *********************************************************************************/

//-------------------------------
// Vehicle CustomIncludes begin

include ("./common.php");
include ("./Header.php");
include ("./Footer.php");

// Vehicle CustomIncludes end
//-------------------------------

session_start();

//===============================
// Save Page and File Name available into variables
//-------------------------------
$sFileName = "Vehicle.php";
//===============================


//===============================
// Vehicle PageSecurity begin
// Vehicle PageSecurity end
//===============================

//===============================
// Vehicle Open Event begin
// Vehicle Open Event end
//===============================

//===============================
// Vehicle OpenAnyPage Event start
// Vehicle OpenAnyPage Event end
//===============================

//===============================
//Save the name of the form and type of action into the variables
//-------------------------------
$sAction = get_param("FormAction");
$sForm = get_param("FormName");
//===============================

// Vehicle Show begin

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
    
   </td>
   <td valign="top">
<?php AdvMenu_show() ?>
    
   </td>
  </tr>
 </table>
 <table>
  <tr>
   <td valign="top">
<?php Total_show() ?>
    
   </td>
  </tr>
 </table>
 <table>
  <tr>
   <td valign="top">
<?php Results_show() ?>
    
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

// Vehicle Show end

//===============================
// Vehicle Close Event begin
// Vehicle Close Event end
//===============================
//********************************************************************************


//===============================
// Display Grid Form
//-------------------------------
function Results_show()
{
//-------------------------------
// Initialize variables  
//-------------------------------
  
  
  global $db;
  global $sResultsErr;
  global $sFileName;
  global $styles;
  $sWhere = "";
  $sOrder = "";
  $sSQL = "";
  $sFormTitle = "Search Results";
  $HasParam = false;
  $iRecordsPerPage = 20;
  $iCounter = 0;
  $iPage = 0;
  $bEof = false;
  $iSort = "";
  $iSorted = "";
  $sDirection = "";
  $sSortParams = "";

  $transit_params = "category_id=" . tourl(get_param("category_id")) . "&model=" . tourl(get_param("model")) . "&name=" . tourl(get_param("name")) . "&pricemax=" . tourl(get_param("pricemax")) . "&pricemin=" . tourl(get_param("pricemin")) . "&";
  $form_params = "category_id=" . tourl(get_param("category_id")) . "&model=" . tourl(get_param("model")) . "&name=" . tourl(get_param("name")) . "&pricemax=" . tourl(get_param("pricemax")) . "&pricemin=" . tourl(get_param("pricemin")) . "&";

//-------------------------------
// Build ORDER BY statement
//-------------------------------
  $sOrder = " order by i.name Asc";
  $iSort = get_param("FormResults_Sorting");
  $iSorted = get_param("FormResults_Sorted");
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
      $sSortParams = "FormResults_Sorting=" . $iSort . "&FormResults_Sorted=" . $iSort . "&";
    }
    else
    {
      $form_sorting = $iSort;
      $sDirection = " ASC";
      $sSortParams = "FormResults_Sorting=" . $iSort . "&FormResults_Sorted=" . "&";
    }
    if ($iSort == 1) $sOrder = " order by i.name" . $sDirection;
    if ($iSort == 2) $sOrder = " order by i.model" . $sDirection;
    if ($iSort == 3) $sOrder = " order by i.price" . $sDirection;
    if ($iSort == 4) $sOrder = " order by c.name" . $sDirection;
  }

//-------------------------------
// HTML column headers
//-------------------------------
?>
     <table style="width:100%">
      <tr>
       <td style="background-color: #336699; text-align: Center; border-style: outset; border-width: 1" colspan="1"><a name="Results"><font style="font-size: 10pt; color: #FFFFFF; font-weight: bold"><?=$sFormTitle?></font></a></td>
      </tr>
<?
  
//-------------------------------
// Build WHERE statement
//-------------------------------
  $pcategory_id = get_param("category_id");
  if(is_number($pcategory_id) && strlen($pcategory_id))
    $pcategory_id = tosql($pcategory_id, "Number");
  else 
    $pcategory_id = "";

  if(strlen($pcategory_id))
  {
    $HasParam = true;
    $sWhere = $sWhere . "i.category_id=" . $pcategory_id;
  }
  $pmodel = get_param("model");

  if(strlen($pmodel))
  {
    if($sWhere != "") 
      $sWhere .= " and ";
    $HasParam = true;
    $sWhere = $sWhere . "i.model like " . tosql("%".$pmodel ."%", "Text");
  }
  $pname = get_param("name");

  if(strlen($pname))
  {
    if($sWhere != "") 
      $sWhere .= " and ";
    $HasParam = true;
    $sWhere = $sWhere . "i.name like " . tosql("%".$pname ."%", "Text");
  }
  $ppricemax = get_param("pricemax");
  if(is_number($ppricemax) && strlen($ppricemax))
    $ppricemax = tosql($ppricemax, "Number");
  else 
    $ppricemax = "";

  if(strlen($ppricemax))
  {
    if($sWhere != "") 
      $sWhere .= " and ";
    $HasParam = true;
    $sWhere = $sWhere . "i.price<" . $ppricemax;
  }
  $ppricemin = get_param("pricemin");
  if(is_number($ppricemin) && strlen($ppricemin))
    $ppricemin = tosql($ppricemin, "Number");
  else 
    $ppricemin = "";

  if(strlen($ppricemin))
  {
    if($sWhere != "") 
      $sWhere .= " and ";
    $HasParam = true;
    $sWhere = $sWhere . "i.price>" . $ppricemin;
  }


  if($HasParam)
    $sWhere = " AND (" . $sWhere . ")";


//-------------------------------
// Build base SQL statement
//-------------------------------
  $sSQL = "select i.category_id as i_category_id, " . 
    "i.image_url as i_image_url, " . 
    "i.item_id as i_item_id, " . 
    "i.model as i_model, " . 
    "i.name as i_name, " . 
    "i.price as i_price, " . 
    "c.category_id as c_category_id, " . 
    "c.name as c_name " . 
    " from items i, categories c" . 
    " where c.category_id=i.category_id  ";
//-------------------------------

//-------------------------------
// Results Open Event begin
// Results Open Event end
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
      <td colspan="5" style="background-color: #FFFFFF; border-width: 1"><font style="font-size: 10pt; color: #000000">No records</font></td>
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
  $iRecordsPerPage = 20;
  $iCounter = 0;
//-------------------------------

//-------------------------------
// Process page scroller
//-------------------------------
  $iPage = get_param("FormResults_Page");
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
    $fldcategory_id = $db->f("c_name");
    $fldimage_url = $db->f("i_image_url");
    $fldmodel = $db->f("i_model");
    $fldname_URLLink = "VehicleDetail.php";
    $fldname_item_id = $db->f("i_item_id");
    $fldname = $db->f("i_name");
    $fldprice = $db->f("i_price");
    $next_record = $db->next_record();
    
//-------------------------------
// Results Show begin
//-------------------------------

//-------------------------------
// Results Show Event begin
$fldname = "<img border=\"0\" src=\"" . $fldimage_url . "\"></td><td valign=\"top\" width=\"100%\"><table><tr><td style=\"background-color: #FFFFFF; border-style: inset; border-width: 0\"><font style=\"font-size: 10pt; color: #CE7E00; font-weight: bold\"><b>" . $fldname . "</b>";
// Results Show Event end
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
       <td style="background-color: #FFFFFF; border-style: inset; border-width: 0"><font style="font-size: 10pt; color: #CE7E00; font-weight: bold">Out of Town Rate</font></td>
      </tr>
      <tr>
       <td style="background-color: #FFFFFF; border-width: 1"><font style="font-size: 10pt; color: #000000">
      <?= tohtml($fldprice) ?>&nbsp;</font></td>
      </tr>
      <tr>
       <td style="background-color: #FFFFFF; border-style: inset; border-width: 0"><font style="font-size: 10pt; color: #CE7E00; font-weight: bold">Category</font></td>
      </tr>
      <tr>
       <td style="background-color: #FFFFFF; border-width: 1"><font style="font-size: 10pt; color: #000000">
      <?= tohtml($fldcategory_id) ?>&nbsp;</font></td>
      </tr>
      <tr>
       <td style="background-color: #FFFFFF; border-style: inset; border-width: 0"><font style="font-size: 10pt; color: #CE7E00; font-weight: bold"><font style="font-size: 10pt; color: rgb(206, 126, 0); font-weight: bold;"><p>Metro Manila/Airport Services Rate:<br> </font><font style="font-size: 10pt" color="#000000"></b>250 Php + gas / hr (minimum of 5 hrs) </font></p></font></td>
      </tr>
      <tr>
       <td style="background-color: #FFFFFF; border-width: 1"><font style="font-size: 10pt; color: #000000">
      <?= tohtml($fldField1) ?>&nbsp;</font></td>
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
// Results Show end
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
  
  // Results Navigation begin
  $bEof = $next_record;
  if($bEof || $iPage != 1)
  {
    if ($iPage == 1) {
?>
        <font style="font-size: 10pt; color: #CE7E00; font-weight: bold">Previous</font>
<? }
    else {
?>
        <a href="<?=$sFileName?>?<?=$form_params?><?=$sSortParams?>FormResults_Page=<?=$iPage - 1?>#Results"><font style="font-size: 10pt; color: #CE7E00; font-weight: bold">Previous</font></a>
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
        <a href="<?=$sFileName?>?<?=$form_params?><?=$sSortParams?>FormResults_Page=<?=$iPage + 1?>#Results"><font style="font-size: 10pt; color: #CE7E00; font-weight: bold">Next</font></a>
<?
    }
  }

//-------------------------------
// Results Navigation end
//-------------------------------

//-------------------------------
// Finish form processing
//-------------------------------
  ?>
      </font></td></tr>
    </table>
  <?


//-------------------------------
// Results Close Event begin
// Results Close Event end
//-------------------------------
}
//===============================


//===============================
// Display Search Form
//-------------------------------
function Search_show()
{
  global $db;
  global $styles;
  
  global $sForm;
  $sFormTitle = "";
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
  $sFormTitle = "";

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
      <td style="background-color: #FFFFFF; border-width: 1"><a href="<?= $fldField1?>"><font style="font-size: 10pt; color: #000000">Advanced Search</font></a></td>
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
  $iRecordsPerPage = 20;
  $iCounter = 0;

  $transit_params = "";
  $form_params = "category_id=" . tourl(get_param("category_id")) . "&model=" . tourl(get_param("model")) . "&name=" . tourl(get_param("name")) . "&pricemax=" . tourl(get_param("pricemax")) . "&pricemin=" . tourl(get_param("pricemin")) . "&";

//-------------------------------
// HTML column headers
//-------------------------------
?>
     <table style="width:100%">
<?
  
//-------------------------------
// Build WHERE statement
//-------------------------------
  $pcategory_id = get_param("category_id");
  if(is_number($pcategory_id) && strlen($pcategory_id))
    $pcategory_id = tosql($pcategory_id, "Number");
  else 
    $pcategory_id = "";

  if(strlen($pcategory_id))
  {
    $HasParam = true;
    $sWhere = $sWhere . "i.category_id=" . $pcategory_id;
  }
  $pmodel = get_param("model");

  if(strlen($pmodel))
  {
    if($sWhere != "") 
      $sWhere .= " and ";
    $HasParam = true;
    $sWhere = $sWhere . "i.model like " . tosql("%".$pmodel ."%", "Text");
  }
  $pname = get_param("name");

  if(strlen($pname))
  {
    if($sWhere != "") 
      $sWhere .= " and ";
    $HasParam = true;
    $sWhere = $sWhere . "i.name like " . tosql("%".$pname ."%", "Text");
  }
  $ppricemax = get_param("pricemax");
  if(is_number($ppricemax) && strlen($ppricemax))
    $ppricemax = tosql($ppricemax, "Number");
  else 
    $ppricemax = "";

  if(strlen($ppricemax))
  {
    if($sWhere != "") 
      $sWhere .= " and ";
    $HasParam = true;
    $sWhere = $sWhere . "i.price<=" . $ppricemax;
  }
  $ppricemin = get_param("pricemin");
  if(is_number($ppricemin) && strlen($ppricemin))
    $ppricemin = tosql($ppricemin, "Number");
  else 
    $ppricemin = "";

  if(strlen($ppricemin))
  {
    if($sWhere != "") 
      $sWhere .= " and ";
    $HasParam = true;
    $sWhere = $sWhere . "i.price>=" . $ppricemin;
  }


  if($HasParam)
    $sWhere = " WHERE (" . $sWhere . ")";


//-------------------------------
// Build base SQL statement
//-------------------------------
  $sSQL = "select i.category_id as i_category_id, " . 
    "i.item_id as i_item_id, " . 
    "i.model as i_model, " . 
    "i.name as i_name, " . 
    "i.price as i_price " . 
    " from items i ";
//-------------------------------

//-------------------------------
// Total Open Event begin
$sSQL="select count(item_id) as i_item_id from items as i";
// Total Open Event end
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
    $flditem_id = $db->f("i_item_id");
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
       <td style="background-color: #FFFFFF; border-style: inset; border-width: 0"><font style="font-size: 10pt; color: #CE7E00; font-weight: bold">Vehicle Items found:</font></td><td style="background-color: #FFFFFF; border-width: 1"><font style="font-size: 10pt; color: #000000">
      <?= tohtml($flditem_id) ?>&nbsp;</font></td>
      </tr><?

//-------------------------------
// Process the record separator
//-------------------------------
    if($next_record  || $iCounter == $iRecordsPerPage - 1)
    {
?>
      <tr>
       <td colspan="2" style="background-color: #FFFFFF; border-width: 1">&nbsp;</td>
      </tr>
<?
    }
//-------------------------------
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

?>