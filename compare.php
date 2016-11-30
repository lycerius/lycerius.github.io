<!--
Use this file as a skeleton for all webpages on this domain
-->
<?php
include_once("templates/template.php");
createHeader("compare.js"); #Include your javascript file as the param
?>
<center>
<form id="nameparameters" method="get" action="compare.php">
<?php
  createUsernameBox("uname1"); echo " Vs. ";createUsernameBox("uname2");
  createSubmitButton();
?>
</form>
</center>
<?php endPage(); ?>
