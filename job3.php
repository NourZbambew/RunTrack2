<?php
$booleanVar = true;
$integerVar = 42;
$stringVar = "Hello, world!";
$floatVar = 3.14;

echo "<table border='1'>";
echo "<thead>";
echo "<tr><th>Type</th><th>Nom</th><th>Valeur</th></tr>";
echo "</thead>";
echo "<tbody>";
echo "<tr><td>Boolean</td><td>booleanVar</td><td>" . ($booleanVar ? 'true' : 'false') . "</td></tr>";
echo "<tr><td>Integer</td><td>integerVar</td><td>$integerVar</td></tr>";
echo "<tr><td>String</td><td>stringVar</td><td>$stringVar</td></tr>";
echo "<tr><td>Float</td><td>floatVar</td><td>$floatVar</td></tr>";
echo "</tbody>";
echo "</table>";
?>