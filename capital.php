<?php
session_start();
?>
<!DOCTYPE html>
<html lang="ro">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
    <title>Capital & Riscul • Capital & Control</title>

    <link rel="stylesheet" href="assets/css/style.css?v=8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="shortcut icon" href="assets/images/logo_no_bg.ico">
    <link rel="stylesheet" href="/assets/css/chat.css">
</head>

<body>
    <!-- ───────── HEADER ───────── -->
    <header class="header">
        <a href="/" class="brand">Capital&nbsp;&amp;&nbsp;Control</a>

        <nav class="nav-center">
            <a class="btn" href="capital">Capitalul & Riscul</a>
            <a class="btn" href="control">Controlul & Rația</a>
            <a class="btn" href="cronologia">Cronologia Crizelor</a>
        </nav>

        <div class="nav-right">
            <?php if (!isset($_SESSION['loggedIn']) || $_SESSION['loggedIn'] !== 'userLoggedIn'): ?>
                <a class="btn" href="register">Creează cont</a>
                <a class="btn" href="login">Intră în cont</a>
            <?php else: ?>
                <a class="btn" href="profile">Salutare,&nbsp;
                    <?= htmlspecialchars($_SESSION['teamname']) ?>!
                </a>
                <img src="/assets/images/user3.png" alt="profil" style="width:2.2rem;border-radius:50%">
            <?php endif; ?>
        </div>
    </header>

    <!-- ───────── TRADINGVIEW TICKER ───────── -->
    <div class="tradingview-ticker-wrapper">
        <!-- TradingView Widget BEGIN -->
        <div class="tradingview-widget-container">
            <div class="tradingview-widget-container__widget"></div>
            <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-tickers.js"
                async>
                    {
                        "symbols": [
                            {
                                "proName": "FOREXCOM:SPXUSD",
                                "title": "S&P 500 Index"
                            },
                            {
                                "proName": "FOREXCOM:NSXUSD",
                                "title": "US 100 Cash CFD"
                            },
                            {
                                "proName": "FX_IDC:EURUSD",
                                "title": "EUR to USD"
                            },
                            {
                                "proName": "BITSTAMP:BTCUSD",
                                "title": "Bitcoin"
                            },
                            {
                                "proName": "BITSTAMP:ETHUSD",
                                "title": "Ethereum"
                            },
                            {
                                "proName": "OANDA:XAUUSD",
                                "title": "Gold"
                            }
                        ],
                            "colorTheme": "dark",
                                "locale": "en",
                                    "largeChartUrl": "",
                                        "isTransparent": false,
                                            "showSymbolLogo": true
                    }
                </script>
        </div>
        <!-- TradingView Widget END -->
    </div>

    <!-- ───────── BANNER ───────── -->
    <section class="page-banner">
        <h1>Bule, Crize și Cartele: O Istorie a Banilor</h1>
    </section>

    <!-- ───────── CONTENT ───────── -->
    <main class="article-section flow">
        <p class="highlight-quote">"Istoria nu se repetă, dar rimează." – Mark Twain</p>
        <p>Această secțiune explorează istoria lumii nu prin războaie și tratate, ci prin prisma banilor. Vom vedea cum
            deciziile financiare au prăbușit imperii sau au ridicat dictaturi, și cum psihologia umană rămâne constantă,
            fie că vorbim de lalele sau de criptomonede.</p>

        <!-- 1. Când banii nu mai valorează nimic -->
        <h2>1. Când banii nu mai valorează nimic</h2>
        <p>Hiperinflația este coșmarul oricărei economii – momentul în care încrederea în monedă dispare, iar hârtia
            devine mai valoroasă ca combustibil decât ca mijloc de schimb.</p>

        <div class="case-study-grid">
            <div class="case-study-card alert">
                <h3>Republica de la Weimar (1923)</h3>
                <p>În Germania interbelică, un dolar american ajunsese să valoreze 4 trilioane de mărci. Oamenii cărau
                    banii cu roaba pentru a cumpăra o pâine, iar copiii se jucau cu teancuri de bancnote ca și cum ar fi
                    fost cărămizi. Este exemplul clasic de distrugere a clasei de mijloc prin tipărirea necontrolată de
                    bani.</p>
            </div>

            <div class="case-study-card alert">
                <h3>România anilor '90</h3>
                <p>După căderea comunismului, România a experimentat o inflație galopantă de peste 300% în 1993.
                    Economiile de o viață ale oamenilor s-au evaporat peste noapte. Această perioadă a plantat semințele
                    neîncrederii profunde în sistemul bancar și în moneda națională.</p>
            </div>
        </div>

        <!-- 2. Iluzia Bogăției (Specula) -->
        <h2>2. Iluzia Bogăției: De la Lalele la Bitcoin</h2>
        <p>Lăcomia și frica de a rata o oportunitate (FOMO) au condus la unele dintre cele mai spectaculoase bule
            financiare din istorie.</p>

        <div class="case-study-card">
            <h3>Mania Lalelelor (Olanda, Sec. XVII)</h3>
            <p>În anii 1630, prețul unui singur bulb de lalea "Semper Augustus" ajunsese să valoreze cât o casă pe
                canalele din Amsterdam. A fost prima mare bulă speculativă documentată. Când bula s-a spart, mulți
                negustori au falimentat, lăsând în urmă o lecție dură despre valoarea intrinsecă vs. prețul de piață.
            </p>
        </div>

        <p>Astăzi, vedem tipare similare în piețele de criptomonede și în excesele bursiere, unde valoarea este adesea
            dictată de "hype" mai mult decât de utilitate.</p>

        <!-- 3. Economia Planificată -->
        <h2>3. Mitul Economiei Planificate</h2>
        <p>Ce se întâmplă când statul decide prețurile în locul pieței? Istoria ne arată invariabil același rezultat:
            penurie, cozi și piață neagră.</p>

        <p class="highlight-quote">Când prețul este fixat artificial sub nivelul pieței, produsul dispare de pe raft.
        </p>

        <p>În România comunistă și în Cuba, controlul prețurilor a dus la raționalizare. "Cartelele" au devenit noua
            monedă de schimb. Stabilitatea prețurilor a fost plătită cu dispariția produselor. Această lecție ne arată
            că legile economice sunt la fel de imuabile ca legile fizicii: dacă le ignori, sistemul se prăbușește.</p>

    </main>

    <!-- ───────── FOOTER ───────── -->
    <footer class="footer">
        <ul class="social-list">
            <li><a class="fab fa-linkedin" href="#" aria-label="LinkedIn"></a></li>
            <li><a class="fab fa-facebook" href="#" aria-label="Facebook"></a></li>
            <li><a class="fab fa-youtube" href="#" aria-label="YouTube"></a></li>
            <li><a class="fab fa-instagram" href="#" aria-label="Instagram"></a></li>
        </ul>
        <p style="margin:0; color: #d1d1d1ff;">&copy; 2025&nbsp;Capital & Control – Istoria Financiară. Toate drepturile
            rezervate.</p>
    </footer>

    <!-- Chat Widget -->
    <div id="chat-bubble" class="chat-bubble">
        Psst... vrei să încerci Asistentul AI?
    </div>
    <button id="chat-toggle-btn" class="chat-toggle-btn" aria-label="Deschide Chat AI">
        <i class="fas fa-comment-dots"></i>
    </button>

    <div id="chat-window" class="chat-window">
        <div class="chat-header">
            <h3>Asistent Virtual</h3>
            <button id="chat-close-btn" class="chat-close-btn" aria-label="Închide Chat">
                <i class="fas fa-times"></i>
            </button>
        </div>
        <div id="chat-messages" class="chat-messages">
            <div class="message ai">Salut! Sunt asistentul tău virtual. Cu ce te pot ajuta astăzi legat de istoria
                financiară?</div>
            <div id="typing-indicator" class="typing-indicator">
                <div class="typing-dot"></div>
                <div class="typing-dot"></div>
                <div class="typing-dot"></div>
            </div>
        </div>
        <div class="chat-input-area">
            <input type="text" id="chat-input" placeholder="Scrie un mesaj...">
            <button id="chat-send-btn" class="chat-send-btn" aria-label="Trimite">
                <i class="fas fa-paper-plane"></i>
            </button>
        </div>
    </div>

    <script src="/assets/js/chat.js"></script>
</body>

</html>