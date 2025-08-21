<?php
session_start();
require_once 'src/functions.php';
// Sprawdzenie, czy użytkownik jest zalogowany
// if (!isset($_SESSION['user_id'])) {
//     header("Location: log_reg.php");
//     exit();
include_once 'src/db.php';
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="static\css\regulamin_styles.css">
    <title>Document</title>
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
                <?php if (isset($_SESSION['id'])): ?>
                <li><a href="profil.php" id="prof">Profil</a></li>
                <li><a href="logout.php" id="logout">Wyloguj</a></li>
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
<h1>Regulamin Sklepu Internetowego Hype2You</h1>
<br>
<h2>1. Postanowienia ogólne</h2>
<p>1.1. Niniejszy regulamin określa zasady korzystania ze sklepu internetowego Hype2You, świadczącego usługi związane z tworzeniem stron internetowych, zwanego dalej "Usługodawcą".<br>
1.2. Regulamin jest zgodny z obowiązującym prawem polskim, w tym w szczególności:<br>
ustawą z dnia 30 maja 2014 r. o prawach konsumenta,<br>
ustawą z dnia 18 lipca 2002 r. o świadczeniu usług drogą elektroniczną,<br>
ustawą z dnia 23 kwietnia 1964 r. Kodeks cywilny.<br>
1.3. Każdy użytkownik korzystający z usług Hype2You zobowiązany jest do zapoznania się z regulaminem i jego akceptacji.<br></p>
<br>
<h2>2. Definicje</h2>
<p>2.1. Klient – osoba fizyczna, osoba prawna lub jednostka organizacyjna nieposiadająca osobowości prawnej, która zamawia usługi w Hype2You.<br>
2.2. Konsument – Klient będący osobą fizyczną dokonującą czynności prawnej niezwiązanej bezpośrednio z jej działalnością gospodarczą lub zawodową.<br>
2.3. Usługodawca – Hype2You.<br>
2.4. Usługa – usługi związane z tworzeniem stron internetowych oferowane przez Hype2You.<br>
2.5. Zamówienie – oświadczenie woli Klienta, zmierzające do zawarcia umowy o świadczenie usług.<br>
2.6. Umowa o świadczenie usług – umowa zawierana pomiędzy Klientem a Usługodawcą w Sklepie Internetowym.<br></p>
<br>
<h2>3. Warunki świadczenia usług drogą elektroniczną</h2>
<p>3.1. Usługodawca zobowiązuje się do świadczenia usług zgodnie z regulaminem oraz obowiązującymi przepisami prawa.<br>
3.2. Klient zobowiązany jest do:<br>
podawania prawdziwych danych osobowych,<br>
korzystania ze Sklepu zgodnie z regulaminem,<br>
powstrzymywania się od dostarczania treści o charakterze bezprawnym.<br></p>
<br>
<h2>4. Zamówienia</h2>
<p>4.1. Zamówienia można składać przez całą dobę, 7 dni w tygodniu.<br>
4.2. Klient zobowiązany jest do podania prawidłowych i aktualnych danych osobowych.<br>
4.3. Usługodawca ma prawo do anulowania zamówienia w przypadku:<br>
podania nieprawdziwych danych,<br>
nieotrzymania płatności w wyznaczonym terminie.<br></p>
<br>
<h2>5. Płatności</h2>
<p>5.1. Hype2You akceptuje następujące metody płatności:<br>
przelew bankowy,<br>
karty kredytowe,<br>
szybkie płatności elektroniczne.<br>
5.2. Wszystkie ceny podane w Sklepie są cenami brutto i zawierają podatek VAT (jeśli dotyczy).<br><p>
<br>
<h2>6. Realizacja usług</h2>
<p>6.1. Usługi realizowane są na podstawie indywidualnych zamówień Klienta.<br>
6.2. Czas realizacji usługi uzależniony jest od zakresu prac i ustalany indywidualnie z Klientem.<br>
6.3. Klient zobowiązany jest do dostarczenia niezbędnych materiałów do realizacji usługi, jeśli jest to wymagane.<br></p>
<br>
<h2>7. Odstąpienie od umowy</h2>
<p>
7.1. Konsument może odstąpić od umowy w terminie 14 dni bez podania przyczyny, jeśli usługa nie została jeszcze rozpoczęta.<br>
7.2. Formularz odstąpienia od umowy stanowi załącznik do regulaminu.<br></p>
<br>
<h2>8. Reklamacje</h2>
<p>
8.1. Reklamacje można składać pisemnie lub drogą elektroniczną na adres: [E-MAIL].<br>
8.2. Reklamacje rozpatrywane są w terminie 14 dni od daty ich wpłynięcia.<br></p>
<br>
<h2>9. Ochrona danych osobowych</h2>
<p>9.1. Administratorem danych osobowych Klientów jest Usługodawca.<br>
9.2. Dane osobowe przetwarzane są zgodnie z RODO.<br>
9.3. Klient ma prawo do:<br>
dostępu do swoich danych,<br>
ich sprostowania,<br>
żądania usunięcia.<br></p>
<br>
<h2>10. Postanowienia końcowe</h2>
<p>10.1. Regulamin wchodzi w życie z dniem jego publikacji na stronie Sklepu.<br>
10.2. Usługodawca zastrzega sobie prawo do zmian w regulaminie.<br>
10.3. W sprawach nieuregulowanych zastosowanie mają przepisy prawa polskiego.<br><p>

<h3><a href="#">Wzór formularza odstąpienia od umowy.</a></h3>
</main>
<footer>
        <section id="stopka">
            <div id="kontakt">
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