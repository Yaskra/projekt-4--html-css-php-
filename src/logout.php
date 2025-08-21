<?php
session_start(); // Rozpoczyna sesję
session_unset(); // Usuwa wszystkie zmienne sesji
session_destroy(); // Kończy sesję

// Możesz opcjonalnie usunąć plik cookie sesji, jeśli jest ustawiony
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}

header('Location: ../index.php'); // Przekierowanie po wylogowaniu
exit(); // Zakończenie skryptu
?>
