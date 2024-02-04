<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST['imie']) || empty($_POST['nazwisko']) || empty($_POST['wiek']) || empty($_POST['klasa']) || empty($_POST['email'])) {
        die("Proszę wypełnić wszystkie pola.");
    }

    $imie = $_POST['imie'];
    $nazwisko = $_POST['nazwisko'];
    $wiek = $_POST['wiek'];
    $klasa = $_POST['klasa'];
    $email = $_POST['email'];

    if (!is_numeric($wiek) || $wiek < 0 || $wiek > 99) {
        die("Nieprawidłowy wiek.");
    }

    if (!is_numeric($klasa) || $klasa <= 0) {
        die("Nieprawidłowy numer klasy.");
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("Nieprawidłowy adres email.");
    }

    echo "Dane zapisane:<br>";
    echo "Imię: $imie<br>";
    echo "Nazwisko: $nazwisko<br>";
    echo "Wiek: $wiek<br>";
    echo "Klasa: $klasa<br>";
    echo "Email: $email<br>";
} else {
    die("Nieprawidłowe żądanie.");
}
?>
