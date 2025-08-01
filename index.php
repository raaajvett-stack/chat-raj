<?php
session_start();

// ✅ إذا كان المستخدم مسجّل دخول يتم توجيهه إلى صفحة home
if (isset($_SESSION['Username'])) {
    header("Location: home");
    exit;
}

// 🌐 تعيين اللغة من الرابط إذا كانت موجودة
if (isset($_GET['lang']) && !empty($_GET['lang'])) {
    $_SESSION['language'] = htmlspecialchars($_GET['lang']);
}

// 🗂️ تحديد المسار الصحيح لملف اللغة
$path = "";
if (!file_exists("home.php")) {
    if (file_exists("../home.php")) {
        $path = "../";
    } elseif (file_exists("../../home.php")) {
        $path = "../../";
    }
}

// 📥 تضمين ملف اللغة
include_once $path . "langs/set_lang.php";
?>
<!DOCTYPE html>
<html dir="<?= lang('html_dir'); ?>" lang="<?= lang('lang_code'); ?>">
<head>
    <meta charset="UTF-8">
    <title><?= lang('welcome'); ?> | Wallstant</title>
    <meta name="description" content="منصة تواصل اجتماعي للتواصل مع الأصدقاء والعائلة.">
    <meta name="keywords" content="تسجيل الدخول، تواصل، شبكة اجتماعية، Wallstant">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <h2><?= lang('welcome'); ?> إلى Wallstant</h2>
    <a href="login">تسجيل الدخول</a> | <a href="signup">إنشاء حساب</a>
</body>
</html>
