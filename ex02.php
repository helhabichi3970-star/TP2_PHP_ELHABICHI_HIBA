<!DOCTYPE html><html><head><meta charset="UTF-8"><title>Ex02</title></head><body>
<?php
$Nom = "ELHABICHI";
$Prenom = "Hiba";
$Sage = 21;
$Formation = "Programmation Web 2";

$presentation = "Je m'appelle " . $Prenom . " " . $Nom . ", j'ai " . $Sage . " ans et je suis en " . $Formation . ".";
echo "<p>$presentation</p>";
echo "<p>" . $presentation . " J'apprends PHP</p>";

$Snote = 12;
$SNote = 16;
echo "<p>Note 1 (Snote): $Snote / Note 2 (SNote): $SNote</p>";
echo "<p>Ce sont 2 variables différentes car PHP est sensible à la casse (case-sensitive).</p>";
?>
</body></html>