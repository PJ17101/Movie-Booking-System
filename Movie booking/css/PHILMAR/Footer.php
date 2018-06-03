<?php
//********************************************************************************


//===============================
// Display Menu Form
//-------------------------------
function Footer_show()
{
  global $db;
  global $styles;
  $sFormTitle = "";

//-------------------------------
// Footer Open Event begin
// Footer Open Event end
//-------------------------------

//-------------------------------
// Set URLs
//-------------------------------
  $fldField1 = "Default.php";
  $fldField6 = "About.php";
  $fldField7 = "Contact.php";
  $fldField3 = "Registration.php";
  $fldField5 = "Reservation.php";
  $fldField2 = "Login.php";
  $fldField4 = "AdminMenu.php";
//-------------------------------
// Footer Show begin
//-------------------------------


//-------------------------------
// Footer BeforeShow Event begin
// Footer BeforeShow Event end
//-------------------------------

//-------------------------------
// Show fields
//-------------------------------

?>
    <table style="width:100%">
     <tr>
      <td style="background-color: #FFFFFF; border-width: 1"><a href="<?= $fldField1?>"><font style="font-size: 10pt; color: #000000">Home</font></a></td>
      <td style="background-color: #FFFFFF; border-width: 1"><a href="<?= $fldField6?>"><font style="font-size: 10pt; color: #000000">About Philmar</font></a></td>
      <td style="background-color: #FFFFFF; border-width: 1"><a href="<?= $fldField7?>"><font style="font-size: 10pt; color: #000000">Contact Us</font></a></td>
      <td style="background-color: #FFFFFF; border-width: 1"><a href="<?= $fldField3?>"><font style="font-size: 10pt; color: #000000">Registration</font></a></td>
      <td style="background-color: #FFFFFF; border-width: 1"><a href="<?= $fldField5?>"><font style="font-size: 10pt; color: #000000">Reservation</font></a></td>
      <td style="background-color: #FFFFFF; border-width: 1"><a href="<?= $fldField2?>"><font style="font-size: 10pt; color: #000000">Sign In</font></a></td>
      <td style="background-color: #FFFFFF; border-width: 1"><a href="<?= $fldField4?>"><font style="font-size: 10pt; color: #000000">Administration</font></a></td>
     </tr>
    </table>
<?php

//-------------------------------
// Footer Show end
//-------------------------------
}
//===============================

?>