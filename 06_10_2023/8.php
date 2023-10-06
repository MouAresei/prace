<!DOCTYPE html>
<html>
<head>
    <title>Sprawdzenie, czy są przynajmniej dwie takie same liczby</title>
</head>
<body>
    <h1>Sprawdzenie, czy są przynajmniej dwie takie same liczby</h1>
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

        if ($liczba1 == $liczba2 || $liczba1 == $liczba3 || $liczba2 == $liczba3) {
            echo "<p>Przynajmniej dwie z podanych liczb są takie same.</p>";
        } else {
            echo "<p>Brak dwóch takich samych liczb w podanych danych.</p>";
        }
    }
    ?>
</body>
</html>
