<?php
  include_once("templates/template.php");
  createHeader("byname.js");
 ?>

 <center>
   <form id="nameparameters" method="get" action="byname.php">
     <?php
      createUsernameBox("uname");
      createSubmitButton();
     ?>

       <br /><br />

     <span id="loaderPlacement"></span>
     <?php
     function createTableRow($map, $tableheadername){

        echo "<tr>";
          echo "<td colspan=2 class='tableheader'>";
            echo $tableheadername;
          echo "</td>";
        echo "</tr>";
        foreach ($map as $key => $value) {
          echo "<tr class='resultsTable'>";
            echo "<td>";
              echo $key;
            echo "</td>";
            echo "<td class='resultsTable'>";
             echo str_replace("hours", " hours", $value);
            echo "</td>";
          echo "</tr>";
        }

     }

     function createPlayerCard(){

     }

     if(isset($_POST["ObjectiveKills"])){
        $important = array(
          "Objective Kills"  => $_POST["ObjectiveKills"],
          "Damage Done"      => $_POST["DamageDone"],
          "Eliminations"     => $_POST["Eliminations"],
          "Multikills"       => $_POST["Multikills"],
          "Healing Done"     => $_POST["HealingDone"],
          "Deaths"           => $_POST["Deaths"],
          "Games Won"        => $_POST["GamesWon"]
       );

       $most = array(
         "Eliminations"      => $_POST["Eliminations-MostinGame"],
         "Final Blows"       => $_POST["FinalBlows-MostinGame"],
         "Damage Done"       => $_POST["DamageDone-MostinGame"],
         "Healing Done"      => $_POST["HealingDone-MostinGame"],
         "Objective Kills"   => $_POST["ObjectiveKills-MostinGame"],
         "Solokills"         => $_POST["SoloKills-MostinGame"],
         "Multikills"        => $_POST["Multikill-Best"],
         "On Fire"           => $_POST["TimeSpentonFire-MostinGame"]
       );

       $average = array(
         "Eliminations"      => $_POST["Eliminations-Average"],
         "Melee Final Blows" => $_POST["MeleeFinalBlows-Average"],
         "On Fire"           => $_POST["TimeSpentonFire-Average"],
         "Solokills"         => $_POST["SoloKills-Average"],
         "Objective Time"    => $_POST["ObjectiveTime-Average"],
         "Objective Kills"   => $_POST["ObjectiveKills-Average"],
         "Healing Done"      => $_POST["HealingDone-Average"],
         "Final Blows"       => $_POST["FinalBlows-Average"],
         "Deaths"            => $_POST["Deaths-Average"],
         "Damage Done"       => $_POST["DamageDone-Average"],
         "Eliminations"      => $_POST["Eliminations-Average"]
       );
       echo "<table class='resultsTable' width=80%>";
       createTableRow($important, "Basic Data");
       createTableRow($most, "Most in Game");
       createTableRow($average, "Average Game");
       echo "</table>";
     }
     else if(isset($_GET["uname"])){
       echo "<script>getHeroInformationByName('" . $_GET["uname"] . "','quickplay')</script>";
     }





     #We got a usernames
     if(isset($_GET["uname"])){
       $username = str_replace("#","-",urldecode($_GET["uname"]));
     }
    ?>
  </center>
 </body>
</html>
