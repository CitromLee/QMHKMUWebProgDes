<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feldolgozo</title>
</head>
<body>
    <?php
    if (isset($_POST)) { // Ellenőrizd, hogy POST kérést kaptál
        echo "<h2>Űrlap adatok:</h2>";

        // Változók inicializálása az esetleges hiányzó mezők elkerülése érdekében
        $sarkanylegyozes = isset($_POST["sarkanylegyozes"]) ? $_POST["sarkanylegyozes"] : "Nincs beírva!";
        $elderscroll = isset($_POST["elderscroll"]) ? $_POST["elderscroll"] : "Nincs beírva!";
        $varazslat = isset($_POST["varazslat"]) ? $_POST["varazslat"] : "Nincs megadva";
        $fegyver = isset($_POST["fegyver"]) ? $_POST["fegyver"] : "Nincs kiválasztva";
        $kornyezet = isset($_POST["env"]) ? $_POST["env"] : "Nincs kiválasztva";
        $sarkanysz = isset($_POST["sarkanysz"]) ? $_POST["sarkanysz"] : "Nincs megadva";
        $magia = isset($_POST["magia"]) ? $_POST["magia"] : "Nincs megadva";
        $bator = isset($_POST["bator"]) ? $_POST["bator"] : "Nincs megadva";
        $color = isset($_POST["color"]) ? $_POST["color"] : "Nem adtál meg kedvenc színt!";

        // Adatok megjelenítése
            echo "<p><strong>Sárkánylegyőzéshez kellő eszközök vélemény: </strong> " . htmlspecialchars($sarkanylegyozes) . "</p>";
            echo "<p><strong>Elder Scroll használata vélemény: </strong> " . htmlspecialchars($elderscroll) . "</p>";
            echo "<p><strong>Varázslat hatása vélemény: </strong> " . htmlspecialchars($varazslat) . "</p>";
            echo "<p><strong>Fegyver választás:</strong> " . htmlspecialchars($fegyver) . "</p>";
            echo "<p><strong>Kiválasztott környezet: </strong> " . htmlspecialchars($kornyezet) . "</p>";
            echo "<p><strong>Sárkány szeretet: </strong> " . htmlspecialchars($sarkanysz) . "</p>";
            echo "<p><strong>Mágia fontosság vélemény: </strong> " . htmlspecialchars($magia) . "</p>";
            echo "<p><strong>Ismeretlen bátorság: </strong> " . htmlspecialchars($bator) . "</p>";
            echo '<p style="color:' . $color . ';"><strong>Kedvenc színed a szöveg színeként jelenik meg </strong></span>';
        } else {
            echo "<h2>Űrlap nem lett beküldve!</h2>";
        }
    ?>
</body>
</html>