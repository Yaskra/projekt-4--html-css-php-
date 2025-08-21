<?php
session_start();
require_once 'src/functions.php';
include_once 'src/db.php';
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="static\scripts\kontakt_script.js"></script>
    <script src="https://kit.fontawesome.com/c5bd095824.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
    <link rel="stylesheet" href="static/css/kontakt_styles.css">
    <title>Kontakt</title>
</head>
<body>
    <header id="nag">
        <a><img src="static/png/icons/icon_1.webp" width="100" height="100" margin-left="100px"></a>
        <nav>
            <div id="hamburger">
                <div></div>
                <div></div>
                <div></div>
            </div>            
            <ul id="menu">
                <li><a href="index.php">Główna</a></li>
                <li><a href="o_nas.php">O nas</a></li>
                <li><a href="katalog.php">Katalog</a></li>
                <li><a href="kontakt.php">Kontakt</a></li>
                <?php if (isset($_SESSION['user_id'])): ?>
            <li><a href="profil.php" id="prof">Profil</a></li>
        <?php else: ?>
            <li><a href="log_reg.php" id="prof">Zaloguj / Zarejestruj</a></li>
        <?php endif; ?>
                <li onclick="changeText()">
                    <div id="button1" onclick="changeColor()">
                        <a id="btntext">Tryb ciemny</a>
                        <div id="btn1"></div>
                    </div>
                </li>
            </ul>
        </nav>        
    </header>
    <main>
        <section id="container">
        <article id="social-media">
            <div class="smtext"><h1>Media społecznościowe</h1></div>
            <button class="btn"><a class="btnlink" href="#">Instagram</a></button>
            <button class="btn"><a class="btnlink" href="#">Facebook</a></button>
            <button class="btn"><a class="btnlink" href="#">Discord</a></button>
            <button class="btn"><a class="btnlink" href="#">Email</a></button>
        </article>

        <article id="formularz">
                <div class="smtext"><h1>Formularz kontaktowy</h1></div>
                <div id="formkon">
                    <form id="contactForm" class="kontakt">
                        <h2>Imie:</h2>
                        <input type="text" id="first_name" name="first_name" class="formsput" placeholder="Imie" required>
                        <h2>Naziwsko:</h2>
                        <input type="text" id="last_name" name="last_name" class="formsput" placeholder="Nazwisko" required>
                        <h2>Email:</h2>
                        <input type="email" id="email" name="email" class="formsput" placeholder="Email" required>
                        <h2>Wiadomość:</h2>
                        <textarea id="message" name="message" class="formsput" placeholder="Wiadomość" required></textarea>
                        <div id="przyciski">
                            <button type="submit" class="formbtn">Wyslij</button>
                        </div>

                        <script>
                                function closeModal() {
                                document.getElementById('modal').classList.remove('active');
                            }

                            document.getElementById('contactForm').addEventListener('submit', function (e) {
                                e.preventDefault(); 

                                const formData = new FormData(this);

                                fetch('src/send_email.php', {
                                    method: 'POST',
                                    body: formData
                                })
                                .then(response => response.json())
                                .then(data => {
                                    
                                    const modal = document.getElementById('modal');
                                    const modalMessage = document.getElementById('modalMessage');

                                    if (data.status === 'success') {
                                        modalMessage.textContent = 'Wiadomość została wysłana pomyślnie! Odpowiemy na nią w ciągu 24godzin!';
                                    } else {
                                        modalMessage.textContent = 'Wystąpił błąd podczas wysyłania wiadomości.';
                                    }

                                    modal.classList.add('active');

                                    setTimeout(() => {
                                        modal.classList.remove('active');
                                    }, 3000);  // 3000ms = 3 sekundy

                                    this.reset();
                                })
                                .catch(error => {
                                    console.error('Błąd:', error);
                                });
                            });
                        </script>
                    </form>
                </div>
            </article>
        </section>
        <div id="modal" class="modal">
    <h2 id="modalMessage"></h2>
</div>
    </main>
    <footer>
        <section id="stopka">
            <div id="kontaktsto">
                <p>Kontakt: <a href="mailto:example@email.com">example@email.com</a></p>
                <p>Telefon: +48 123 456 789</p>
            </div>
            <div id="social-mediasto">
                <ul>
                <li><a href="https://facebook.com/TwojaFirma" target="_blank">Facebook</a></li>
                <li><a href="https://instagram.com/TwojaFirma" target="_blank">Instagram</a></li>
                <li><a href="https://twitter.com/TwojaFirma" target="_blank">Twitter</a></li>
            </ul>
            </div>
            <div id="prawa">
                <a href="polityka_prywatnosci.php" target="_blank">Polityka prywatności</a>
                <a href="regulamin.php" target="_blank">Regulamin</a>
                <p>&copy; 2025 Twoja Firma.<br> Wszystkie prawa zastrzeżone.</p>
            </div>
        </section>
    </footer>
</body>
</html>
