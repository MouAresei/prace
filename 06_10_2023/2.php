<!DOCTYPE html>
<html>
<head>
    <title>Czy liczba jest podzielna?</title>
</head>
<body>
    <h1>Podzielność</h1>
    <form method="post" action="">
        <label for="liczba1">Podaj pierwszą liczbę (liczba pierwsza):</label>
        <input type="number" name="liczba1" id="liczba1">
        <br>
        <label for="liczba2">Podaj drugą liczbę:</label>
        <input type="number" name="liczba2" id="liczba2">
        <br>
        <input type="submit" value="Sprawdź">
    </form>

    <?php
    function Podzielna($liczba1, $liczba2) {
        if ($liczba2 == 0) {
            return false;
        }

        return $liczba1 % $liczba2 == 0;
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $liczba1 = $_POST["liczba1"];
        $liczba2 = $_POST["liczba2"];

        if (Podzielna($liczba1, $liczba2)) {
            echo "<p>Liczba $liczba1 jest podzielna przez $liczba2 bez reszty.</p>";
        } else {
            echo "<p>Liczba $liczba1 nie jest podzielna przez $liczba2 bez reszty.</p>";
        }
    }
    ?>
</body>
</html>
