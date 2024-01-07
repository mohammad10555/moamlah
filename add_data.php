<!DOCTYPE html>
<html lang="ar">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>نموذج طلب توظيف</title>
  <link rel="stylesheet" href="style.css"> <!-- You can create a CSS file to style the page -->
</head>
<body>
  <header>
    <nav>
      <ul>
        <li><a href="#">عن سارد</a></li>
        <li><a href="#">تطوير المشاريع</a></li>
        <li><a href="#">صيانة الممتلكات</a></li>
        <li><a href="#">إدارة الممتلكات</a></li>
        <li><a href="#">العقود والمناقصات</a></li>
        <li><a href="#">نادي السعودية</a></li>
        <li><a href="#">توظيف</a></li>
        <li><a href="#">اتصل بنا</a></li>
      </ul>
    </nav>
  </header>
  
  <main>
    <h1>نموذج طلب توظيف</h1>
    
    <form action="submit.php" method="POST"> <!-- You can specify the action attribute to submit the form data to a backend script -->
      <h2>المعلومات الشخصية</h2>
      
      <label for="firstName">الاسم الأول:</label>
      <input type="text" id="firstName" name="firstName" required>
      
      <label for="middleName">اسم الأب:</label>
      <input type="text" id="middleName" name="middleName" required>
      
      <label for="lastName">لقب العائلة:</label>
      <input type="text" id="lastName" name="lastName" required>
      
      <!-- Add other personal information inputs here -->
      
      <h2>الخلفية التعليمية</h2>
      
      <label for="qualification">المؤهل العلمي:</label>
      <input type="text" id="qualification" name="qualification" required>
      
      <label for="institution">الجهة:</label>
      <input type="text" id="institution" name="institution" required>
      
      <!-- Add other education background inputs here -->
      
      <h2>اللغات</h2>
      
      <!-- Add language level inputs here -->
      
      <h2>السجل العملي والوظيفي</h2>
      
      <!-- Add work experience inputs here -->
      
      <h2>الحالة الصحية</h2>
      
      <!-- Add health status inputs here -->
      
      <h2>معلومات الاتصال</h2>
      
      <!-- Add contact information inputs here -->
      
      <h2>أقر بصحة المعلومات</h2>
      
      <label for="agree">أقر أن المعلومات الواردة صحيحة:</label>
      <input type="checkbox" id="agree" name="agree" required>
      
      <button type="submit">ارسال الطلب</button>
    </form>
  </main>
  
  <footer>
    <p>جميع الحقوق محفوظة &copy; 2024 شركة الخطوط السعودية - لتنمية وتطوير العقار سارد</p>
  </footer>
</body>
</html>