<!DOCTYPE html>
<html>
<head>
    <title>Najmniejsza liczba</title>
</head>
<body>
    <h1>Wyznaczanie najmniejszej liczby</h1>
    <form method="post" action="">
        <label for="liczba1">Podaj pierwszą liczbę:</label>
        <input type="number" name="liczba1" id="liczba1">
        <br>
        <label for="liczba2">Podaj drugą liczbę:</label>
        <input type="number" name="liczba2" id="liczba2">
        <br>
        <label for="liczba3">Podaj trzecią liczbę:</label>
        <input type="number" name="liczba3" id="liczba3">
        <br>
        <input type="submit" value="Sprawdź">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $liczba1 = $_POST["liczba1"];
        $liczba2 = $_POST["liczba2"];
        $liczba3 = $_POST["liczba3"];

        $najmniejsza = min($liczba1, $liczba2, $liczba3);

        echo "<p>Najmniejsza z podanych liczb to: $najmniejsza.</p>";
    }
    ?>
</body>
</html>
