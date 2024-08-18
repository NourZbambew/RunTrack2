<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Affichage des arguments GET</title>
</head>
<body>
    <form method="get" action="">
        <label for="param1">Paramètre 1:</label>
        <input type="text" id="param1" name="param1"><br><br>

        <label for="param2">Paramètre 2:</label>
        <input type="text" id="param2" name="param2"><br><br>

        <label for="param3">Paramètre 3:</label>
        <input type="text" id="param3" name="param3"><br><br>

        <input type="submit" value="Envoyer">
    </form>

    <?php
    if (!empty($_GET)) {
        echo "<table border='1'>";
        echo "<thead><tr><th>Argument</th><th>Valeur</th></tr></thead>";
        echo "<tbody>";

        foreach ($_GET as $key => $value) {
            echo "<tr><td>$key</td><td>$value</td></tr>";
        }

        echo "</tbody></table>";
    }
    ?>
</body>
</html>