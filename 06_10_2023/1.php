<!DOCTYPE html>
<html>
<head>
    <title>Czy liczba jest parzysta? A może nie?</title>
</head>
<body>
    <h1>Czy liczba jest parzysta</h1>
    <form method="post" action="">
        <label for="liczba">Podaj liczbę:</label>
        <input type="number" name="liczba" id="liczba">
        <input type="submit" value="Sprawdź">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST")
     {
        $liczba = $_POST["liczba"];

        if ($liczba % 2 == 0) {
            echo "<p>Liczba $liczba jest parzysta.</p>";
        } else {
            echo "<p>Liczba $liczba jest nieparzysta.</p>";
        }
    }
    ?>
</body>
</html>
