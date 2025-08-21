<?php
session_start();
require 'db.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = trim($_POST['login_email']);
    $password = $_POST['login_password'];

    // Sprawdzanie, czy użytkownik istnieje w bazie danych
    $stmt = $pdo->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->execute([$email]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user && password_verify($password, $user['password_hash'])) {
        // Czyszczenie błędów logowania, jeśli użytkownik się zaloguje poprawnie
        unset($_SESSION['login_error']); 

        // Ustawienie zmiennych sesyjnych
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['username'] = $user['username'];
        $_SESSION['reg_login'] = $user['username']; // Ustawienie danych użytkownika w sesji
        $_SESSION['reg_name'] = $user['first_name'];
        $_SESSION['reg_lastname'] = $user['last_name'];
        $_SESSION['reg_email'] = $user['email'];

        // Zwracamy odpowiedź sukcesu
        echo json_encode(['success' => 'Zalogowano pomyślnie!']);
        exit();
    } else {
        // Zwracamy błąd, jeśli dane są niepoprawne
        echo json_encode(['error' => 'Niepoprawny email lub hasło!']);
        exit();
    }
}
?>
