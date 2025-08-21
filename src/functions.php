<?php

// Jeśli sesja jeszcze nie została uruchomiona, ustaw parametry i uruchom ją
if (session_status() === PHP_SESSION_NONE) {
    session_set_cookie_params([
        'lifetime' => 0,      // Sesja wygaśnie przy zamknięciu przeglądarki
        'path'     => '/',    // Ciasteczko dostępne w całej domenie
        // 'domain'   => 'twojadomena.pl', // ustaw, jeśli potrzebujesz
        //'secure'   => false,  // Ustaw na true, jeśli korzystasz z HTTPS
        //'httponly' => true,   // Zapobiega dostępowi do ciasteczka przez JavaScript
        //'samesite' => 'Lax'   // Opcjonalnie, zależy od wymagań bezpieczeństwa
    ]);
    session_start();
}

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

function validateRegistrationData($login, $name, $last_name, $email, $password, $confirm_password) {
    // Sprawdzenie, czy wszystkie pola są wypełnione
    if (empty($login) || empty($name) || empty($last_name) || empty($email) || empty($password) || empty($confirm_password)) {
        return 'Wszystkie pola są wymagane.';
    }

    // Sprawdzenie, czy hasła są identyczne
    if ($password !== $confirm_password) {
        return 'Hasła nie są identyczne.';
    }

    // Walidacja formatu adresu e-mail
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return 'Nieprawidłowy format adresu e-mail.';
    }

    // Minimalna długość hasła
    if (strlen($password) < 8) {
        return 'Hasło musi zawierać co najmniej 8 znaków.';
    }

    // Sprawdzenie siły hasła (przynajmniej jedna cyfra, jedna wielka litera i jedna mała litera)
    if (!preg_match('/[A-Z]/', $password) ||
        !preg_match('/[a-z]/', $password) ||
        !preg_match('/[0-9]/', $password)) {
        return 'Hasło musi zawierać przynajmniej jedną wielką literę, jedną małą literę i jedną cyfrę.';
    }

    return '';
}

function validateLoginData($email, $password) {
    // Sprawdzenie, czy pola email i password nie są puste
    if (empty($email) || empty($password)) {
        return 'Wszystkie pola są wymagane.';
    }

    // Opcjonalnie można dodać walidację formatu emaila
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return 'Nieprawidłowy format adresu e-mail.';
    }

    return '';
}
?>