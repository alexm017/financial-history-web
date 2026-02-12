<?php
session_start();
?>
<!DOCTYPE html>
<html lang="ro">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
  <title>Cronologie • Capital & Control</title>

  <link rel="stylesheet" href="assets/css/style.css?v=3">
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
        <a class="btn" href="profile">Salutare,&nbsp;<?= htmlspecialchars($_SESSION['teamname']) ?>!</a>
        <img src="/assets/images/user3.png" alt="profil" style="width:2.2rem;border-radius:50%">
      <?php endif; ?>
    </div>
  </header>

  <!-- ───────── TRADINGVIEW TICKER ───────── -->
  <div class="tradingview-ticker-wrapper">
    <!-- TradingView Widget BEGIN -->
    <div class="tradingview-widget-container">
      <div class="tradingview-widget-container__widget"></div>
      <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-tickers.js" async>
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
    <h1>Cronologia Crizelor Financiare</h1>
  </section>

  <!-- ───────── TIMELINE ───────── -->
  <main class="timeline-section">
    <div class="timeline-header">
      <p>O incursiune în momentele decisive care au zguduit economia globală, de la Marea Criză până la provocările
        prezentului.</p>
    </div>

    <div class="timeline">

      <!-- 1929: Marea Criză -->
      <div class="timeline-item left">
        <div class="timeline-content">
          <span class="timeline-date">1929 - 1939</span>
          <h2>Marea Criză Economică</h2>
          <p>Totul a început cu prăbușirea bursei de pe Wall Street în „Joia Neagră”. O spirală deflaționistă a dus la
            șomaj masiv, falimente bancare și o scădere drastică a producției industriale globale.</p>
          <span class="impact-badge">Impact: Prăbușirea PIB-ului global cu 15%</span>
        </div>
      </div>

      <!-- 1987: Black Monday (Adăugat pentru continuitate) -->
      <div class="timeline-item right">
        <div class="timeline-content">
          <span class="timeline-date">1987 (Octombrie)</span>
          <h2>Lunea Neagră</h2>
          <p>O prăbușire bruscă și severă a piețelor bursiere globale. Pe 19 octombrie, indicele Dow Jones a scăzut cu
            22.6% într-o singură zi, cel mai mare declin procentual din istorie.</p>
          <span class="impact-badge">Impact: Reformarea mecanismelor de tranzacționare</span>
        </div>
      </div>

      <!-- 2000: Dot-com Bubble -->
      <div class="timeline-item left">
        <div class="timeline-content">
          <span class="timeline-date">2000 - 2002</span>
          <h2>Bula Dot-com</h2>
          <p>Speculațiile excesive asupra companiilor de internet au dus la o creștere nerealistă a valorilor bursiere.
            Când bula s-a spart, trilioane de dolari s-au evaporat și multe companii "dot-com" au dispărut.</p>
          <span class="impact-badge">Impact: Scăderea NASDAQ cu 78%</span>
        </div>
      </div>

      <!-- 2008: Marea Recesiune -->
      <div class="timeline-item right">
        <div class="timeline-content">
          <span class="timeline-date">2007 - 2008</span>
          <h2>Marea Recesiune</h2>
          <p>Declanșată de prăbușirea pieței imobiliare din SUA și criza creditelor ipotecare subprime. Falimentul
            Lehman Brothers a paralizat sistemul bancar global.</p>
          <span class="impact-badge">Impact: Pierderi globale de ~10 trilioane USD</span>
        </div>
      </div>

      <!-- 2020: Criza COVID-19 -->
      <div class="timeline-item left">
        <div class="timeline-content">
          <span class="timeline-date">2020 (Februarie-Martie)</span>
          <h2>Criza COVID-19</h2>
          <p>Pandemia a forțat închiderea economiilor ("The Great Lockdown"). Piețele s-au prăbușit rapid, dar au
            recuperat la fel de repede nhờ intervențiilor fiscale și monetare masive.</p>
          <span class="impact-badge">Impact: Cea mai rapidă contracție economică din istorie</span>
        </div>
      </div>

      <!-- 2025: Criza Tarifelor -->
      <div class="timeline-item right">
        <div class="timeline-content" style="border-right-color: #d9534f;">
          <span class="timeline-date" style="color: #d9534f;">Aprilie 2025</span>
          <h2>Prăbușirea Tarifelor</h2>
          <p>Escaladarea războaielor comerciale și impunerea bruscă a unor tarife globale record au blocat lanțurile de
            aprovizionare. Piețele au reacționat violent la fragmentarea comerțului internațional.</p>
          <span class="impact-badge" style="background-color: #f8d7da; color: #721c24;">Impact: Încetinirea severă a
            comerțului global</span>
        </div>
      </div>

    </div>
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
      <div class="message ai">Salut! Sunt asistentul tău virtual. Cu ce te pot ajuta astăzi legat de istoria financiară?
      </div>
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