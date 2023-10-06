<!DOCTYPE html>
<html>
<head>
    <title>Kategoria wiekowa</title>
</head>
<body>
    <h1>Kategoria wiekowa</h1>
    <form method="post" action="">
        <label for="wiek">Podaj swój wiek:</label>
        <input type="number" name="wiek" id="wiek">
        <input type="submit" value="Sprawdź">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $wiek = $_POST["wiek"];

        if ($wiek < 11) {
            echo "<p>Masz mniej niż 11 lat, jesteś dzieckiem.</p>";
        } elseif ($wiek >= 11 && $wiek <= 17) {
            echo "<p>Masz między 11 a 17 lat, jesteś nastolatkiem.</p>";
        } else {
            echo "<p>Masz 18 lat lub więcej, jesteś dorosły.</p>";
        }
    }
    ?>
</body>
</html>
