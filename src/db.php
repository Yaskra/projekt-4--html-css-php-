<?php
ini_set('session.save_path', __DIR__ . '/sessions'); // Ustawienie innego folderu na sesje
ini_set('session.gc_probability', 1); // Zapewnia czyszczenie starych sesji
session_start();
$host = 'localhost';
$dbname = 'localhost';
$user = 'host';
$pass = '';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Błąd połączenia z bazą danych: " . $e->getMessage());
}
?>