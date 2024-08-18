<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Formulaire GET</title>
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
    $nombre_arguments = count($_GET);
    echo "Le nombre d'arguments GET envoyé est : $nombre_arguments";
    ?>
</body>
</html>