<?php
$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "72hFig28JGo0K";
$dbDatabase = "alphabit";

$recordFile = @fopen("/var/www/html/record_index.txt", "a");
if ($recordFile) {
	fwrite($recordFile, "login\n");
	fclose($recordFile);
}

session_start();

$conn = new mysqli($dbServername, $dbUsername, $dbPassword, $dbDatabase);
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

$emailInput = trim($_POST["email"] ?? "");
$passwordInput = trim($_POST["password"] ?? "");
$loginError = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
	if ($emailInput === "" || $passwordInput === "") {
		$loginError = "Completează adresa de email și parola.";
	} else {
		$safeEmail = $conn->real_escape_string($emailInput);
		$safePassword = $conn->real_escape_string($passwordInput);
		$sql = "SELECT teamname FROM users WHERE email='" . $safeEmail . "' AND password='" . $safePassword . "' LIMIT 1";
		$queryResult = $conn->query($sql);

		if ($queryResult && $queryResult->num_rows > 0) {
			$row = $queryResult->fetch_assoc();
			$_SESSION["loggedIn"] = "userLoggedIn";
			$_SESSION["teamname"] = $row["teamname"];
			setcookie(session_name(), session_id(), time() + 86400);
			header("Location: /");
			exit;
		}

		$loginError = "Datele introduse nu sunt corecte.";
	}
}
?>
<!DOCTYPE html>
<html lang="ro">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Intră în cont • Capital & Control</title>
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
		<h1>Intră în cont</h1>
	</section>

	<main class="auth-section">
		<div class="auth-grid">
			<section class="auth-panel flow">
				<h2>Accesează platforma</h2>
				<p>După autentificare poți păstra conversațiile cu asistentul AI, urmări mai rapid paginile educaționale și continua analiza din orice secțiune a platformei.</p>
				<ul class="signal-list">
					<li>Conținut educațional extins despre riscuri, inflație și crize.</li>
					<li>Navigare rapidă între Capital, Control și Cronologie.</li>
					<li>Profil personalizat pentru echipa ta.</li>
				</ul>
			</section>

			<section class="auth-card">
				<h2>Autentificare</h2>
				<?php if ($loginError !== ""): ?>
					<div class="auth-status error"><?= htmlspecialchars($loginError) ?></div>
				<?php endif; ?>
				<form id="login-form" action="login" method="post">
					<label for="email">Adresă email</label>
					<input class="auth-input" id="email" type="email" name="email" placeholder="nume@exemplu.com" value="<?= htmlspecialchars($emailInput) ?>" required>

					<label for="password">Parolă</label>
					<input class="auth-input" id="password" type="password" name="password" placeholder="Parola contului" required>

					<button type="submit" class="btn auth-submit">Intră în cont</button>
				</form>
				<div class="auth-meta">
					<a href="register">Nu ai cont? Creează unul</a>
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

	<script src="/assets/js/chat.js"></script>
</body>

</html>
