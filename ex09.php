<!DOCTYPE html><html><head><meta charset="UTF-8"><title>Ex09</title></head><body>
<?php
$notes = ["Amine"=>12, "Sara"=>16, "Youssef"=>8, "Lina"=>14, "Adam"=>10];
echo "<table border=1 cellpadding=5><tr><th>Etudiant</th><th>Note</th><th>Validé</th></tr>";
$somme=0; $valides=0; $max=0; $meilleur="";
foreach ($notes as $nom=>$note) {
    $etat = $note>=10 ? "Validé" : "Non validé";
    echo "<tr><td>$nom</td><td>$note</td><td>$etat</td></tr>";
    $somme+=$note;
    if ($note>=10) $valides++;
    if ($note>$max) { $max=$note; $meilleur=$nom; }
}
echo "</table>";
echo "<p>Moyenne: " . ($somme/count($notes)) . " | Validés: $valides | Meilleur: $meilleur ($max)</p>";
?>
</body></html>