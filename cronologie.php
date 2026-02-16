<?php
session_start();
?>
<!DOCTYPE html>
<html lang="ro">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
  <title>Cronologie • Capital & Control</title>

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
      <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-tickers.js" async>
        {
          "symbols": [
            { "proName": "FOREXCOM:SPXUSD", "title": "S&P 500" },
            { "proName": "FOREXCOM:NSXUSD", "title": "Nasdaq 100" },
            { "proName": "FX_IDC:EURUSD", "title": "EUR/USD" },
            { "proName": "BITSTAMP:BTCUSD", "title": "Bitcoin" },
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
    <h1>Cronologia Crizelor Financiare</h1>
  </section>

  <main class="timeline-section">
    <div class="timeline-header">
      <p>Istoria nu se repetă, dar rimează. Apasă pe oricare dintre evenimentele de mai jos pentru a deschide dosarul
        complet al crizei.</p>
    </div>

    <div class="timeline">

      <div class="timeline-item left">
        <div class="timeline-content">
          <span class="timeline-date">1636 - 1637</span>
          <h2>Mania Lalelelor (Olanda)</h2>
          <p>Prima bulă speculativă majoră din istorie. Bulbii de lalele au ajuns să coste cât o casă pe canalele din
            Amsterdam.</p>
          <span class="impact-badge">Lecție: Psihologia mulțimilor</span>

          <div class="hidden-details">
            <p><strong>Locație:</strong> Republica Olandeză</p>
            <p>În secolul al XVII-lea, lalelele au devenit un simbol suprem de statut. Deoarece florile creșteau încet,
              comercianții au inventat contractele "futures" (promisiuni de a cumpăra în viitor).</p>
            <h3>Momentul de Nebunie</h3>
            <p>Un singur bulb din soiul rar <em>"Semper Augustus"</em> ajunsese să valoreze 12 acri de pământ. Oamenii
              își vindeau casele pentru a cumpăra bulbi, sperând să se îmbogățească peste noapte.</p>
            <h3>Prăbușirea</h3>
            <p>În februarie 1637, la o licitație din Haarlem, cumpărătorii pur și simplu nu s-au mai prezentat. Prețul a
              scăzut cu 99% în câteva zile, ruinând economia olandeză.</p>
          </div>
        </div>
      </div>

      <div class="timeline-item right">
        <div class="timeline-content">
          <span class="timeline-date">1720</span>
          <h2>Bula "South Sea" (UK)</h2>
          <p>O schemă piramidală masivă care l-a păcălit chiar și pe Isaac Newton.</p>
          <span class="impact-badge">Impact: Reglementarea burselor</span>

          <div class="hidden-details">
            <p>Compania "Mărilor de Sud" a promis că va plăti datoria națională a Marii Britanii în schimbul monopolului
              asupra comerțului cu America de Sud. Problema? Spania controla America de Sud și era în război cu Anglia.
            </p>
            <h3>Falimentul Intelectual</h3>
            <p>Acțiunile au crescut de 10 ori într-un an bazat pe zvonuri false. Când bula s-a spart, Sir Isaac Newton a
              pierdut o avere (milioane de dolari în banii de azi), declarând: <em>"Pot calcula mișcarea stelelor, dar
                nu și nebunia oamenilor."</em></p>
          </div>
        </div>
      </div>

      <div class="timeline-item left">
        <div class="timeline-content">
          <span class="timeline-date">1923</span>
          <h2>Hiperinflația din Weimar</h2>
          <p>Germania a tipărit bani neacoperiți. O pâine a ajuns să coste 200 de miliarde de mărci.</p>
          <span class="impact-badge">Impact: Colaps social total</span>

          <div class="hidden-details">

            <p>Pentru a plăti despăgubirile de după Primul Război Mondial, Germania a pornit tiparnița de bani.
              Rezultatul a fost o devalorizare atât de rapidă încât prețurile se dublau la fiecare câteva ore.</p>
            <h3>Scene Apocaliptice</h3>
            <ul>
              <li>Oamenii mergeau la cumpărături cu roaba plină de bani.</li>
              <li>Bancnotele erau folosite pe post de tapet sau arse în sobă pentru căldură, fiind mai ieftine decât
                lemnul.</li>
              <li>Această criză a distrus clasa de mijloc germană și a pavat drumul pentru extremism.</li>
            </ul>
          </div>
        </div>
      </div>

      <div class="timeline-item right">
        <div class="timeline-content">
          <span class="timeline-date">1929 - 1939</span>
          <h2>Marea Criză Economică</h2>
          <p>Prăbușirea Wall Street a declanșat un deceniu de sărăcie globală.</p>
          <span class="impact-badge">Impact: Șomaj de 25%</span>

          <div class="hidden-details">
            <p>După "anii nebuni" (Roaring Twenties), bursa americană s-a prăbușit în "Joia Neagră". Băncile, care
              pariaseră banii deponenților la bursă, au dat faliment.</p>
            <h3>Consecințe</h3>
            <p>Milioane de oameni și-au pierdut economiile de o viață. În SUA, producția industrială s-a înjumătățit.
              Criza s-a răspândit global; în România, prețul cerealelor s-a prăbușit, ruinând țărănimea (Marea Criză
              Agrară).</p>
          </div>
        </div>
      </div>

      <div class="timeline-item left">
        <div class="timeline-content">
          <span class="timeline-date">1944</span>
          <h2>Acordul de la Bretton Woods</h2>
          <p>Dolarul devine regele lumii, legat de aur la $35 uncia.</p>
          <span class="impact-badge">Impact: Nașterea FMI & Banca Mondială</span>

          <div class="hidden-details">
            <p>Spre sfârșitul celui de-al Doilea Război Mondial, 44 de națiuni s-au întâlnit în SUA pentru a rescrie
              regulile banilor.</p>
            <h3>Noua Ordine Mondială</h3>
            <p>S-a decis ca toate monedele lumii să fie legate de Dolarul American, iar Dolarul să fie legat de Aur.
              Aceasta a oferit o perioadă de stabilitate fără precedent, dar a cimentat dominația economică a Statelor
              Unite.</p>
            <p>Tot atunci s-au creat instituțiile care guvernează și azi economia: FMI (pentru stabilitate monetară) și
              Banca Mondială (pentru reconstrucție).</p>
          </div>
        </div>
      </div>

      <div class="timeline-item right">
        <div class="timeline-content">
          <span class="timeline-date">1971</span>
          <h2>Șocul Nixon: Adio Aur</h2>
          <p>Președintele Nixon rupe legătura dintre dolar și aur. Începe era banilor de hârtie (Fiat).</p>
          <span class="impact-badge">Impact: Inflație perpetuă</span>

          <div class="hidden-details">

            <p>Pe 15 august 1971, Richard Nixon a anunțat că SUA nu va mai schimba dolari pe aur, deoarece tipăriseră
              prea mulți bani pentru războiul din Vietnam.</p>
            <h3>Consecințe pe Termen Lung</h3>
            <p>Până atunci, guvernele nu puteau tipări bani la infinit. După 1971, frâna a dispărut. Aceasta a dus la
              ciclurile economice moderne de "Boom and Bust" și la pierderea a 98% din puterea de cumpărare a dolarului
              în ultimii 50 de ani.</p>
          </div>
        </div>
      </div>

      <div class="timeline-item left">
        <div class="timeline-content">
          <span class="timeline-date">Octombrie 1987</span>
          <h2>Lunea Neagră</h2>
          <p>Cea mai mare prăbușire bursieră într-o singură zi din istorie (-22%).</p>
          <span class="impact-badge">Impact: Introducerea "Circuit Breakers"</span>

          <div class="hidden-details">
            <p>Pe 19 octombrie 1987, bursele din întreaga lume s-au prăbușit violent într-o singură zi. Nu a existat un
              motiv economic clar (război sau faliment major).</p>
            <h3>Vinovatul: Algoritmii</h3>
            <p>A fost prima criză cauzată de computere. Programele de "asigurare a portofoliului" au început să vândă
              automat când prețurile scădeau, creând o spirală a morții.</p>
            <p>Ca răspuns, bursele au introdus "Circuit Breakers" – dacă piața scade prea repede, tranzacționarea se
              oprește automat pentru a calma spiritele.</p>
          </div>
        </div>
      </div>

      <div class="timeline-item right">
        <div class="timeline-content">
          <span class="timeline-date">1997</span>
          <h2>Criza Tigrilor Asiatici</h2>
          <p>Contagiune financiară în Thailanda, Coreea și Indonezia.</p>
          <span class="impact-badge">Impact: FMI preia controlul</span>

          <div class="hidden-details">
            <p>Economiile asiatice creșteau miraculos, dar se bazau pe împrumuturi în dolari. Când moneda Thailandei
              (Baht) s-a prăbușit, investitorii au fugit din toată regiunea.</p>
            <h3>Aurul Coreei</h3>
            <p>Criza a fost atât de severă în Coreea de Sud încât milioane de cetățeni și-au donat bijuteriile de aur
              statului pentru a ajuta la plata datoriei naționale.</p>
            <p>Efectul s-a simțit global: a dus la falimentul Rusiei în 1998 și la prăbușirea fondului american LTCM.
            </p>
          </div>
        </div>
      </div>

      <div class="timeline-item left">
        <div class="timeline-content">
          <span class="timeline-date">2000 - 2002</span>
          <h2>Bula Dot-com</h2>
          <p>Exuberanța irațională a internetului. NASDAQ a scăzut cu 78%.</p>
          <span class="impact-badge">Impact: Resetarea Tech</span>

          <div class="hidden-details">
            <p>La sfârșitul anilor '90, orice companie care adăuga ".com" la nume primea milioane de dolari de la
              investitori, chiar dacă nu avea profit.</p>
            <h3>Spargerea Bulei</h3>
            <p>Companii precum Pets.com (care vindea mâncare de câini online la preț mai mic decât costul de livrare) au
              dat faliment spectaculos. Totuși, din cenușa acestei crize s-au ridicat giganții care au supraviețuit:
              Amazon, Google și eBay.</p>
          </div>
        </div>
      </div>

      <div class="timeline-item right">
        <div class="timeline-content">
          <span class="timeline-date">2008</span>
          <h2>Criza Imobiliară (Subprime)</h2>
          <p>Băncile au pariat pe case, iar lumea a pierdut. Falimentul Lehman Brothers.</p>
          <span class="impact-badge">Impact: Nașterea Bitcoin</span>

          <div class="hidden-details">

            <p>Băncile au acordat credite ipotecare unor oameni care nu aveau joburi sau venituri ("NINJA Loans"), apoi
              au vândut aceste credite toxice ca investiții sigure.</p>
            <h3>Momentul Lehman</h3>
            <p>Când oamenii nu au mai putut plăti ratele, sistemul a crăpat. Lehman Brothers a dat faliment. Guvernele
              au salvat băncile cu bani publici ("Bailout"). Ca reacție la această nedreptate, în 2009 a fost lansat
              Bitcoin.</p>
          </div>
        </div>
      </div>

      <div class="timeline-item left">
        <div class="timeline-content">
          <span class="timeline-date">2010 - 2012</span>
          <h2>Criza Datoriilor Suverane</h2>
          <p>Grecia, Spania și Italia în pragul falimentului. "Whatever it takes".</p>
          <span class="impact-badge">Impact: Austeritate în Europa</span>

          <div class="hidden-details">
            <p>După criza din 2008, țările din sudul Europei (grupate sub acronimul urât "PIIGS" - Portugalia, Italia,
              Irlanda, Grecia, Spania) nu și-au mai putut plăti datoriile.</p>
            <h3>Salvarea Euro</h3>
            <p>Exista riscul ca zona Euro să se destrame. Mario Draghi, președintele Băncii Centrale Europene, a calmat
              piețele cu o singură frază celebră: <em>"Vom face tot ce este necesar (whatever it takes) pentru a salva
                Euro."</em> Prețul a fost însă o austeritate dură pentru cetățenii greci.</p>
          </div>
        </div>
      </div>

      <div class="timeline-item right">
        <div class="timeline-content">
          <span class="timeline-date">2020</span>
          <h2>Marea Închidere (Covid-19)</h2>
          <p>Economia oprită forțat și tipărirea masivă de bani (Stimulus).</p>
          <span class="impact-badge">Impact: Inflația din 2022</span>

          <div class="hidden-details">
            <p>Guvernele au oprit economia pentru a opri virusul. Pentru a preveni colapsul total, băncile centrale au
              printat trilioane de dolari în câteva luni.</p>
            <h3>Bani din Elicopter</h3>
            <p>Aproximativ 40% din toți dolarii americani din istorie au fost creați în 2020-2021. Deși a salvat bursele
              pe moment, acest exces monetar a cauzat inflația severă care a urmat.</p>
          </div>
        </div>
      </div>

      <div class="timeline-item left">
        <div class="timeline-content">
          <span class="timeline-date">2022 - 2023</span>
          <h2>Criza Energetică & Inflația</h2>
          <p>Războiul din Ucraina și sfârșitul banilor ieftini.</p>
          <span class="impact-badge">Impact: Dobânzi ridicate</span>

          <div class="hidden-details">
            <p>Invazia Ucrainei a tăiat accesul Europei la gazul ieftin rusesc. Prețurile la energie au explodat.</p>
            <h3>Revenirea la Realitate</h3>
            <p>Pentru a combate inflația de peste 10%, băncile centrale au majorat dobânzile în cel mai rapid ritm din
              ultimii 40 de ani. Acest lucru a scumpit creditele pentru toată lumea, de la cumpărătorii de case la
              guverne.</p>
          </div>
        </div>
      </div>

      <div class="timeline-item right">
        <div class="timeline-content" style="border-right-color: #d9534f; border-left: none;">
          <span class="timeline-date" style="color: #d9534f;">Aprilie 2025</span>
          <h2>Prăbușirea Tarifelor</h2>
          <p>Escaladarea războaielor comerciale și impunerea bruscă a unor tarife globale record au blocat lanțurile de
            aprovizionare. Piețele au reacționat violent la fragmentarea comerțului internațional.</p>
          <span class="impact-badge" style="background-color: #f8d7da; color: #721c24;">Impact: Încetinirea severă a
            comerțului global</span>

          <div class="hidden-details">
            <p><strong>Context:</strong> Într-o mișcare surpriză, marile puteri economice au renunțat la decenii de
              comerț liber, impunând taxe vamale (tarife) de până la 60% pe bunurile importate.</p>
            <h3>Efectele Imediate</h3>
            <ul>
              <li><strong>Blocajul Logistic:</strong> Navele comerciale au rămas blocate în porturi, neștiind cine va
                plăti noile taxe.</li>
              <li><strong>Inflație de Cost:</strong> Prețurile la electronice, mașini și materii prime au explodat
                instantaneu pentru consumatori.</li>
              <li><strong>Izolare Economică:</strong> Țările sunt forțate să producă totul intern, ceea ce scade
                eficiența și crește prețurile global.</li>
            </ul>
          </div>
        </div>
      </div>

    </div>
  </main>

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

  <div id="info-modal" class="modal-overlay">
    <div class="modal-window timeline-modal">
      <div class="modal-header">
        <h2 id="modal-title">Titlu Eveniment</h2>
        <button id="close-modal" class="close-modal-btn">
          <i class="fas fa-times"></i>
        </button>
      </div>
      <div class="modal-body modal-split">
        <div class="modal-article" id="modal-content">
        </div>
        <aside class="event-assistant">
          <div class="event-assistant-head">
            <h3>Asistent AI</h3>
            <p id="event-ai-topic">Întreabă orice despre evenimentul deschis.</p>
          </div>
          <div id="event-ai-messages" class="event-ai-messages"></div>
          <div class="event-ai-input-row">
            <input type="text" id="event-ai-input" class="event-ai-input"
              placeholder="Ex: Care a fost cauza principală?">
            <button id="event-ai-send" class="event-ai-send" aria-label="Trimite întrebare">
              <i class="fas fa-paper-plane"></i>
            </button>
          </div>
        </aside>
      </div>
    </div>
  </div>

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

  <script>
    document.addEventListener('DOMContentLoaded', () => {
      const modalOverlay = document.getElementById('info-modal');
      const modalTitle = document.getElementById('modal-title');
      const modalContent = document.getElementById('modal-content');
      const closeBtn = document.getElementById('close-modal');
      const timelineItems = document.querySelectorAll('.timeline-content');
      const eventAiTopic = document.getElementById('event-ai-topic');
      const eventAiMessages = document.getElementById('event-ai-messages');
      const eventAiInput = document.getElementById('event-ai-input');
      const eventAiSend = document.getElementById('event-ai-send');
      const viewerName = <?= json_encode(isset($_SESSION['teamname']) ? $_SESSION['teamname'] : 'Vizitator') ?>;
      let currentEventContext = '';
      let eventRequestInFlight = false;

      function addEventAiMessage(text, sender, extraClass = '') {
        const message = document.createElement('div');
        message.className = `event-ai-message ${sender} ${extraClass}`.trim();
        message.textContent = text;
        eventAiMessages.appendChild(message);
        eventAiMessages.scrollTop = eventAiMessages.scrollHeight;
        return message;
      }

      function resetEventAssistant(title, date, summary, detailsText) {
        const compactDetails = detailsText.replace(/\s+/g, ' ').trim().slice(0, 1800);
        currentEventContext = [
          `Utilizator: ${viewerName}`,
          `Eveniment: ${title}`,
          `Perioada: ${date}`,
          `Rezumat vizibil: ${summary}`,
          `Detalii extinse: ${compactDetails}`
        ].join('\n');

        eventAiMessages.innerHTML = '';
        eventAiTopic.textContent = `Context activ: ${title} • ${date}`;
        addEventAiMessage(`Analizăm ${title}. Întreabă-mă despre cauze, efecte, comparații sau lecții aplicabile azi.`, 'ai');
      }

      async function sendEventQuestion() {
        const question = eventAiInput.value.trim();
        if (!question || !currentEventContext || eventRequestInFlight) return;

        addEventAiMessage(question, 'user');
        eventAiInput.value = '';
        eventRequestInFlight = true;
        eventAiSend.disabled = true;
        const loadingBubble = addEventAiMessage('Analizez evenimentul pentru tine...', 'ai', 'event-ai-loading');

        const prompt = [
          'Răspunde strict în limba întrebării utilizatorului.',
          'Folosește contextul evenimentului de mai jos pentru un răspuns personalizat.',
          currentEventContext,
          `Întrebarea utilizatorului: ${question}`,
          'Răspunde clar, practic, în 4-6 fraze și menționează explicit evenimentul analizat.'
        ].join('\n\n');

        try {
          const response = await fetch('/api/chat.php', {
            method: 'POST',
            headers: { 'Content-Type': 'application/json' },
            body: JSON.stringify({ message: prompt })
          });

          const data = await response.json();
          loadingBubble.remove();

          if (data.success) {
            addEventAiMessage(data.reply, 'ai');
          } else {
            addEventAiMessage('Nu am putut genera răspunsul acum. Încearcă din nou.', 'ai');
          }
        } catch (error) {
          loadingBubble.remove();
          addEventAiMessage('Conexiunea cu asistentul a eșuat. Verifică și încearcă din nou.', 'ai');
        } finally {
          eventRequestInFlight = false;
          eventAiSend.disabled = false;
          eventAiInput.focus();
        }
      }

      timelineItems.forEach(item => {
        item.addEventListener('click', () => {
          const title = item.querySelector('h2').innerText;
          const date = item.querySelector('.timeline-date')?.innerText || '';
          const summary = item.querySelector('p')?.innerText || '';
          const hiddenDetailsNode = item.querySelector('.hidden-details');
          const detailsHtml = hiddenDetailsNode ? hiddenDetailsNode.innerHTML : '';
          const detailsText = hiddenDetailsNode ? hiddenDetailsNode.innerText : '';

          modalTitle.innerText = title;
          modalContent.innerHTML = detailsHtml;
          resetEventAssistant(title, date, summary, detailsText);

          modalOverlay.classList.add('active');
          document.body.style.overflow = 'hidden';
          eventAiInput.focus();
        });
      });

      function closeModal() {
        modalOverlay.classList.remove('active');
        document.body.style.overflow = 'auto';
        currentEventContext = '';
        eventAiMessages.innerHTML = '';
        eventAiTopic.textContent = 'Întreabă orice despre evenimentul deschis.';
      }

      eventAiSend.addEventListener('click', sendEventQuestion);
      eventAiInput.addEventListener('keypress', (e) => {
        if (e.key === 'Enter') {
          sendEventQuestion();
        }
      });

      closeBtn.addEventListener('click', closeModal);
      modalOverlay.addEventListener('click', (e) => {
        if (e.target === modalOverlay) closeModal();
      });
      document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape') closeModal();
      });
    });
  </script>
</body>

</html>
