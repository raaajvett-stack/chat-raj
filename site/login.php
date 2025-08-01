<?php
session_start();
$pdo = new PDO("mysql:host=localhost;dbname=war_lost;charset=utf8", "root", "");

$identifier = $_POST['login_identifier'] ?? '';
$password = $_POST['password'] ?? '';

if ($identifier && $password) {
    $stmt = $pdo->prepare("SELECT * FROM users WHERE username = ? OR email = ?");
    $stmt->execute([$identifier, $identifier]);
    $user = $stmt->fetch();

    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['username'] = $user['username'];
        header("Location: dashboard.php");
        exit;
    } else {
        echo "<p style='color:red;text-align:center;'>اسم المستخدم أو كلمة المرور غير صحيحة!</p>";
    }
}
?>
