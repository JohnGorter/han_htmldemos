<?php
function genereerPrijslijst($items) {
    $lijst = "<table>";
    foreach ($items as $item => $price) {
        $lijst .=  "<tr><td>$item</td><td>&euro; $price</td></tr>";
    }
    $lijst .= "</table>";
    return $lijst;
}

?>