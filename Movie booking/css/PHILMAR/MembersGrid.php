<?php
/*********************************************************************************
 *       Filename: MembersGrid.php
 *       PHP 4.0 build 11/30/2001
 *********************************************************************************/

//-------------------------------
// MembersGrid CustomIncludes begin

include ("./common.php");
include ("./Header.php");
include ("./Footer.php");

// MembersGrid CustomIncludes end
//-------------------------------

session_start();

//===============================
// Save Page and File Name available into variables
//-------------------------------
$sFileName = "MembersGrid.php";
//===============================


//===============================
// MembersGrid PageSecurity begin
check_security(2);
// MembersGrid PageSecurity end
//===============================

//===============================
// MembersGrid Open Event begin
// MembersGrid Open Event end
//===============================

//===============================
// MembersGrid OpenAnyPage Event start
// MembersGrid OpenAnyPage Event end
//===============================

//===============================
//Save the name of the form and type of action into the variables
//-------------------------------
$sAction = get_param("FormAction");
$sForm = get_param("FormName");
//===============================

// MembersGrid Show begin

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
   
   <td valign="top"><font face=arial size=2> Enter full or partial login, first or last name</font>
<?php Search_show() ?>
    
   </td>
  </tr>
 </table>
 <table>
  <tr>
   <td valign="top">
<?php Members_show() ?>
    
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

// MembersGrid Show end

//===============================
// MembersGrid Close Event begin
// MembersGrid Close Event end
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
  $sFormTitle = "";
  $sActionFileName = "MembersGrid.php";

//-------------------------------
// Search Open Event begin
// Search Open Event end
//-------------------------------
//-------------------------------
// Set variables with search parameters
//-------------------------------
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
      <td style="background-color: #FFEAC5; border-style: inset; border-width: 0"><font style="font-size: 10pt; color: #000000">Username</font></td>
      <td style="background-color: #FFFFFF; border-width: 1"><input type="text" name="name" maxlength="10" value="<?= tohtml($fldname) ?>" size="10" ></td>
     <td ><input type="submit" value="Search"></td>
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
// Display Grid Form
//-------------------------------
function Members_show()
{
//-------------------------------
// Initialize variables  
//-------------------------------
  
  
  global $db;
  global $sMembersErr;
  global $sFileName;
  global $styles;
  $sWhere = "";
  $sOrder = "";
  $sSQL = "";
  $sFormTitle = "Members";
  $HasParam = false;
  $iRecordsPerPage = 20;
  $iCounter = 0;
  $iPage = 0;
  $bEof = false;
  $iSort = "";
  $iSorted = "";
  $sDirection = "";
  $sSortParams = "";
  $sActionFileName = "MembersRecord.php";

  $transit_params = "name=" . tourl(get_param("name")) . "&";
  $form_params = "name=" . tourl(get_param("name")) . "&";

//-------------------------------
// Build ORDER BY statement
//-------------------------------
  $sOrder = " order by m.member_login Asc";
  $iSort = get_param("FormMembers_Sorting");
  $iSorted = get_param("FormMembers_Sorted");
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
      $sSortParams = "FormMembers_Sorting=" . $iSort . "&FormMembers_Sorted=" . $iSort . "&";
    }
    else
    {
      $form_sorting = $iSort;
      $sDirection = " ASC";
      $sSortParams = "FormMembers_Sorting=" . $iSort . "&FormMembers_Sorted=" . "&";
    }
    if ($iSort == 1) $sOrder = " order by m.member_login" . $sDirection;
    if ($iSort == 2) $sOrder = " order by m.first_name" . $sDirection;
    if ($iSort == 3) $sOrder = " order by m.last_name" . $sDirection;
    if ($iSort == 4) $sOrder = " order by m.member_level" . $sDirection;
  }

//-------------------------------
// HTML column headers
//-------------------------------
?>
     <table style="width:100%">
      <tr>
       <td style="background-color: #336699; text-align: Center; border-style: outset; border-width: 1" colspan="4"><a name="Members"><font style="font-size: 10pt; color: #FFFFFF; font-weight: bold"><?=$sFormTitle?></font></a></td>
      </tr>
      <tr>
       <td style="background-color: #FFFFFF; border-style: inset; border-width: 0"><a href="<?=$sFileName?>?<?=$form_params?>FormMembers_Sorting=1&FormMembers_Sorted=<?=$form_sorting?>&"><font style="font-size: 10pt; color: #CE7E00; font-weight: bold">Username</font></a></td>
       <td style="background-color: #FFFFFF; border-style: inset; border-width: 0"><a href="<?=$sFileName?>?<?=$form_params?>FormMembers_Sorting=2&FormMembers_Sorted=<?=$form_sorting?>&"><font style="font-size: 10pt; color: #CE7E00; font-weight: bold">First Name</font></a></td>
       <td style="background-color: #FFFFFF; border-style: inset; border-width: 0"><a href="<?=$sFileName?>?<?=$form_params?>FormMembers_Sorting=3&FormMembers_Sorted=<?=$form_sorting?>&"><font style="font-size: 10pt; color: #CE7E00; font-weight: bold">Last Name</font></a></td>
       <td style="background-color: #FFFFFF; border-style: inset; border-width: 0"><a href="<?=$sFileName?>?<?=$form_params?>FormMembers_Sorting=4&FormMembers_Sorted=<?=$form_sorting?>&"><font style="font-size: 10pt; color: #CE7E00; font-weight: bold">Level</font></a></td>
      </tr>
<?
  
//-------------------------------
// Build WHERE statement
//-------------------------------
  $pname = get_param("name");
  if(strlen($pname))
  {
    $HasParam = true;
    $sWhere = "m.member_login like " . tosql("%".$pname ."%", "Text") . " or " . "m.first_name like " . tosql("%".$pname ."%", "Text") . " or " . "m.last_name like " . tosql("%".$pname ."%", "Text");
  }


  if($HasParam)
    $sWhere = " WHERE (" . $sWhere . ")";


//-------------------------------
// Build base SQL statement
//-------------------------------
  $sSQL = "select m.first_name as m_first_name, " . 
    "m.last_name as m_last_name, " . 
    "m.member_id as m_member_id, " . 
    "m.member_level as m_member_level, " . 
    "m.member_login as m_member_login " . 
    " from members m ";
//-------------------------------

//-------------------------------
// Members Open Event begin
// Members Open Event end
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
      <td colspan="4" style="background-color: #FFFFFF; border-width: 1"><font style="font-size: 10pt; color: #000000">No records</font></td>
     </tr>
<?
 
//-------------------------------
//  The insert link.
//-------------------------------
?>
    <tr>
     <td colspan="4" style="background-color: #FFFFFF; border-style: inset; border-width: 0"><font style="font-size: 10pt; color: #CE7E00; font-weight: bold"><a href="<?= $form_action ?>?<?= $transit_params ?>"><font style="font-size: 10pt; color: #CE7E00; font-weight: bold">Insert</font></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<?  
?>
  </table>
<?

    return;
  }

//-------------------------------

//-------------------------------
// Prepare the lists of values
//-------------------------------
  
  $amember_level = split(";", "1;Member;2;Administrator");
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
  $iPage = get_param("FormMembers_Page");
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
    $fldname = $db->f("m_first_name");
    $fldlast_name = $db->f("m_last_name");
    $fldmember_level = $db->f("m_member_level");
    $fldmember_login_URLLink = "MembersInfo.php";
    $fldmember_login_member_id = $db->f("m_member_id");
    $fldmember_login = $db->f("m_member_login");
    $next_record = $db->next_record();
    
//-------------------------------
// Members Show begin
//-------------------------------

//-------------------------------
// Members Show Event begin
// Members Show Event end
//-------------------------------


//-------------------------------
// Process the HTML controls
//-------------------------------
?>
      <tr>
       <td style="background-color: #FFFFFF; border-width: 1"><font style="font-size: 10pt; color: #000000"><a href="<?=$fldmember_login_URLLink?>?member_id=<?=$fldmember_login_member_id?>&<?= $transit_params ?>"><font style="font-size: 10pt; color: #000000"><?=$fldmember_login?></font></a>&nbsp;</font></td>
       <td style="background-color: #FFFFFF; border-width: 1"><font style="font-size: 10pt; color: #000000">
      <?= tohtml($fldname) ?>&nbsp;</font></td>
       <td style="background-color: #FFFFFF; border-width: 1"><font style="font-size: 10pt; color: #000000">
      <?= tohtml($fldlast_name) ?>&nbsp;</font></td>
       <td style="background-color: #FFFFFF; border-width: 1"><font style="font-size: 10pt; color: #000000">
      <? $fldmember_level = get_lov_value($fldmember_level, $amember_level); ?>
      <?= tohtml($fldmember_level) ?>&nbsp;</font></td>
      </tr><?
//-------------------------------
// Members Show end
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
     <td colspan="4" style="background-color: #FFFFFF; border-style: inset; border-width: 0"><font style="font-size: 10pt; color: #CE7E00; font-weight: bold"><a href="<?= $form_action ?>?<?= $transit_params ?>"><font style="font-size: 10pt; color: #CE7E00; font-weight: bold">Insert</font></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<?
  // Members Navigation begin
  $bEof = $next_record;
  if($bEof || $iPage != 1)
  {
    if ($iPage == 1) {
?>
        <font style="font-size: 10pt; color: #CE7E00; font-weight: bold">Previous</font>
<? }
    else {
?>
        <a href="<?=$sFileName?>?<?=$form_params?><?=$sSortParams?>FormMembers_Page=<?=$iPage - 1?>#Members"><font style="font-size: 10pt; color: #CE7E00; font-weight: bold">Previous</font></a>
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
        <a href="<?=$sFileName?>?<?=$form_params?><?=$sSortParams?>FormMembers_Page=<?=$iPage + 1?>#Members"><font style="font-size: 10pt; color: #CE7E00; font-weight: bold">Next</font></a>
<?
    }
  }

//-------------------------------
// Members Navigation end
//-------------------------------

//-------------------------------
// Finish form processing
//-------------------------------
  ?>
      </font></td></tr>
    </table>
  <?


//-------------------------------
// Members Close Event begin
// Members Close Event end
//-------------------------------
}
//===============================

?>