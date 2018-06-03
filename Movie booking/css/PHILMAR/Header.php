<?php
//********************************************************************************


//===============================
// Display Menu Form
//-------------------------------
function Menu_show()
{
  global $db;
  global $styles;
  $sFormTitle = "";

//-------------------------------
// Menu Open Event begin
// Menu Open Event end
//-------------------------------

//-------------------------------
// Set URLs
//-------------------------------
  $fldReg = "Registration.php";
  $fldShop = "Reservation.php";
  $fldField1 = "Login.php";
  $fldAdmin = "AdminMenu.php";
//-------------------------------
// Menu Show begin
//-------------------------------


//-------------------------------
// Menu BeforeShow Event begin
// Menu BeforeShow Event end
//-------------------------------

//-------------------------------
// Show fields
//-------------------------------

?>
    <table style="width:100%">
     <tr>
      <td style="background-color: #FFFFFF; border-width: 1"><a href="<?= $fldReg?>"><font style="font-size: 10pt; color: #000000"><img src="images/registration.jpg" border="0"></font></a></td>
      <td style="background-color: #FFFFFF; border-width: 1"><a href="<?= $fldShop?>"><font style="font-size: 10pt; color: #000000"><img src="images/reservation.jpg" border="0"></font></a></td>
      <td style="background-color: #FFFFFF; border-width: 1"><a href="<?= $fldField1?>"><font style="font-size: 10pt; color: #000000"><img src="images/signin.jpg" border="0"></font></a></td>
      <td style="background-color: #FFFFFF; border-width: 1"><a href="<?= $fldAdmin?>"><font style="font-size: 10pt; color: #000000"><img src="images/administration.jpg" border="0"></font></a></td>
     </tr>
    </table>
<?php

//-------------------------------
// Menu Show end
//-------------------------------
}
//===============================

?>