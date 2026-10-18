<!DOCTYPE html><html><head><meta charset="UTF-8"><title>Ex08</title></head><body>
<?php
echo "<h3>1. Pairs 0-20</h3>";
$i=0;
while ($i<=20) {
    if ($i==10) echo "<b>$i</b> "; else echo "$i ";
    $i++; if ($i%2!=0) $i++; // pairs seulement
}
echo "<h3>2. while vs do-while</h3>";
$compteur=5;
echo "while (compteur < 5): ";
$count=0;
while ($compteur < 5) { $count++; $compteur++; }
echo "$count exécution(s)<br>";
$compteur=5;
echo "do-while (compteur < 5): ";
$count=0;
do { $count++; $compteur++; } while ($compteur < 5);
echo "$count exécution(s)<br>";

echo "<h3>3. continue et break</h3>";
for ($n=1; $n<=20; $n++) {
    if ($n%3==0) continue;
    if ($n>=16) break;
    echo "$n ";
}
?>
</body>
</html>