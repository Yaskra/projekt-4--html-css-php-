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
    <script src="static\scripts\o_nas_script.js"></script>
    <script src="https://kit.fontawesome.com/c5bd095824.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
    <link rel="stylesheet" href="static/css/o_nas_styles.css">
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
        <section id="glowna">
            <article id="wstep">
                <div id="title">
                <h1>Witaj w Hype2You – miejscu, gdzie nowoczesne technologie spotykają się z kreatywnością.</h1>
                </div>
                <button id="dsw" onclick="scrollToSection()">Dowiedz się więcej!</button>
            </article>
        </section>

        <div class="nao" id="nc">
            <h1 class="no">Nasze cele</h1>
        </div>
        <section class="ncel">
            <article class="nasc">
                <h1>Naszym celem jest projektowanie nowoczesnych, estetycznych i funkcjonalnych stron internetowych, <br>które nie tylko wyglądają świetnie, ale przede wszystkim skutecznie działają. <br>
                Wiemy, jak ważne jest pierwsze wrażenie – dlatego tworzymy rozwiązania, które angażują użytkowników, zwiększają konwersje i budują zaufanie do marki.<br>
                Jesteśmy zespołem pasjonatów, którzy wierzą, że każda firma zasługuje na stronę internetową dopasowaną do jej unikalnych potrzeb.</h1>
                <br>
                <h1>Strona internetowa to nie tylko wizytówka, ale przede wszystkim narzędzie do osiągania celów – czy to sprzedaży, pozyskiwania klientów, czy budowania społeczności.<br>
                Dlatego projektujemy strony tak, aby były maksymalnie intuicyjne, funkcjonalne i angażujące dla użytkowników.</h1>
                <br>
                <h1>Wierzymy, że dobra współpraca to podstawa sukcesu. <br>
                Nie kończymy naszej pracy na wdrożeniu strony – zapewniamy pełne wsparcie, doradztwo oraz możliwość dalszej optymalizacji i rozwoju. <br>
                Jesteśmy partnerami dla naszych klientów, pomagając im osiągać lepsze wyniki online.</h1>
                <br>
                <h1>Tworząc strone od podstaw dla klienta, nie tworzymy szablonowej strony – każda z nich jest unikatowa i dostosowana do charakteru danej firmy. <br>
                Dbamy o spójność wizualną, dobierając odpowiednią kolorystykę, <br>
                typografię i grafikę, by strona nie tylko dobrze działała, ale również zapadała w pamięć.</h1>
                <br>
                <h1>Nie budujemy stron "na szybko" – projektujemy je z myślą o przyszłości. <br>
                Skalowalność, łatwość aktualizacji i elastyczność to kluczowe cechy naszych realizacji. <br>
                Dzięki temu każda witryna może rozwijać się wraz z biznesem klienta.</h1>
            </article>
        </section>

        <div class="nao">
            <h1 class="no">Co nas wyróżnia?</h1>
        </div>
        <section class="ncel" id="sek1">
            <article class="nasc">
                <h1>Co nas wyróżnia? Przede wszystkim indywidualne podejście do każdego projektu. <br>
                Nie tworzymy stron „z szablonu” – każda jest dopasowana do charakteru firmy, jej celów i oczekiwań klientów. <br>
                Stawiamy na nowoczesny, estetyczny i intuicyjny design, który nie tylko przyciąga uwagę, ale także skutecznie konwertuje odwiedzających w klientów.<br>
                Nasze strony są szybkie, responsywne i zoptymalizowane pod kątem SEO, dzięki czemu świetnie wyglądają na każdym urządzeniu i łatwo się pozycjonują. <br>
                Dbamy również o automatyzację i integracje – od systemów płatności po narzędzia marketingowe, wszystko po to, by ułatwić zarządzanie biznesem online.<br>
                Po uruchomieniu projektu nie zostawiamy klientów samych sobie – zapewniamy wsparcie techniczne, doradztwo i aktualizacje, aby strona działała bez zarzutu i rozwijała się wraz z firmą. <br>
                Tworzenie stron to nasza pasja, dlatego każdy projekt traktujemy z pełnym zaangażowaniem i dbałością o detale.</h1>
                <br>
                <h1>Nie boimy się wyzwań ani niestandardowych pomysłów. <br>
                Wierzymy, że internet to przestrzeń nieograniczonych możliwości, dlatego chętnie realizujemy zarówno klasyczne strony firmowe, <br>
                jak i innowacyjne projekty wymagające niestandardowego podejścia. <br>
                Nasz zespół to specjaliści z różnych dziedzin – designerzy, programiści i marketerzy – którzy wspólnie tworzą spójną i efektywną całość.<br>    
                Dążymy do tego, by nasze strony nie tylko przyciągały uwagę, ale również angażowały użytkowników i realnie wspierały rozwój biznesu. <br>
                Niezależnie od tego, czy dopiero zaczynasz swoją przygodę w sieci, czy szukasz sposobów na rozwinięcie istniejącego biznesu – jesteśmy tutaj, by Ci pomóc!</h1>
                <br>
                <h1>Wiemy, że dobra strona internetowa to nie tylko design i technologia, ale także historia i emocje. <br>
                Dlatego tworzymy rozwiązania, które nie tylko działają, ale również budują markę, wzmacniają jej tożsamość i przyciągają właściwych odbiorców. <br>
                Stawiamy na przejrzystą komunikację, terminowość i uczciwość – chcemy, aby współpraca z nami była nie tylko efektywna, ale również przyjemna.</h1>
            </article>
        </section>

        <div class="nao">
            <h1 class="no">Nasze usługi</h1>
        </div>
        <section id="ncel1">
            <article id="nasc1">
                <h1>Jako firma webdeveloperska, oferujemy kompleksowe rozwiązania, które pomogą Ci zbudować silną obecność w internecie i skutecznie rozwijać Twój biznes online. <br>
                Nasze usługi obejmują cały proces – od pomysłu, przez projektowanie, aż po wdrożenie i długoterminowe wsparcie. <br>
                Działamy z pasją i zaangażowaniem, aby dostarczyć Ci stronę, która będzie spełniała Twoje oczekiwania i przynosiła realne efekty.</h1>
                <div id="div1">
                    <br>
                <h1>1. Projektowanie Stron Internetowych</h1>
                <p>Nasze podejście do projektowania stron internetowych jest kreatywne i dopasowane do Twoich potrzeb. <br>
                Tworzymy strony, które są nie tylko estetyczne i funkcjonalne, ale również łatwe w nawigacji, <br>
                dostosowane do różnych urządzeń i zoptymalizowane pod kątem SEO. Każdy projekt jest unikalny, <br>
                odzwierciedlający charakter Twojej marki i przyciągający odpowiednią grupę docelową.</p>
                <br>
                <h1>2. Responsywność i Optymalizacja</h1>
                <p>Każda strona internetowa, którą tworzymy, jest w pełni responsywna, co oznacza, <br>
                że wygląda i działa doskonale na każdym urządzeniu – od komputerów po telefony komórkowe. <br>
                Ponadto, dbamy o optymalizację Twojej strony pod kątem szybkości ładowania, <br>
                co ma kluczowe znaczenie nie tylko dla doświadczeń użytkowników, ale także dla wyników w wyszukiwarkach.</p>
                <br>
                <h1>3. Usługi SEO (Search Engine Optimization)</h1>
                <p>Wszystkie nasze projekty są zoptymalizowane pod kątem SEO. Dzięki odpowiedniemu doborowi słów kluczowych, <br>
                optymalizacji treści i struktury strony, zapewniamy, że Twoja witryna będzie dobrze widoczna w wynikach wyszukiwania. <br>
                Nasze usługi SEO obejmują zarówno optymalizację on-site, jak i off-site, <br>
                aby zwiększyć widoczność Twojej strony i przyciągnąć organiczny ruch.</p>
                <br>
                <h1>4. Integracje i Automatyzacja</h1>
                <p>Pomagamy zintegrować Twoją stronę z różnymi narzędziami, które usprawniają zarządzanie biznesem online. <br>
                Integrujemy systemy płatności, zarządzanie zamówieniami, CRM-y, a także narzędzia do e-mail marketingu i analityki. <br>
                Dzięki tym integracjom, Twój biznes staje się bardziej efektywny i mniej czasochłonny.</p>
                </div>

                <div id="div2">
                    <br>
                <h1>5. Utrzymanie i Wsparcie Techniczne</h1>
                <p>Nasza współpraca nie kończy się na wdrożeniu strony. <br>
                Oferujemy stałe wsparcie techniczne, które pomoże utrzymać stronę w pełnej sprawności. <br>
                Przeprowadzamy regularne aktualizacje, monitorujemy bezpieczeństwo strony i pomagamy w rozwiązywaniu wszelkich problemów,
                które mogą pojawić się po jej uruchomieniu.</p>
                <br>
                <h1>6. Strategia i Marketing Online</h1>
                <p>Tworzymy strony, które nie tylko wyglądają dobrze, ale również skutecznie wspierają Twoje cele marketingowe. <br>
                Pomagamy w opracowaniu strategii marketingowej, która pomoże zwiększyć ruch na stronie, <br>
                pozyskać nowych klientów i zbudować lojalność wśród obecnych. <br>
                Oferujemy usługi związane z kampaniami reklamowymi w Google Ads, Facebooku, Instagramie i innych platformach.</p>
                <br>
                <h1>7. Branding i Identyfikacja Wizualna</h1>
                <p>Wspieramy naszą ofertę o pełną usługę brandingu – od stworzenia logo po projektowanie pełnej identyfikacji wizualnej. <br>
                Dbamy o to, by Twoja marka była spójna na wszystkich płaszczyznach, <br>
                od strony internetowej, przez materiały marketingowe, aż po media społecznościowe. <br>
                Każdy element Twojej obecności online będzie odzwierciedlał wartości i charakter Twojej firmy.</p>
                <br>
                <h1>8. Aplikacje Mobilne</h1>
                <p>Tworzymy aplikacje mobilne, które współpracują z Twoją stroną internetową, <br>
                umożliwiając Twoim klientom łatwiejszy dostęp do Twoich produktów i usług. <br>
                Aplikacje są zaprojektowane z myślą o użytkownikach i zapewniają doskonałą użyteczność oraz estetykę, <br>
                które przekładają się na pozytywne doświadczenia użytkowników.</p>
                </div>
            </article>
        </section>

        <div class="nao"  id="cnw">
            <h1 class="no">Dlaczego warto z nami współpracować?</h1>
        </div>
        <section id="ncel2">
            <article id="nasc2">
                <h1>Warto z nami współpracować, ponieważ łączymy pasję do tworzenia wyjątkowych stron internetowych z solidną wiedzą techniczną i doświadczeniem w branży. <br>
                Nasze podejście jest indywidualne – każdemu klientowi oferujemy rozwiązania szyte na miarę, które w pełni odpowiadają jego potrzebom i celom biznesowym. <br>
                Tworzymy strony, które nie tylko wyglądają dobrze, ale także skutecznie przyciągają odwiedzających, zwiększają konwersje i wspierają rozwój firmy online.
                Jako zespół specjalistów w różnych dziedzinach (design, programowanie, marketing), jesteśmy w stanie zaoferować kompleksową obsługę – od projektowania, przez wdrożenie, aż po długoterminowe wsparcie. <br>
                Nasze usługi są zawsze aktualne, zoptymalizowane pod kątem SEO, responsywne i szybko działające. Ponadto, dbamy o transparentną komunikację i terminowość, aby współpraca była nie tylko efektywna, ale i przyjemna.
                Nasza misja to pomoc klientom w osiąganiu sukcesów w sieci – dlatego angażujemy się w każdy projekt, traktując go jak własny, a wyniki naszej pracy mówią same za siebie. <br>
                Z nami Twój biznes w internecie będzie miał solidne fundamenty, dzięki którym łatwiej osiągniesz sukces.</h1>
            </article>
        </section>
        <button id="scrollButton"><i class="fa-solid fa-arrow-up"></i>Powrót<i class="fa-solid fa-arrow-up"></i></button>
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