<!DOCTYPE html><html><head><meta charset="UTF-8"><title>Ex05</title></head><body>
<?php
$Moyenne = 12; // badal hna: -1, 9, 10, 12, 14, 16, 21

if ($Moyenne < 0 || $Moyenne > 20) {
    echo "<p>Note invalide</p>";
} elseif ($Moyenne < 10) {
    echo "<p>Moyenne $Moyenne : Non validé</p>";
} elseif ($Moyenne < 12) {
    echo "<p>Moyenne $Moyenne : Passable</p>";
} elseif ($Moyenne < 14) {
    echo "<p>Moyenne $Moyenne : Assez bien</p>";
} elseif ($Moyenne < 16) {
    echo "<p>Moyenne $Moyenne : Bien</p>";
} else {
    echo "<p>Moyenne $Moyenne : Très bien</p>";
}
?>
</body></html>