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
        <p>
        Polityka Prywatności Hype2You

1. Postanowienia ogólne

1.1. Niniejsza Polityka Prywatności określa zasady przetwarzania danych osobowych użytkowników serwisu internetowego Hype2You, prowadzonego przez osobę fizyczną nieposiadającą zarejestrowanej działalności gospodarczej, zwaną dalej „Administratorem”.

1.2. Administrator dokłada wszelkich starań, aby zapewnić ochronę prywatności użytkowników oraz bezpieczeństwo przetwarzanych danych osobowych zgodnie z:

Rozporządzeniem Parlamentu Europejskiego i Rady (UE) 2016/679 (RODO),

ustawą z dnia 10 maja 2018 r. o ochronie danych osobowych,

ustawą z dnia 18 lipca 2002 r. o świadczeniu usług drogą elektroniczną.

1.3. Korzystanie z serwisu Hype2You oznacza akceptację zasad określonych w niniejszej Polityce Prywatności.

2. Zakres i cel przetwarzania danych osobowych

2.1. Administrator przetwarza dane osobowe w następujących celach:

realizacji zamówień i świadczenia usług (art. 6 ust. 1 lit. b RODO),

obsługi zapytań i komunikacji z klientami (art. 6 ust. 1 lit. f RODO),

prowadzenia działań marketingowych za zgodą użytkownika (art. 6 ust. 1 lit. a RODO),

realizacji obowiązków wynikających z przepisów prawa (art. 6 ust. 1 lit. c RODO).

2.2. Dane osobowe mogą obejmować:

imię i nazwisko,

adres e-mail,

numer telefonu,

adres IP,

dane dotyczące płatności (przetwarzane przez zewnętrznych operatorów płatności).

3. Odbiorcy danych osobowych

3.1. Administrator może udostępniać dane osobowe podmiotom trzecim wyłącznie w zakresie niezbędnym do realizacji usług, w tym:

operatorom płatności (np. PayU, Przelewy24),

dostawcom usług hostingowych i informatycznych,

podmiotom świadczącym usługi księgowe i prawne.

3.2. Dane osobowe nie są przekazywane do państw trzecich poza Europejski Obszar Gospodarczy (EOG), chyba że użytkownik wyrazi na to zgodę lub jest to wymagane do realizacji usługi.

4. Okres przechowywania danych

4.1. Dane osobowe będą przechowywane:

przez okres niezbędny do realizacji usług i zamówień,

do czasu wycofania zgody na przetwarzanie danych w celach marketingowych,

przez okres wymagany przepisami prawa w przypadku obowiązków podatkowych i rachunkowych.

4.2. Po upływie wskazanych okresów dane osobowe są usuwane lub anonimizowane.

5. Prawa użytkowników

5.1. Użytkownik ma prawo do:

dostępu do swoich danych osobowych,

sprostowania (poprawienia) danych,

usunięcia danych („prawo do bycia zapomnianym”),

ograniczenia przetwarzania,

przenoszenia danych do innego administratora,

wniesienia sprzeciwu wobec przetwarzania danych w celach marketingowych,

wniesienia skargi do Prezesa Urzędu Ochrony Danych Osobowych (PUODO).

5.2. W celu realizacji powyższych praw należy skontaktować się z Administratorem pod adresem e-mail: [adres e-mail].

6. Pliki cookies

6.1. Serwis Hype2You wykorzystuje pliki cookies w celu:

zapewnienia prawidłowego działania serwisu,

analizy ruchu na stronie,

prowadzenia działań marketingowych.

6.2. Użytkownik może w każdej chwili zmienić ustawienia przeglądarki w zakresie obsługi plików cookies.

7. Zabezpieczenia danych osobowych

7.1. Administrator stosuje odpowiednie środki techniczne i organizacyjne w celu zapewnienia ochrony przetwarzanych danych osobowych, w tym:

szyfrowanie transmisji danych (SSL),

zabezpieczenie baz danych przed nieuprawnionym dostępem,

ograniczenie dostępu do danych wyłącznie do osób upoważnionych.

8. Postanowienia końcowe

8.1. Administrator zastrzega sobie prawo do zmian w Polityce Prywatności w związku z rozwojem usług lub zmianami w przepisach prawa.

8.2. Aktualna wersja Polityki Prywatności jest zawsze dostępna na stronie internetowej Hype2You.

8.3. Wszelkie pytania dotyczące przetwarzania danych osobowych można kierować na adres e-mail: [adres e-mail].
        </p>
    </main>
</body>
</html>