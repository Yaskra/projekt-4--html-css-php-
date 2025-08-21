<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $first_name = htmlspecialchars($_POST['first_name']);
    $last_name = htmlspecialchars($_POST['last_name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    $company_email = 'kontakt@hype2you.pl';

    // Temat wiadomości
    $subject = "Kontakt od: $first_name $last_name";

    // Treść wiadomości
    $body = "Imię: $first_name\nNazwisko: $last_name\nEmail: $email\n\nWiadomość:\n$message";

    // Nagłówki e-maila
    $headers = "From: $email" . "\r\n" .
               "Reply-To: $email" . "\r\n" .
               "X-Mailer: PHP/" . phpversion();

    // Wysłanie wiadomości
    if (mail($company_email, $subject, $body, $headers)) {
        echo json_encode(['status' => 'success']);
    } else {
        echo json_encode(['status' => 'error']);
    }
} else {
    echo json_encode(['status' => 'error']);
}
?>
