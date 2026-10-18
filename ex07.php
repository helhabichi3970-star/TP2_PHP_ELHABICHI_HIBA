<!DOCTYPE html><html><head><meta charset="UTF-8"><title>Ex07</title></head><body>
<?php
$Nombre = 7;
echo "<h3>Table de $Nombre</h3>";
for ($i=1; $i<=10; $i++) {
    echo "$Nombre x $i = " . ($Nombre*$i) . "<br>";
}
echo "<h3>Pyramide</h3><pre>";
for ($ligne=1; $ligne<=6; $ligne++) {
    for ($etoile=1; $etoile<=$ligne; $etoile++) {
        echo "* ";
    }
    echo "\n";
}
echo "</pre>";
?>
</body></html>