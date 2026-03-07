<?php
$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "<REDACTED>";
$dbDatabase = "alphabit";

session_start();

if ((isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] === 'userLoggedIn') || (isset($_COOKIE["SESSION"]) && $_COOKIE["SESSION"] === "Logged")) {
  header("Location: /");
  exit;
}

$conn = new mysqli($dbServername, $dbUsername, $dbPassword, $dbDatabase);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$emailInput = trim($_POST["email"] ?? "");
$teamnameInput = trim($_POST["teamname"] ?? "");
$passwordInput = trim($_POST["password"] ?? "");
$passwordConfirmInput = trim($_POST["password_confirm"] ?? "");
$registerError = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
  if ($emailInput === "" || $teamnameInput === "" || $passwordInput === "" || $passwordConfirmInput === "") {
    $registerError = "Completează toate câmpurile.";
  } elseif ($passwordInput !== $passwordConfirmInput) {
    $registerError = "Parolele nu coincid.";
  } else {
    $safeEmail = $conn->real_escape_string($emailInput);
    $safeTeamname = $conn->real_escape_string($teamnameInput);
    $safePassword = $conn->real_escape_string($passwordInput);

    $sql = "INSERT INTO users (password, email, teamname) VALUES ('" . $safePassword . "', '" . $safeEmail . "', '" . $safeTeamname . "')";
    $resultQuery = $conn->query($sql);

    if ($resultQuery === true) {
      header("Location: login");
      exit;
    }

    $registerError = "Contul nu a putut fi creat. Verifică datele și încearcă din nou.";
  }
}
?>
<!DOCTYPE html>
<html lang="ro">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Creează cont • Capital & Control</title>
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
        <a class="btn" href="profile">Salutare,&nbsp;<?= htmlspecialchars($_SESSION['teamname']) ?>!</a>
        <img src="/assets/images/user3.png" alt="profil" style="width:2.2rem;border-radius:50%">
      <?php endif; ?>
    </div>
  </header>

  <div class="tradingview-ticker-wrapper">
    <div class="tradingview-widget-container">
      <div class="tradingview-widget-container__widget"></div>
      <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-tickers.js" async>
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
    <h1>Creează cont</h1>
  </section>

  <main class="auth-section">
    <div class="auth-grid">
      <section class="auth-panel flow">
        <h2>Pornește cu un cont nou</h2>
        <p>Contul îți oferă acces rapid la toate secțiunile platformei și la asistentul AI orientat pe istorie financiară, piețe, inflație și control economic.</p>
        <ul class="signal-list">
          <li>Salvezi continuitatea experienței în platformă.</li>
          <li>Primești răspunsuri mai relevante în funcție de contextul tău.</li>
          <li>Ai acces direct la profilul echipei după autentificare.</li>
        </ul>
      </section>

      <section class="auth-card">
        <h2>Înregistrare</h2>
        <?php if ($registerError !== ""): ?>
          <div class="auth-status error"><?= htmlspecialchars($registerError) ?></div>
        <?php endif; ?>
        <form id="register-form" action="register" method="post">
          <label for="register-email">Adresă email</label>
          <input class="auth-input" id="register-email" type="email" name="email" placeholder="nume@exemplu.com" value="<?= htmlspecialchars($emailInput) ?>" required>

          <label for="register-teamname">Nume utilizator</label>
          <input class="auth-input" id="register-teamname" type="text" name="teamname" placeholder="Nume utilizator" value="<?= htmlspecialchars($teamnameInput) ?>" required>

          <label for="register-password">Parolă</label>
          <input class="auth-input" id="register-password" type="password" name="password" placeholder="Parolă" required>

          <label for="register-password-confirm">Confirmă parola</label>
          <input class="auth-input" id="register-password-confirm" type="password" name="password_confirm" placeholder="Repetă parola" required>

          <span id="message" class="auth-inline-status"></span>

          <button type="submit" class="btn auth-submit">Creează cont</button>
        </form>
        <div class="auth-meta">
          <a href="login">Ai deja cont? Intră aici</a>
          <a href="/">Înapoi la pagina principală</a>
        </div>
      </section>
    </div>
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

  <script>
    const password = document.getElementById('register-password');
    const confirmPassword = document.getElementById('register-password-confirm');
    const message = document.getElementById('message');
    const form = document.getElementById('register-form');

    function syncPasswords() {
      if (confirmPassword.value === '') {
        message.textContent = '';
        message.className = 'auth-inline-status';
        return;
      }

      if (confirmPassword.value === password.value) {
        message.textContent = 'Parolele coincid.';
        message.className = 'auth-inline-status success';
      } else {
        message.textContent = 'Parolele nu coincid.';
        message.className = 'auth-inline-status error';
      }
    }

    password.addEventListener('input', syncPasswords);
    confirmPassword.addEventListener('input', syncPasswords);

    form.addEventListener('submit', (event) => {
      if (password.value !== confirmPassword.value) {
        event.preventDefault();
        message.textContent = 'Parolele nu coincid.';
        message.className = 'auth-inline-status error';
      }
    });
  </script>

  <script src="/assets/js/chat.js"></script>
</body>

</html>
