<?php
session_start();
require_once 'user.php';

// Jika sudah login, langsung lempar ke link1
if (isset($_SESSION['username'])) {
    header("Location: link1.php");
    exit();
}

$error_message = "";

// Proses Cek Login
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username_input = trim($_POST['username']);
    $password_input = $_POST['password'];

    if (array_key_exists($username_input, $users)) {
        if ($users[$username_input] === $password_input) {
            $_SESSION['username'] = $username_input;
            header("Location: link1.php");
            exit();
        } else {
            $error_message = "Password yang dimasukkan salah";
        }
    } else {
        $error_message = "Username tidak terdaftar";
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Login Aplikasi</title>
    <style>
        body { font-family: Arial, sans-serif; text-align: center; margin: 20px; }
        .container { border: 2px solid #000; width: 500px; margin: 0 auto; }
        .title { border-bottom: 2px solid #000; padding: 15px; font-weight: bold; background-color: #f4f4f4; }
        .content { padding: 30px; min-height: 150px; }
        .footer { border-top: 2px solid #000; padding: 10px; background-color: #f4f4f4; }
        .error { color: red; margin-bottom: 15px; }
    </style>
</head>
<body>

<div class="container">
    <div class="title">
        Title
    </div>
    
    <div class="content">
        <h3>Silahkan login</h3>

        <?php if (!empty($error_message)): ?>
            <div class="error"><?php echo $error_message; ?></div>
        <?php endif; ?>

        <form action="index.php" method="POST">
            <table style="margin: 0 auto; text-align: left;">
                <tr>
                    <td>Username</td>
                    <td>: <input type="text" name="username" required></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td>: <input type="password" name="password" required></td>
                </tr>
                <tr>
                    <td></td>
                    <td><button type="submit">Login</button></td>
                </tr>
            </table>
        </form>
    </div>
    
    <div class="footer">
        Footer
    </div>
</div>

</body>
</html>
