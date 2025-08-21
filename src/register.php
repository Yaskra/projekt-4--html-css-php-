<?php
session_start();
require 'db.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = trim($_POST['reg_login']);
    $first_name = trim($_POST['reg_name']);
    $last_name = trim($_POST['reg_lastname']);
    $email = trim($_POST['reg_email']);
    $password = $_POST['reg_password'];
    $password_confirm = $_POST['reg_password_confirm'];

    // Sprawdzanie, czy wszystkie pola są wypełnione
    if (empty($username) || empty($first_name) || empty($last_name) || empty($email) || empty($password)) {
        echo json_encode(['error' => 'Wszystkie pola są wymagane!']);
        exit();
    }

    // Sprawdzanie, czy hasła są identyczne
    if ($password !== $password_confirm) {
        echo json_encode(['error' => 'Hasła nie są identyczne!']);
        exit();
    }

    // Sprawdzanie poprawności emaila
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo json_encode(['error' => 'Niepoprawny format e-maila!']);
        exit();
    }

    // Sprawdzanie, czy użytkownik o takim emailu lub nazwie już istnieje
    $stmt = $pdo->prepare("SELECT id FROM users WHERE email = ? OR username = ?");
    $stmt->execute([$email, $username]);
    if ($stmt->fetch()) {
        echo json_encode(['error' => 'Użytkownik o tej nazwie lub e-mailu już istnieje!']);
        exit();
    }

    // Hashowanie hasła
    $password_hash = password_hash($password, PASSWORD_BCRYPT);

    try {
        $stmt = $pdo->prepare("INSERT INTO users (username, first_name, last_name, email, password_hash) VALUES (?, ?, ?, ?, ?)");
        $stmt->execute([$username, $first_name, $last_name, $email, $password_hash]);

        // Wysyłanie odpowiedzi sukcesu
        echo json_encode(['success' => 'Rejestracja zakończona sukcesem! Zaloguj się!']);
        exit();
    } catch (PDOException $e) {
        echo json_encode(['error' => 'Wystąpił błąd podczas rejestracji.']);
        exit();
    }
}
?>
