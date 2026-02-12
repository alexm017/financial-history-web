<?php
session_start();

$msg = "";
$msgClass = "";

if (filter_has_var(INPUT_POST, 'submit')) {
  $name = htmlspecialchars($_POST['name']);
  $email = htmlspecialchars($_POST['email']);
  $subject = htmlspecialchars($_POST['subject']);
  $message = htmlspecialchars($_POST['message']);

  if (!empty($email) && !empty($name) && !empty($subject) && !empty($message)) {
    if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
      $msg = 'Te rugăm să folosești o adresă de email validă.';
      $msgClass = 'alert-danger';
    } else {
      $toEmail = 'support@finance.alphabit.ro';
      $body = "<h2>Contact Request</h2>
              <h4>Name</h4><p>$name</p>
              <h4>Email</h4><p>$email</p>
              <h4>Subject</h4><p>$subject</p>
              <h4>Message</h4><p>$message</p>";

      $headers = "MIME-Version: 1.0" . "\r\n";
      $headers .= "Content-Type:text/html;charset=UTF-8" . "\r\n";

      $headers .= "From: " . $email . "\r\n";
      $headers .= "Reply-To: " . $email . "\r\n";
      $headers .= "X-Mailer: PHP/" . phpversion();

      if (mail($toEmail, $subject, $body, $headers)) {
        $msg = 'Emailul tău a fost trimis cu succes!';
        $msgClass = 'alert-success';
      } else {
        $msg = 'Emailul nu a putut fi trimis. Încearcă din nou.';
        $msgClass = 'alert-danger';
      }
    }
  } else {
    $msg = 'Te rugăm să completezi toate câmpurile.';
    $msgClass = 'alert-danger';
  }
}
?>
<!DOCTYPE html>
<html lang="ro">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <title>Capital & Control</title>

  <link rel="stylesheet" href="/assets/css/style.css?v=2">
  <link rel="stylesheet" href="/assets/css/chat.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;600;700&family=Lato:wght@400;700&display=swap"
    rel="stylesheet">
  <link rel="shortcut icon" type="image/x-icon" href="/assets/images/logo_no_bg.ico">
</head>

<body>
  <noscript>Trebuie să activați JavaScript pentru a vizualiza acest site.</noscript>

  <!-- ───────── HEADER ───────── -->
  <header class="header">
    <a href="/" class="brand">Capital & Control</a>

    <nav class="nav-center">
      <a class="btn" href="capital">Capitalul & Riscul</a>
      <a class="btn" href="control">Controlul & Rația&nbsp;</a>
      <a class="btn" href="cronologia">Cronologia Crizelor&nbsp;</a>
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

  <!-- ───────── HERO ───────── -->
  <section class="hero">
    <div>
      <h1>Capital &amp; Control – O călătorie prin istoria financiară</h1>
      <p>„Capital &amp; Control" este un portal digital dedicat explorării istoriei financiare mondiale. Descoperă
        poveștile din spatele marilor
        crize, inovații și transformări care au modelat economia modernă.</p>
      <a class="btn" href="capital">Citește mai multe</a>
    </div>
    <div class="scroll-indicator" aria-hidden="true"></div>
  </section>

  <!-- ───────── INFO SECTION ───────── -->
  <section class="fpage">
    <div class="fpage-inner info-grid">
      <!-- Row 1: Text Left, Image Right -->
      <div class="info-row">
        <div class="info-text flow">
          <h2>Capitalul & Riscul</h2>
          <p>Această secțiune explorează istoria lumii prin prisma banilor. De la mania lalelelor din secolul XVII până
            la criptomonedele de astăzi, lăcomia și frica au modelat piețele financiare.</p>
          <p>Descoperă cum hiperinflația a distrus imperii și cum speculațiile au creat averi colosale sau au ruinat
            națiuni întregi. Este o lecție despre valoarea banilor și fragilitatea sistemelor economice.</p>
          <a class="btn" href="capital">Explorează Capitalul</a>
        </div>
        <div class="info-image">
          <img src="/assets/images/inflation.webp" alt="Istorie Financiară" loading="lazy" class="clamp-img">
        </div>
      </div>

      <!-- Row 2: Image Left, Text Right -->
      <div class="info-row reverse">
        <div class="info-image">
          <img src="/assets/images/ratia.jpg" alt="Ratia" loading="lazy" class="clamp-img"
            style="object-fit: contain; background: #252525;">
        </div>
        <div class="info-text flow">
          <h2>Controlul & Rația</h2>
          <p>Libertate sau siguranță? Aceasta este eterna dilemă. Analizăm economiile planificate, precum cele din
            România comunistă sau Cuba, unde statul a promis stabilitate cu prețul libertății.</p>
          <p>Vezi cum "La Libreta" și cartelele au devenit simboluri ale supraviețuirii și cum lipsa competiției a ucis
            inovația, creând dependență și stagnare.</p>
          <a class="btn" href="control">Explorează Controlul</a>
        </div>
      </div>
    </div>
  </section>

  <!-- ───────── CONTACT ───────── -->
  <section class="contact" id="contact">
    <div class="contact-wrapper">
      <!-- form -->
      <form class="contact-form" action="index.php#contact" method="post">
        <h2 style="margin:0;font:var(--step-1) var(--ff-base); color: #0D1129 !important; cursor: pointer;">Trimite-ne
          un mesaj</h2>

        <?php if ($msg != ''): ?>
          <div class="alert <?php echo $msgClass; ?>">
            <?php echo $msg; ?>
          </div>
        <?php endif; ?>

        <input type="text" name="name" placeholder="Nume" value="<?php echo isset($_POST['name']) ? $name : ''; ?>"
          required>
        <input type="email" name="email" placeholder="Adresa&nbsp;E-mail"
          value="<?php echo isset($_POST['email']) ? $email : ''; ?>" required>
        <input type="text" name="subject" placeholder="Subiect"
          value="<?php echo isset($_POST['subject']) ? $subject : ''; ?>" required>
        <textarea name="message" placeholder="Mesaj"
          required><?php echo isset($_POST['message']) ? $message : ''; ?></textarea>

        <button class="btn" type="submit" name="submit">Trimite</button>
      </form>

      <!-- info & map -->
      <div class="contact-info flow">
        <h3>Detalii de contact</h3>
        <p>E-mail: <a href="mailto:support@capitalcontrol.ro">support@capitalcontrol.ro</a></p>
        <p>Adresă: Petroșani, Str.&nbsp;1&nbsp;Decembrie&nbsp;1918&nbsp;7, Romania</p>

        <div class="mapouter">
          <iframe class="gmap_iframe" frameborder="0"
            src="https://maps.google.com/maps?hl=ro&amp;q=Strada%201%20Decembrie%201918%207%2C%20Petro%C8%99ani&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"
            aria-label="Locația Urmele Timpului"></iframe>
        </div>
      </div>
    </div>
  </section>

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
    Psst... vrei sa încerci Asistentul AI?
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
      <div class="message ai">Salut! Sunt asistentul tău virtual. Cum te pot ajuta astăzi în legătură cu istoria
        economică sau psihologia financiară?</div>
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