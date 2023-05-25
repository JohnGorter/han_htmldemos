<?php

if (!isset($_POST["name"])) {
    $content = generateLoginForm();
}
    if ($name == "" && $pwd == "") {
        $content = generateWelcomeTextAndLink();
    } else {
        $content = generateLoginForm($errors);
    }

$footer = "footer";


include "layouts/layout.php"
?>