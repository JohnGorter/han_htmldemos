<?php
    require("functions.php");
    
    $etenlijst = genereerPrijslijst(["hamburger"=>6, "cheeseburger"=>4]); 
    $dranklijst = genereerPrijslijst(["beer"=>6, "milshake"=>4]);

?>
<!DOCTYPE html>
<html lang="nl">
  <head>
    <meta charset="UTF-8" />
    <title>Restaurantmenu</title>
    <style>
      td:first-child {
        width: 8em;
      }
      td:nth-child(2) {
        font-style: italic;
        text-align: right;
        width: 4em;
      }
    </style>
  </head>
  <body>
    <h1>Menu</h1>

    <h2>Eten</h2>
    <?= $etenlijst ?>

    <h2>Drinken</h2>
    <?= $dranklijst ?>

  </body>
</html>

