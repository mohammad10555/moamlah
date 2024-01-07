<!DOCTYPE html>
<html>
<head>
    <title>منصة توظيف - تأكيد</title>
    <style>
        body {
            background-color: lightgreen;
            direction: rtl;
        }
        
        .container {
            width: 400px;
            margin: 50px auto;
            padding: 20px;
            background-color: white;
        }
        
        p {
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>منصة توظيف - تأكيد</h2>
        <?php
        // قم بفحص صحة الكود المدخل هنا
        $entered_code = $_POST['code'];
        $correct_code = "1234"; // كود صحيح للتأكيد
        
        if ($entered_code == $correct_code) {
            echo "<p>تم التحقق بنجاح! شكرًا لتقديم طلب التوظيف.</p>";
        } else {
            echo "<p>الكود غير صحيح. يرجى المحاولة مرة أخرى.</p>";
        }
        ?>
    </div>
</body>
</html>