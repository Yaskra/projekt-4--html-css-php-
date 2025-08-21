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
    <script src="static\scripts\index_script.js"></script>
    <script src="https://kit.fontawesome.com/c5bd095824.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
    <link rel="preload" as="image" href="/static/png/images/dm_image.webp">
    <link rel="stylesheet" href="static\css\index_style.css">
    <link rel="icon" type="image/png" href="static\png\icons\icon_1.webp">
    <title>Hype2You</title>
</head>
<body>
<header id="nag">
            <a id="logo"><img src="static/png/icons/icon_1.webp" width="100" height="100" margin-left="100px"></a>
        <nav>
            <div id="hamburger">
                <div></div>
                <div></div>
                <div></div>
            </div>            
            <ul id="menu">
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
                        <div id="btn1"></div>
                    </div>
                </li>
            </ul>
        </nav>        
    </header>
    
    
    <main>
        <section id="welcome">
            <div id="blur">
                <div id="welcometekst">
                    <h1>Cieszymy się że nas odwiedziłeś</h1>
                    <button type="button" id="button2"><a href="pages/katalog.html">Przeglądaj</a></button>
                </div>
            </div>
        </section>
        <div class="nao">
            <h1 class="no">Nasza oferta</h1>
        </div>
        <article id="bloki">
            <div id="kbok">
        <div id="blok1">
            <div id="anim1">
            <h2>HTML + CSS</h2><br>
            <p class="btext">📌<br>Idealne dla początkujących!<br><br>
                HTML i CSS to podstawowe technologie do tworzenia stron internetowych. Dzięki nim możesz zbudować estetyczny i funkcjonalny layout, dostosowany do różnych urządzeń.</p>
                <div class="cena">
                    <h2>Cena już od:</h2>
                    <p class="btext">150.00zł</p>
                </div>
            </div>
        </div>
        <div id="blok2">
            <div id="anim2">
            <h2>HTML + CSS + JS</h2><br>
            <p class="btext">⚡<br>Więcej dynamiki!<br><br>
                Dodanie JavaScript pozwala na tworzenie interaktywnych stron. Możesz animować elementy, reagować na działania użytkownika i sprawić, że Twoja strona będzie bardziej angażująca.</p>
                <div class="cena">
                    <h2>Cena już od:</h2>
                    <p class="btext">300.00zł</p>
                </div>
            </div>
        </div>
        <div id="blok3">
            <div id="anim3">
            <h2>HTML + CSS + PHP</h2><br>
            <p class="btext">🔗<br>Połącz front-end z back-endem!<br><br>
                PHP pozwala na obsługę formularzy, baz danych i dynamiczne generowanie treści. To pierwszy krok do budowy profesjonalnych stron i aplikacji internetowych.</p>
                <div class="cena">
                    <h2>Cena już od:</h2>
                    <p class="btext">500.00zł</p>
                </div>
            </div>    
        </div>
        <div id="blok4">
            <div id="anim4">
            <h2>HTML + CSS + JS + PHP</h2><br>
            <p class="btext">🌍<br>Kompleksowa strona internetowa!<br><br>
                Połączenie HTML, CSS, JavaScript i PHP daje pełne możliwości budowania dynamicznych serwisów, sklepów internetowych i aplikacji webowych. To technologia, której używają profesjonaliści.</p>
                <div class="cena">
                    <h2>Cena już od:</h2>
                    <p class="btext">800.00zł</p>
                </div>
            </div>
        </div>
        <div id="blok5">
            <div id="anim5">
            <h2>OFERTA NA ZAMÓWIENIE</h2><br>
            <p class="btext">🌍<br>Robimy to co klient powie!<br><br>
                Nasz zespół wysłucha, doradzi oraz wykona strone internetową na życzenie klienta, dobierze odpowiedni język programowania tak aby obie strony były zadowolone.</p>
                <div class="cena">
                    <h2>Cena:</h2>
                    <p class="btext">Do uzgodnienia.</p>
                </div>
            </div>
        </div>
        </div>
        </article>
        <div class="nao">
            <h1 class="no">Dlaczego my?</h1>
        </div>
        <article>
        <div id="dmbg">
        <div id="dm">
            <div id="dmmain">
                <h1>W świecie internetu liczy się pierwsze wrażenie</h1>
            <div id="content">
                <div id="zdj">
                </div>
                <p> – a my sprawimy, że Twoja strona zachwyci od pierwszego kliknięcia. 
                    Choć jesteśmy nową marką na rynku, łączymy świeże spojrzenie z nowoczesnymi technologiami, tworząc strony, 
                    które nie tylko wyglądają świetnie, ale przede wszystkim przyciągają klientów i zwiększają sprzedaż.<br>
                   <b> ✅ Indywidualne podejście</b> – Nie działamy według szablonów. Każdy projekt dostosowujemy do Twojej marki, branży i celów, aby wyróżnić Cię na tle konkurencji.<br>
                   <b>🚀 Nowoczesne technologie</b> – Tworzymy szybkie, responsywne i intuicyjne strony, które świetnie wyglądają na każdym urządzeniu. Nasze projekty nie tylko przyciągają uwagę, ale też działają bez zarzutu.<br>
                   <b>🎯 Strony nastawione na wyniki</b> – Tworzymy witryny zoptymalizowane pod kątem SEO, które pomagają zdobywać klientów i generować większe przychody. Dbamy o intuicyjną nawigację, przejrzysty układ i odpowiednie wezwania do działania (CTA), które przekładają się na realne efekty.<br>
                   <b>💡 Prostota i funkcjonalność</b> – Twoja strona powinna nie tylko świetnie wyglądać, ale też być łatwa w obsłudze. Projektujemy intuicyjne interfejsy, dzięki czemu użytkownicy zostają na dłużej i chętniej podejmują decyzję zakupową.<br>
                   <b>🔒 Bezpieczeństwo i wydajność</b> – Dbamy o ochronę danych i optymalizujemy strony pod kątem szybkości ładowania, co jest kluczowe zarówno dla użytkowników, jak i dla Google.<br>
                   <b>🤝 Pełne wsparcie i doradztwo</b> – Po wdrożeniu strony nie zostawiamy Cię samego. Oferujemy pomoc, doradztwo i szkolenia, dzięki którym będziesz mógł zarządzać swoją stroną bez stresu.<br>
                   <b>💼 Strona jako narzędzie biznesowe</b> – Twój sukces to nasz priorytet. Dlatego nie tylko tworzymy strony, ale pomagamy Ci wykorzystać ich potencjał, doradzając w kwestiach marketingu i strategii online.<br>
                   <b>🔗 Integracje i automatyzacja</b> – W razie potrzeby wdrożymy integracje z systemami płatności, platformami sprzedażowymi, systemami rezerwacji czy narzędziami analitycznymi, aby maksymalnie usprawnić działanie Twojego biznesu.
                </p><br>
            </div>
                <h3>Z nami nie dostajesz tylko strony internetowej – dostajesz skuteczne narzędzie do rozwoju swojego biznesu. <br>Skontaktuj się z nami i poczuj, jak możemy Ci pomóc!</h3>
            </div>
        </div>
        </div>
        </article>
        <div class="nao">
            <h1 class="no">Opinie</h1>
        </div>
        <article id="opinie">
            <div id="wpisy">
                <div id="opinia">
                <input type="text" id="answer" placeholder="Podziel się swoją opinią">
                <button type="submit" id="wyslij">Wyślij</button>
                </div>
            </div>
    <div class="slider">
        <div class="feedback1"><!--NIE DOTYKAC-->
            <h1 class="przejscie"></h1><!--NIE DOTYKAC-->
            <p class="przejscie"></p><!--NIE DOTYKAC-->
        </div>
        <div class="feedback">
            <h1 class="tresc">Nick 1</h1>
            <p class="tresc">Treść opinii 1</p>
        </div>
        <div class="feedback">
            <h1 class="tresc">Nick 2</h1>
            <p class="tresc">Treść opinii 2</p>
        </div>
        <div class="feedback">
            <h1 class="tresc">Nick 3</h1>
            <p class="tresc">Treść opinii 3</p>
        </div>
        <div class="feedback">
            <h1 class="tresc">Nick 4</h1>
            <p class="tresc">Treść opinii 4</p>
        </div>
        <div class="feedback">
            <h1 class="tresc">Nick 5</h1>
            <p class="tresc">Treść opinii 5</p>
        </div>

        <!-- Duplikaty dla płynnej animacji -->
        <div class="feedback1"><!--NIE DOTYKAC-->
            <h1 class="przejscie"></h1><!--NIE DOTYKAC-->
            <p class="przejscie"></p><!--NIE DOTYKAC-->
        </div>
        <div class="feedback">
            <h1 class="tresc">Nick 1</h1>
            <p class="tresc">Treść opinii 1</p>
        </div>
        <div class="feedback">
            <h1 class="tresc">Nick 2</h1>
            <p class="tresc">Treść opinii 2</p>
        </div>
        <div class="feedback">
            <h1 class="tresc">Nick 3</h1>
            <p class="tresc">Treść opinii 3</p>
        </div>
        <div class="feedback">
            <h1 class="tresc">Nick 4</h1>
            <p class="tresc">Treść opinii 4</p>
        </div>
        <div class="feedback">
            <h1 class="tresc">Nick 5</h1>
            <p class="tresc">Treść opinii 5</p>
        </div>
    </div>
</article>

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