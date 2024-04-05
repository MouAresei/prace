<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
</head>
<body>
    <h1>Wpisy na blogu:</h1>

    <?php
    
    $db_host = 'localhost';
    $db_username = 'username';
    $db_password = 'password';
    $db_name = 'nazwa_bazy_danych';

    $conn = new mysqli($db_host, $db_username, $db_password, $db_name);

    
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    
    $query = "SELECT u.nazwa_uzytkownika, w.data_wpisu, w.tresc FROM wpisy w JOIN uzytkownicy u ON w.autor = u.id ORDER BY w.data_wpisu DESC";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        // Wyświetlenie wszystkich wpisów
        while($row = $result->fetch_assoc()) {
            echo "<div>";
            echo "<p><strong>Autor:</strong> " . $row['nazwa_uzytkownika'] . "</p>";
            echo "<p><strong>Data:</strong> " . $row['data_wpisu'] . "</p>";
            echo "<p><strong>Treść:</strong> " . $row['tresc'] . "</p>";
            echo "</div>";
        }
    } else {
        echo "Brak wpisów na blogu.";
    }

    $conn->close();
    ?>

    <h2>Panel administratora</h2>
    <form action="admin.php" method="post">
        <label for="login">Login:</label>
        <input type="text" id="login" name="login"><br><br>
        <label for="haslo">Hasło:</label>
        <input type="password" id="haslo" name="haslo"><br><br>
        <input type="submit" value="Zaloguj się">
    </form>

    <p>Autor: Jakub Galera </p>
</body>
</html>