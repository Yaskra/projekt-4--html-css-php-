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
    <script src="static\scripts\profil_script.js"></script>
    <script src="https://kit.fontawesome.com/c5bd095824.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="static\css\profil_styles.css">
    <title>Profil</title>
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
    <main id="backbubble">
        <section id="tabela">
            <div id="title"><h1>Profil użytkownika</h1></div>
            <div id="profstyle">
                <ul id="style">
                    <li onclick="Global()" class="profstyles" id="glob"><a>Ogólne</a><i class="fa-solid fa-house icons"></i></li>
                    <li onclick="Contact()" class="profstyles" id="kont"><a>Kontakt</a><i class="fa-solid fa-envelope icons"></i></li>
                    <li onclick="Settings()" class="profstyles" id="sett"><a>Ustawienia</a><i class="fa-solid fa-gear icons"></i></li>
                    <li onclick="Orders()" class="profstyles" id="zamow"><a>Zamówienia</a><i class="fa-solid fa-clipboard icons"></i></li>
                    <li onclick="Reviews()" class="profstyles" id="mopi"><a>Moje opinie</a><i class="fa-solid fa-book icons"></i></li>
                    <li id="logout" onclick="window.location.href='src/logout.php'"><a href="src/logout.php">Wyloguj się</a><i class="fa-solid fa-right-to-bracket icons"></i></li>
                </ul>
            </div>

            <div id="information">
                <div id="ogolnie">
                    <div class="titleinf"><h1>OGÓLNE</h1></div><br>
                    <h3>Imię: <?php echo htmlspecialchars($_SESSION['reg_name'] ?? 'Brak imienia'); ?></h3><br>
                    <h3>Nazwisko: <?php echo htmlspecialchars($_SESSION['reg_lastname'] ?? 'Brak nazwiska'); ?></h3><br>
                    <h3>Nazwa użytkownika: <?php echo htmlspecialchars($_SESSION['reg_login'] ?? 'Brak nazwy użytkownika'); ?></h3><br>
                    <h3>Email: <?php echo htmlspecialchars($_SESSION['reg_email'] ?? 'Brak emaila'); ?></h3><br>


                </div>
                <div id="kontakt">
                    <div class="titleinf"><h1>KONTAKT</h1></div>
                </div>
                <div id="ustawienia">
                    <div class="titleinf"><h1>USTAWIENIA</h1></div>
                </div>
                <div id="zamowienia">
                    <div class="titleinf"><h1>ZAMÓWIENIA</h1></div>
                </div>
                <div id="mojeopinie">
                    <div class="titleinf"><h1>MOJE OPINIE</h1></div>
                </div>
            </div>
        </section>
    </main>
    <footer>
        <section id="stopka">
            <div id="kontaktfooter">
                <p>Kontakt: <a href="mailto:example@email.com">example@email.com</a></p>
                <p>Telefon: +48 123 456 789</p>
            </div>
            <div id="social-media">
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