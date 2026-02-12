<?php
session_start();
?>
<!DOCTYPE html>
<html lang="ro">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
    <title>Control & Rația • Capital & Control</title>

    <link rel="stylesheet" href="assets/css/style.css?v=4">
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
        <h1>Prețul Stabilității: Libertate vs. Siguranță</h1>
    </section>

    <!-- ───────── CONTENT ───────── -->
    <main class="article-section flow">
        <p class="highlight-quote">"Cei care renunță la libertatea esențială pentru a obține o siguranță temporară, nu
            merită nici libertate, nici siguranță." – Benjamin Franklin</p>
        <p>Această pagină explorează eterna dilemă a societății umane: alegem riscul inerent libertății pentru a
            prospera, sau alegem supunerea și controlul total pentru o iluzie a siguranței?</p>

        <!-- 1. Homo Sovieticus -->
        <h2>1. Sindromul "Homo Sovieticus"</h2>
        <div class="case-study-card">
            <h3>Cazul României Comuniste</h3>
            <p>În comunism, contractul social nescris era simplu dar toxic: "Ei se fac că ne plătesc, noi ne facem că
                muncim". Statul oferea "siguranță" – un loc de muncă garantat (chiar dacă inutil) și o locuință
                repartizată (în blocuri gri).</p>
            <p>Dar prețul a fost enorm: lipsa concurenței a ucis inovația. Când statul garantează totul, dispare
                motivația de a excela. Rezultatul a fost o economie stagnantă, incapabilă să producă bunuri de calitate,
                și o populație dependentă de deciziile unui singur centru de putere.</p>
        </div>

        <!-- 2. La Libreta -->
        <h2>2. Cazul Cuba - "La Libreta"</h2>
        <div class="case-study-card alert">
            <h3>Dependența de "La Libreta"</h3>
            <p>În Cuba, carnetul de rații ("La Libreta") asigură supraviețuirea minimală, dar creează și o dependență
                totală de stat. Chiar și atunci când regimul a permis mici inițiative private ("cuentapropistas"), mulți
                cubanezi au ezitat.</p>
            <p>De ce? Din frica de eșec și lipsa educației antreprenoriale. Când trăiești decenii în care statul decide
                ce mănânci și unde lucrezi, libertatea de a alege devine o povară psihologică înspăimântătoare.</p>
        </div>

        <!-- 3. Contra-exemplul -->
        <h2>3. Contra-exemplul: Riscul și Prosperitatea</h2>
        <div class="case-study-card success">
            <h3>Febra Aurului și Visul American</h3>
            <p>La polul opus se află mentalitatea "Visului American", exemplificată de Febra Aurului. Oamenii și-au
                riscat totul – viața, economiile, confortul – pentru șansa (nu garanția!) de a câștiga enorm.</p>
            <p>Rezultatul este o societate extrem de inegală, dar incredibil de dinamică și inovatoare. Unii au murit de
                foame, dar alții au construit imperii care au schimbat lumea.</p>
        </div>

        <p class="highlight-quote">Concluzia este dură, dar necesară: Nu există "prânz gratuit". Stabilitatea absolută
            vine întotdeauna cu costul libertății și, paradoxal, duce în final la sărăcie. Prosperitatea reală necesită
            asumarea riscului.</p>

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