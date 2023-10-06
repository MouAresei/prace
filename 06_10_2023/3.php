<!DOCTYPE html>
<html>
<head>
    <title>Przedział</title>
</head>
<body>
    <h1>Przedział</h1>
    <form method="post" action="">
        <label for="liczba">Podaj liczbę:</label>
        <input type="number" name="liczba" id="liczba">
        <input type="submit" value="Sprawdź">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $liczba = $_POST["liczba"];

        if ($liczba >= 100 && $liczba < 150) {
            echo "<p>Liczba $liczba mieści się w przedziale <100,150).</p>";
        } else {
            echo "<p>Liczba $liczba nie mieści się w przedziale <100,150).</p>";
        }
    }
    ?>
</body>
</html>
