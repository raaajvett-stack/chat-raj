<?php
session_start();
session_unset();  // إزالة كل متغيرات الجلسة
session_destroy(); // إنهاء الجلسة
header("site/auth/auth/login.php"); // إعادة التوجيه لصفحة تسجيل الدخول
exit;
?>
