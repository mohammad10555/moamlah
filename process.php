<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // استقبال البيانات من النموذج
    $whatsapp = $_POST['whatsapp'];
    $service_provider = $_POST['service_provider'];
    $baptism_period = $_POST['baptism_period'];
    $baptism_value = $_POST['baptism_value'];
    $agreement_details = $_POST['agreement_details'];

    // إنشاء ملف PDF باستخدام مكتبة مثل TCPDF أو FPDF
    // قم بتنفيذ الكود اللازم لإنشاء ملف PDF هنا

    // إرسال البيانات إلى تليجرام باستخدام التوكين والقناة المقدمة
    $token = "6873405246:AAEUAS4DF970H6qcFBFQeC4L_N8W4wbjetc";
    $channel = "moamlat4";
    $message = "تم استلام طلب عقد جديد:\n\nرقم الواتساب: $whatsapp\nرقم واتساب مقدم الخدمة: $service_provider\nفترة التعميد: $baptism_period أيام\nقيمة التعميد: $baptism_value\nتفاصيل الاتفاق:\n$agreement_details";
    $telegram_url = "https://api.telegram.org/bot$token/sendMessage?chat_id=$channel&text=" . urlencode($message);
    file_get_contents($telegram_url);

    // قم بتوجيه المستخدم إلى صفحة شكر بعد إتمام العملية
    header("Location: thank_you.php");
    exit;
}
?>