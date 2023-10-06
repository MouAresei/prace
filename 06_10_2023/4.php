<!DOCTYPE html>
<html>
<head>
    <title>Sprawzdanie liczby</title>
</head>
<body>
    <h1>Sprawdzenie liczby</h1>
    <form method="post" action="">
        <label for="liczba">Podaj liczbę:</label>
        <input type="number" name="liczba" id="liczba">
        <input type="submit" value="Sprawdź">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $liczba = $_POST["liczba"];

        if ($liczba < 0) {
            echo "<p>Liczba $liczba jest mniejsza od zera.</p>";
        } elseif ($liczba == 0) {
            echo "<p>Liczba $liczba jest równa zero.</p>";
        } else {
            echo "<p>Liczba $liczba jest większa od zera.</p>";
        }
    }
    ?>
</body>
</html>
