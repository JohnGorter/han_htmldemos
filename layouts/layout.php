<?php  
if (!isset($content)) {
    header("Location: /home.php");
    die();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .footer { color:red }
    </style>
</head>
<body>
    <?= isset($header) ? "<header>" . $header . "</header>" : "" ?>
    <?php 
      if (!isset($header)) { include "menu.php"; }
    ?>
    <div><?= $content ?></div>
    <footer class="footer"><?= $footer ?></footer>
</body>
</html>