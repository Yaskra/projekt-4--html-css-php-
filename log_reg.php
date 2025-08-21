<?php
session_start();
?>


<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="static/css/log_reg_styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <script src="static/scripts/log_reg_script.js"></script>
    <title>Konto</title>
</head>
<body>
    <header></header>
    <main>
        <!-- Formularz logowania -->
         <section id="formsy">
        <article id="panlog">
            <div class="panele"><h1>Panel logowania</h1></div>
            <form id="loginForm" action="src/login.php" method="post">
    <input class="dane" id="login_email" name="login_email" placeholder="Wpisz swój email..." type="email" required><i class="fa-solid fa-address-card icons"></i>
    <input class="dane" id="login_password" name="login_password" placeholder="Hasło..." type="password" required><i class="fa-solid fa-lock icons"></i>
    <button type="button" class="toggle_password" onclick="togglePassword('login_password', this)">👁</button>
    <label id="buttonrem">
        <input type="checkbox" class="myCheckbox">
        <span class="custom-checkbox"></span> Zapamiętaj dane
    </label>
    <a href="#" id="buttonpass">Zapomniałem hasła</a>
    <button type="submit" id="log">Zaloguj</button>
</form>

<div id="loginErrorMessages"></div>
<div id="loginSuccessMessage"></div>
<script>
    document.getElementById('loginForm').addEventListener('submit', function(e) {
    e.preventDefault(); // Zapobiegamy odświeżeniu strony

    const formData = new FormData(this);

    fetch('src/login.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        if (data.error) {
            document.getElementById('loginErrorMessages').innerHTML = `<p class="error">${data.error}</p>`;
            document.getElementById('loginSuccessMessage').innerHTML = ''; // Czyszczenie komunikatu sukcesu
        } else if (data.success) {
            document.getElementById('loginSuccessMessage').innerHTML = `<p class="success">${data.success}</p>`;
            document.getElementById('loginErrorMessages').innerHTML = ''; // Czyszczenie błędów

            // Przekierowanie po udanym logowaniu
            window.location.href = 'profil.php';
        }
    })
    .catch(error => {
        console.error('Błąd AJAX:', error);
    });
});


</script>
            <div id="context"><p class="regmobile">Nie masz konta?<br><a id="regmob" onclick="regmobile()">Zarejestruj sie!</a></p></div>
        </article>

        <!-- Sekcja nowości -->
        <div id="news">
            <h1>Nowości</h1>
            <ul>
		<li>18.03.2025 - REJESTRACJA DZIA�A KURNA!</li><br><br>
                <li>16.03.2025 - Otwarcie strony internetowej, rozpoczęcie projektu.</li><br><br>
                <li>13.03.2025 - Rozpoczęcie tworzenia projektu, tworzenie strony internetowej.</li><br><br>
                <li>10.03.2025 - Pomysł na otwarcie projektu "Hype2You".</li>
            </ul>
        </div>

        <!-- Formularz rejestracji -->
        <article id="reg">
            <div class="panele"><h1>Panel rejestracji</h1></div>
            <form id="registerForm" action="src/register.php" method="post">
    <input class="daner" id="reg_login" name="reg_login" placeholder="Nazwa Użytkownika" type="text" required><i class="fa-solid fa-circle-user iconsreg"></i>
    <input class="daner" id="reg_name" name="reg_name" placeholder="Imię" type="text" required><i class="fa-solid fa-user iconsreg"></i>
    <input class="daner" id="reg_lastname" name="reg_lastname" placeholder="Nazwisko" type="text" required><i class="fa-solid fa-user-secret iconsreg"></i>
    <input class="daner" id="reg_email" name="reg_email" placeholder="Email" type="email" required><i class="fa-solid fa-address-card iconsreg"></i>
    <input class="daner" id="reg_password" name="reg_password" placeholder="Hasło" type="password" required><i class="fa-solid fa-lock iconsreg"></i>
    <button type="button" class="toggle_password" onclick="togglePassword('reg_password', this)">👁</button>
    <input class="daner" id="reg_password_confirm" name="reg_password_confirm" placeholder="Potwierdź hasło" type="password" required><i class="fa-solid fa-lock iconsreg"></i>
    <button type="button" class="toggle_password" onclick="togglePassword('reg_password_confirm', this)">👁</button>
    
<div id="errorMessages"></div>
<div id="successMessage"></div>

    <button type="submit" id="rejs">Zarejestruj</button>
</form>
            <div id="regtext"><p class="regmobile">Masz juz konto?<br><a id="regmob" onclick="regmobile()">Zaloguj sie!</a></p></div>
        </article>
        <script>
            document.getElementById('registerForm').addEventListener('submit', function(e) {
    e.preventDefault(); // Zapobiegamy odświeżeniu strony

    // Zbieranie danych z formularza
    const formData = new FormData(this);

    // Wysłanie danych do PHP za pomocą AJAX
    fetch('src/register.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.json()) // Zakładając, że PHP zwraca JSON
    .then(data => {
        if (data.error) {
            // Wyświetlamy błędy rejestracji
            document.getElementById('errorMessages').innerHTML = `<p class="error">${data.error}</p>`;
            document.getElementById('successMessage').innerHTML = ''; // Czyszczenie komunikatu sukcesu
        } else if (data.success) {
            // Wyświetlamy komunikat sukcesu
            document.getElementById('successMessage').innerHTML = `<p class="success">${data.success}</p>`;
            document.getElementById('errorMessages').innerHTML = ''; // Czyszczenie błędów
        }
    })
    .catch(error => {
        console.error('Błąd AJAX:', error);
    });
});
        </script>

        <!-- Sekcja regulaminu -->
        <div id="regulamin">
            <h1>Regulamin</h1>
            <p>
                Korzystanie z usług Hype2You wymaga zaakceptowania regulaminu. Prosimy o dokładne zapoznanie się z warunkami świadczenia usług, 
                polityką prywatności oraz zasadami ochrony danych osobowych. Klikając poniższy przycisk, potwierdzasz swoją akceptację regulaminu oraz zobowiązujesz się do jego przestrzegania.
                Pełna treść regulaminu dostępna jest <a href="regulamin.php" target="_blank">tutaj</a>.
            </p>
            <label id="buttonrule" required>
                <input type="checkbox" class="myCheckbox" required>
                <span class="custom-checkbox" required></span> Zaakceptuj regulamin
            </label>
        </div>

        <!-- Przycisk przełączający między formularzami -->
        <article id="rules"></article>
        <div>
            <button id="switch" onclick="changePos()">Zarejestruj się</button>
        </div>
        </section>
    </main>
</body>
</html>