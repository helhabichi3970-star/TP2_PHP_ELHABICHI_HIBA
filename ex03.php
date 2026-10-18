<!DOCTYPE html><html><head><meta charset="UTF-8"><title>Ex03</title></head><body>
<?php
define("TAUX_TVA", 20);
define("DEVISE", "MAD");

$prixHT = 60;
$quantite = 3;

$totalHT = $prixHT * $quantite;
$montantTVA = $totalHT * TAUX_TVA / 100;
$totalTTC = $totalHT + $montantTVA;

$totalTTC += 15; // frais livraison

echo "<h3>Récapitulatif</h3>";
echo "<p>Total HT: $totalHT " . DEVISE . "</p>";
echo "<p>TVA: $montantTVA " . DEVISE . "</p>";
echo "<p>Total TTC: " . ($totalHT + $montantTVA) . " " . DEVISE . "</p>";
echo "<p>Montant final avec livraison: $totalTTC " . DEVISE . "</p>";

if (defined("TAUX_TVA")) {
    echo "<p>TAUX_TVA existe: " . TAUX_TVA . "%</p>";
}
?>
</body></html>