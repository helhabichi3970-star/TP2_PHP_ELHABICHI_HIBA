<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"><title>Ex04</title>
    </head>
    s<body>
<?php
$a = 42; $b = "42"; $c = 15.8; $d = true; $e = false; $f = null;
echo "<pre>"; var_dump($a, $b, $c, $d, $e, $f); echo "</pre>";

$int_b = (int)$b;
$int_c = (int)$c;
$str_a = (string)$a;
echo "<p>\"42\" en int: $int_b, type: " . gettype($int_b) . "</p>";
echo "<p>15.8 en int: $int_c, type: " . gettype($int_c) . "</p>";
echo "<p>42 en chaine: $str_a, type: " . gettype($str_a) . "</p>";

echo "<p>echo true: "; echo $d; echo "</p>";
echo "<p>echo false: "; echo $e; echo " (vide)</p>";
echo "<pre>var_dump true: "; var_dump($d); echo "</pre>";
echo "<pre>var_dump false: "; var_dump($e); echo "</pre>";

echo "<pre>";
var_dump((bool)0);
var_dump((bool)"0");
var_dump((bool)"PHP");
var_dump((bool)[]);
echo "</pre>";
?>
</body></html>