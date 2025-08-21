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
    <script src="static\scripts\katalog_script.js"></script>
    <script src="https://kit.fontawesome.com/c5bd095824.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
    <link rel="stylesheet" href="static/css/katalog_style.css">
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
        <!--Kolorowe-->

        <div id="nao">
            <h1 class="no">Kolorowe:</h1>
        </div>
        <section id="color">
        <divrticle id="oferty">
            <div class="offkacolor">
                <p>Czerwony</p>
                <div class="buttons">
                    <button class="btn">Kup</button><button class="btn">Zobacz</button>
                </div>
            </div>
            <div class="offkacolor">
                <p>Pomaranczowy</p>
                <div class="buttons">
                    <button class="btn">Kup</button><button class="btn">Zobacz</button>
                </div>
            </div>
            <div class="offkacolor">
                <p>Zielony</p>
                <div class="buttons">
                    <button class="btn">Kup</button><button class="btn">Zobacz</button>
                </div>
            </div>
            <div class="offkacolor">
                <p>Niebieski</p>
                <div class="buttons">
                    <button class="btn">Kup</button><button class="btn">Zobacz</button>
                </div>
            </div>
            <div class="offkacolor">
                <p>Fioletowy</p>
                <div class="buttons">
                    <button class="btn">Kup</button><button class="btn">Zobacz</button>
                </div>
            </div>
            <div class="offkacolor">
                <p>Szary</p>
                <div class="buttons">
                    <button class="btn">Kup</button><button class="btn">Zobacz</button>
                </div>
            </div>
            <div class="offkacolor">
                <p>Czarny</p>
                <div class="buttons">
                    <button class="btn">Kup</button><button class="btn">Zobacz</button>
                </div>
            </div>
        </article>
        </section>
        
        <!--Nowoczesne-->

        <div id="nao1">
            <h1 class="no">Nowoczesne:</h1>
        </div>
        <section id="modern">
        <divrticle id="oferty1">
            <div class="offkamodern">
                <p>NeonFlow</p>
                <div class="buttons">
                    <button class="btn">Kup</button><button class="btn">Zobacz</button>
                </div>
            </div>
            <div class="offkamodern">
                <p>NeonGlow</p>
                <div class="buttons">
                    <button class="btn">Kup</button><button class="btn">Zobacz</button>
                </div>
            </div>
            <div class="offkamodern">
                <p>PixelVibe</p>
                <div class="buttons">
                    <button class="btn">Kup</button><button class="btn">Zobacz</button>
                </div>
            </div>
            <div class="offkamodern">
                <p>NovaGrid</p>
                <div class="buttons">
                    <button class="btn">Kup</button><button class="btn">Zobacz</button>
                </div>
            </div>
            <div class="offkamodern">
                <p>VortexUI</p>
                <div class="buttons">
                    <button class="btn">Kup</button><button class="btn">Zobacz</button>
                </div>
            </div>
            <div class="offkamodern">
                <p>AetherVawe</p>
                <div class="buttons">
                    <button class="btn">Kup</button><button class="btn">Zobacz</button>
                </div>
            </div>
            <div class="offkamodern">
                <p>SynthEdge</p>
                <div class="buttons">
                    <button class="btn">Kup</button><button class="btn">Zobacz</button>
                </div>
            </div>
        </article>
        </section>

        <!--Vintige-->

        <div id="nao2">
            <h1 class="no">Vintige:</h1>
        </div>
        <section id="vintige">
        <divrticle id="oferty2">
            <div class="offkavintige">
                <p>RusticCharm</p>
                <div class="buttons">
                    <button class="btn">Kup</button><button class="btn">Zobacz</button>
                </div>
            </div>
            <div class="offkavintige">
                <p>GoldenEra</p>
                <div class="buttons">
                    <button class="btn">Kup</button><button class="btn">Zobacz</button>
                </div>
            </div>
            <div class="offkavintige">
                <p>RetroAura</p>
                <div class="buttons">
                    <button class="btn">Kup</button><button class="btn">Zobacz</button>
                </div>
            </div>
            <div class="offkavintige">
                <p>VintageVogue</p>
                <div class="buttons">
                    <button class="btn">Kup</button><button class="btn">Zobacz</button>
                </div>
            </div>
            <div class="offkavintige">
                <p>TimelessHue</p>
                <div class="buttons">
                    <button class="btn">Kup</button><button class="btn">Zobacz</button>
                </div>
            </div>
            <div class="offkavintige">
                <p>NostalgiaWorks</p>
                <div class="buttons">
                    <button class="btn">Kup</button><button class="btn">Zobacz</button>
                </div>
            </div>
            <div class="offkavintige">
                <p>OldSoul</p><div class="buttons">
                    <button class="btn">Kup</button><button class="btn">Zobacz</button>
                </div>
            </div>
        </article>
        </section>

        <!--Regionalne-->

        <div id="nao3">
            <h1 class="no">Regionalne:</h1>
        </div>
        <section id="region">
        <divrticle id="oferty3">
            <div class="offkareg">
                <p>ZenWave (Japoński)</p>
                <div class="buttons">
                    <button class="btn">Kup</button><button class="btn">Zobacz</button>
                </div>
            </div>
            <div class="offkareg">
                <p>NordicNest (Skandynawski)</p>
                <div class="buttons">
                    <button class="btn">Kup</button><button class="btn">Zobacz</button>
                </div>
            </div>
            <div class="offkareg">
                <p>ParisianChic (Francuski)</p>
                <div class="buttons">
                    <button class="btn">Kup</button><button class="btn">Zobacz</button>
                </div>
            </div>
            <div class="offkareg">
                <p>TuscanGlow (Włoski)</p>
                <div class="buttons">
                    <button class="btn">Kup</button><button class="btn">Zobacz</button>
                </div>
            </div>
            <div class="offkareg">
                <p>SaharaSoul (Marokański)</p>
                <div class="buttons">
                    <button class="btn">Kup</button><button class="btn">Zobacz</button>
                </div>
            </div>
            <div class="offkareg">
                <p>CelticWhisper (Celtycki)</p>
                <div class="buttons">
                    <button class="btn">Kup</button><button class="btn">Zobacz</button>
                </div>
            </div>
            <div class="offkareg">
                <p>AndesEcho (Latynoamerykański)</p>
                <div class="buttons">
                    <button class="btn">Kup</button><button class="btn">Zobacz</button>
                </div>
            </div>
        </article>
        </section>
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