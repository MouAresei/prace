<!DOCTYPE html>
<html>
<head>
    <title>Liczba dni w lutym</title>
</head>
<body>
    <h1>Ile jest liczba w lutym</h1>
    <form method="post" action="">
        <label for="rok">Podaj rok:</label>
        <input type="number" name="rok" id="rok">
        <input type="submit" value="Sprawdź">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $rok = $_POST["rok"];

        if (($rok % 4 == 0 && $rok % 100 != 0) || ($rok % 400 == 0)) {
            $dni_w_lutym = 29;
        } else {
            $dni_w_lutym = 28;
        }

        echo "<p>W roku $rok, luty ma $dni_w_lutym dni.</p>";
    }
    ?>
</body>
</html>
