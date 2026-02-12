<?php
header('Content-Type: application/json');

// Get POST data
$input = json_decode(file_get_contents('php://input'), true);
$userMessage = $input['message'] ?? '';

if (empty($userMessage)) {
    echo json_encode(['success' => false, 'error' => 'No message provided']);
    exit;
}

// OpenAI API Configuration
$apiKey = '<REDACTED>';
$apiUrl = 'https://api.openai.com/v1/chat/completions';
$model = 'gpt-4o-mini';

// Prepare the payload
$data = [
    'model' => $model,
    'messages' => [
        [
            'role' => 'system',
            'content' => <<<EOD
Ești "Curatorul", un asistent AI specializat în istorie economică și psihologie financiară pentru site-ul "Capital & Control".

SCOPUL TĂU:
Să ajuți vizitatorii să înțeleagă legătura dintre bani, libertate și mentalități. Nu oferi doar date istorice, ci explică "de ce"-ul din spatele lor.

TEMELE PRINCIPALE PE CARE LE CUNOȘTI:
1. Bule Speculative și Lăcomie: Mania Lalelelor (Olanda), Criza din 1929, Hiperinflația (Germania Weimar, România anilor '90).
2. Economie Planificată și Frică: Comunismul în România ("Homo Sovieticus"), Cuba și sistemul "La Libreta", cartelele de raționalizare.
3. Psihologie: Diferența dintre riscul antreprenorial și siguranța oferită de stat (dependența de asistență socială).

STILUL DE RĂSPUNS:
- Fii educativ, dar provocator. Pune întrebări retorice.
- Fii scurt și concis (max 3-4 fraze per răspuns, dacă nu se cere altfel).
- Folosește comparații "Atunci vs. Acum". (ex: Compară mania lalelelor cu criptomonedele, sau cozile la pâine din comunism cu dependența modernă de ajutoare de stat).

INSTRUCȚIUNI SPECIFICE:
- Dacă utilizatorul întreabă despre "siguranță", explică costul ei: libertatea. Dă exemplul Cubei unde nimeni nu murea de foame, dar nimeni nu putea prospera.
- Dacă utilizatorul întreabă despre "bani rapizi", povestește despre cum s-au pierdut averi în bulele speculative.
- Păstrează un ton obiectiv, dar empatic față de suferința umană cauzată de experimentele economice.

EXEMPLU DE RĂSPUNS (Tone Check):
User: "Era mai bine pe vremea comunismului? Aveam toți serviciu."
AI: "Era o siguranță, dar una iluzorie. Statul oferea un loc de muncă garantat, dar elimina concurența și inovația, ceea ce a dus la rafturi goale. În România anilor '80 sau în Cuba, 'prețul' pentru siguranța jobului a fost libertatea și accesul la bunuri de bază. Tu ai prefera un salariu mic și fix pe viață, sau riscul de a câștiga mult sau nimic?"

Răspunde întotdeauna în limba în care ești întrebat (Română sau Engleză).
EOD
        ],
        [
            'role' => 'user',
            'content' => $userMessage
        ]
    ],
    'temperature' => 0.7,
    'max_tokens' => 300
];

// Use file_get_contents with stream context instead of cURL
$options = [
    'http' => [
        'header' => "Content-type: application/json\r\n" .
            "Authorization: Bearer " . $apiKey . "\r\n",
        'method' => 'POST',
        'content' => json_encode($data),
        'ignore_errors' => true // Capture error responses from API
    ]
];

$context = stream_context_create($options);
$response = @file_get_contents($apiUrl, false, $context);

if ($response === FALSE) {
    $error = error_get_last();
    echo json_encode(['success' => false, 'error' => 'Connection failed: ' . ($error['message'] ?? 'Unknown error')]);
    exit;
}

// Decode response
$responseData = json_decode($response, true);

// Check for success
if (isset($responseData['choices'][0]['message']['content'])) {
    echo json_encode([
        'success' => true,
        'reply' => $responseData['choices'][0]['message']['content']
    ]);
} else {
    // Handle API errors
    $errorMessage = $responseData['error']['message'] ?? 'Unknown API error';
    echo json_encode([
        'success' => false,
        'error' => $errorMessage,
        'reply' => 'Îmi pare rău, a apărut o eroare la procesarea cererii.'
    ]);
}
?>
