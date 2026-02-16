<?php
session_start();
?>
<!DOCTYPE html>
<html lang="ro">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
    <title>Control & Rația • Capital & Control</title>

    <link rel="stylesheet" href="assets/css/style.css?v=8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="shortcut icon" href="assets/images/logo_no_bg.ico">
    <link rel="stylesheet" href="/assets/css/chat.css">
</head>

<body>
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

    <div class="tradingview-ticker-wrapper">
        <div class="tradingview-widget-container">
            <div class="tradingview-widget-container__widget"></div>
            <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-tickers.js"
                async>
                    {
                        "symbols": [
                            { "proName": "FOREXCOM:SPXUSD", "title": "S&P 500" },
                            { "proName": "FOREXCOM:NSXUSD", "title": "Nasdaq 100" },
                            { "proName": "FX_IDC:EURUSD", "title": "EUR/USD" },
                            { "proName": "BITSTAMP:BTCUSD", "title": "Bitcoin" },
                            { "proName": "BITSTAMP:ETHUSD", "title": "Ethereum" },
                            { "proName": "OANDA:XAUUSD", "title": "Gold" }
                        ],
                            "colorTheme": "dark",
                                "locale": "en",
                                    "isTransparent": false,
                                        "showSymbolLogo": true
                    }
                </script>
        </div>
    </div>

    <section class="page-banner">
        <h1>Controlul Prețurilor, Rația și Costul Ascuns al "Siguranței"</h1>
    </section>

    <main class="article-section flow">
        <p class="highlight-quote">"Stabilitatea impusă cu forța produce liniște pe termen scurt și penurie pe termen lung."</p>

        <p>Controlul economic apare aproape mereu în perioade de panică: inflație ridicată, război, șocuri energetice sau crize fiscale. În acel moment, statul promite ordine rapidă: plafonează prețuri, fixează cursuri, impune cote de consum și îngheață salarii. Pe hârtie pare o soluție simplă. În practică, fiecare intervenție rupe un semnal al pieței și mută problema în altă parte: lipsă de marfă, piață neagră, datorii publice, exod de capital.</p>

        <h2>1. De ce controlul pare logic la început</h2>
        <p>Din punct de vedere politic, controlul este atractiv pentru că oferă efect vizibil imediat. Factura scade astăzi, eticheta se oprește azi, iar cetățeanul vede "acțiune". Costul real vine mai târziu, când producția se contractă și bugetul nu mai poate susține diferența.</p>

        <div class="case-study-grid">
            <div class="case-study-card">
                <h3>Motivul politic</h3>
                <p>Guvernele operează pe cicluri electorale scurte. Un preț plafonat transmite control și putere administrativă, chiar dacă semnalul economic rămâne neschimbat: costul de producție continuă să urce.</p>
                <p>Rezultatul frecvent este transferul pierderii către companii, apoi către bănci, apoi către contribuabil.</p>
            </div>

            <div class="case-study-card alert">
                <h3>Motivul social</h3>
                <p>În momente de șoc, opinia publică preferă certitudine, nu eficiență. Sloganul devine "preț corect pentru toți". Fără mecanisme de aprovizionare, "corect" devine rapid "inexistent".</p>
                <p>Când prețul legal este sub prețul real, produsul dispare de pe raft și reapare la preț mai mare pe canal informal.</p>
            </div>
        </div>

        <h2>2. Instrumentele clasice și efectele lor reale</h2>
        <p>Istoria arată același model repetitiv. Instrumentul diferă, dar efectul final este aproape mereu același: scădere de ofertă, distorsiuni de investiții, creștere de risc sistemic.</p>

        <div class="case-study-grid mechanism-grid">
            <div class="case-study-card">
                <h3>Plafonarea prețurilor</h3>
                <p>Consumatorul plătește mai puțin pe termen scurt, dar producătorul reduce livrările când marja devine negativă. În câteva luni apare deficitul fizic.</p>
            </div>

            <div class="case-study-card">
                <h3>Înghețarea salariilor</h3>
                <p>Reduce temporar presiunea inflaționistă statistică, dar comprimă mobilitatea pieței muncii. Companiile pierd personal calificat și productivitatea cade.</p>
            </div>

            <div class="case-study-card">
                <h3>Curs valutar administrat</h3>
                <p>Stabilizează importurile pentru o perioadă, însă cere rezerve valutare masive. Când rezervele scad, ajustarea este brutală și încrederea se rupe.</p>
            </div>

            <div class="case-study-card">
                <h3>Raționalizarea</h3>
                <p>Distribuie lipsa în mod "egal". Coada devine mecanismul de alocare, iar timpul cetățeanului devine moneda ascunsă care plătește penuria.</p>
            </div>

            <div class="case-study-card">
                <h3>Subvenția universală</h3>
                <p>Ajutorul este rapid, dar scump fiscal. Fără țintire pe venituri, statul subvenționează și consumul ineficient, amplificând deficitul bugetar.</p>
            </div>

            <div class="case-study-card alert">
                <h3>Interdicția exportului</h3>
                <p>Crește oferta internă temporar, dar reduce motivația producătorului local de a investi. Pe termen mediu, producția totală scade, iar dependența externă crește.</p>
            </div>
        </div>

        <h2>3. Studii de caz extinse</h2>
        <p>Diferența dintre țări este de context; asemănarea este de mecanism. Controlul tratează simptomele prețului, nu cauza dezechilibrului dintre cerere și ofertă.</p>

        <div class="case-study-grid">
            <div class="case-study-card">
                <h3>România 1981-1989</h3>
                <p>Strategia de rambursare accelerată a datoriei externe a mutat întreaga economie în regim de austeritate dură. Energia, alimentele și bunurile de bază au intrat în sistem de cartelă.</p>
                <ul class="signal-list">
                    <li>Preț oficial relativ stabil, dar disponibilitate extrem de redusă.</li>
                    <li>Consum forțat înlocuit de "stocare" și relații informale.</li>
                    <li>Piața neagră a devenit piața reală pentru produse esențiale.</li>
                </ul>
            </div>

            <div class="case-study-card alert">
                <h3>Venezuela 2003-2021</h3>
                <p>Controlul prețurilor combinat cu dependența de venituri petroliere și tipărire monetară a produs penurie cronică și hiperinflație. Lanțurile de aprovizionare au fost fragmentate.</p>
                <ul class="signal-list">
                    <li>Magazine goale și cozi zilnice pentru produse de bază.</li>
                    <li>Migrație masivă și dolarizare informală a tranzacțiilor.</li>
                    <li>Prețul legal a devenit irelevant; prețul real s-a mutat integral în afara sistemului oficial.</li>
                </ul>
            </div>
        </div>

        <div class="case-study-grid">
            <div class="case-study-card success">
                <h3>SUA 1971-1974</h3>
                <p>Administrația Nixon a introdus îngheț de salarii și prețuri pentru a opri inflația. Indicatorii au arătat inițial calm, dar presiunea a revenit după ridicarea restricțiilor.</p>
                <p>Lecția: intervenția poate cumpăra timp politic, dar fără disciplină fiscală și monetară nu rezolvă cauza.</p>
            </div>

            <div class="case-study-card">
                <h3>Europa 2022-2024</h3>
                <p>Plafonări temporare pe energie au amortizat șocul pentru gospodării. Acolo unde schema a fost țintită și limitată, costul a rămas gestionabil; unde schema a fost largă, factura bugetară a crescut rapid.</p>
                <p>Lecția: durata și țintirea fac diferența dintre amortizare și distorsiune structurală.</p>
            </div>
        </div>

        <table class="insight-table">
            <thead>
                <tr>
                    <th>Măsură</th>
                    <th>Efect rapid</th>
                    <th>Efect întârziat</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Plafon preț</td>
                    <td>Factură mai mică</td>
                    <td>Deficit de ofertă</td>
                </tr>
                <tr>
                    <td>Rație</td>
                    <td>Distribuție administrată</td>
                    <td>Piață neagră și cozi</td>
                </tr>
                <tr>
                    <td>Subvenție generală</td>
                    <td>Calm social</td>
                    <td>Deficit bugetar și datorie</td>
                </tr>
                <tr>
                    <td>Curs fix</td>
                    <td>Importuri predictibile</td>
                    <td>Presiune pe rezerve valutare</td>
                </tr>
            </tbody>
        </table>

        <h2>4. Cum se naște piața paralelă</h2>
        <p>Când regulile oficiale nu mai reflectă realitatea costurilor, economia se adaptează în afara legii. Nu este un accident moral, ci un mecanism de supraviețuire economică.</p>

        <ol class="signal-list ordered">
            <li>Prețul legal coboară sub costul real de producție.</li>
            <li>Furnizorii reduc cantitatea sau calitatea produselor.</li>
            <li>Distribuția formală introduce liste, cote, priorități administrative.</li>
            <li>Consumatorul plătește alt cost: timp, relații, risc juridic.</li>
            <li>Piața informală devine referința reală pentru preț și disponibilitate.</li>
        </ol>

        <p class="highlight-quote">Când statul controlează eticheta, piața controlează disponibilitatea.</p>

        <h2>5. Controlul în era digitală</h2>
        <p>Controlul modern nu mai folosește doar cartele pe hârtie. Folosește date în timp real, scoruri de risc și bani programabili. Instrumentul este mai eficient administrativ, dar și mai intruziv pentru libertatea economică individuală.</p>

        <div class="case-study-grid">
            <div class="case-study-card">
                <h3>Scoring comportamental</h3>
                <p>Atunci când accesul la credit, transport sau servicii publice depinde de un scor centralizat, banii devin instrument disciplinar, nu doar mijloc de schimb.</p>
            </div>

            <div class="case-study-card alert">
                <h3>Monedă digitală programabilă</h3>
                <p>CBDC-urile pot optimiza plăți și costuri operaționale, dar pot permite și reguli automate asupra tranzacțiilor: unde cheltui, când cheltui, ce nu poți cumpăra.</p>
            </div>
        </div>

        <h2>6. Ce poate face un cetățean într-un mediu instabil</h2>
        <p>Nicio strategie individuală nu elimină riscul macroeconomic, dar îl poate distribui mai bine. Obiectivul este reziliența, nu predicția perfectă.</p>

        <ul class="signal-list">
            <li>Diversifică lichiditatea între monedă locală, valută puternică și active cu risc diferit.</li>
            <li>Separă fondul de urgență de portofoliul de investiții speculative.</li>
            <li>Monitorizează semnalele timpurii: controale de capital, limitări de retragere, plafonări extinse.</li>
            <li>Evită dependența de o singură sursă de venit în perioade de politică economică impredictibilă.</li>
            <li>Construiește competențe transferabile care rămân valoroase în orice regim economic.</li>
        </ul>

        <h2>7. Concluzie</h2>
        <p>Controlul total al economiei promite eliminarea riscului, dar produce un risc mai mare, ascuns și acumulativ. Sistemele sănătoase nu elimină volatilitatea; o absorb prin prețuri libere, instituții credibile și reguli stabile. Diferența dintre stagnare și prosperitate nu este absența haosului, ci capacitatea de a-l procesa fără a distruge libertatea economică.</p>

        <p>Continuă analiza în <a href="cronologia" style="font-weight:700;color:#0D1129;">Cronologia Crizelor</a> pentru a vedea unde apare același tipar în ultimele patru secole.</p>
    </main>

    <footer class="footer">
        <ul class="social-list">
            <li><a class="fab fa-linkedin" href="#" aria-label="LinkedIn"></a></li>
            <li><a class="fab fa-facebook" href="#" aria-label="Facebook"></a></li>
            <li><a class="fab fa-youtube" href="#" aria-label="YouTube"></a></li>
            <li><a class="fab fa-instagram" href="#" aria-label="Instagram"></a></li>
        </ul>
        <p style="margin:0; color: #d1d1d1ff;">&copy; 2025&nbsp;Capital & Control – Istoria Financiară. Toate drepturile rezervate.</p>
    </footer>

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
            <div class="message ai">Salut! Sunt asistentul tău virtual. Cu ce te pot ajuta astăzi legat de istoria financiară?</div>
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
