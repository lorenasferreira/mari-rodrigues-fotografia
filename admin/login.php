<?php

declare(strict_types=1);

require_once __DIR__ . '/../config/db_connect.php';

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = trim($_POST['email'] ?? '');
    $password = $_POST['password'] ?? '';

    if ($email === '' || $password === '') {
        $error = 'Please fill in all fields.';
    } else {
        $sql = "
      SELECT id, name, email, password_hash, role
      FROM admins
      WHERE email = :email
      LIMIT 1
    ";

        $stmt = $pdo->prepare($sql);
        $stmt->execute(['email' => $email]);
        $admin = $stmt->fetch();

        if ($admin && password_verify($password, $admin['password_hash'])) {
            session_regenerate_id(true);

            $_SESSION['admin_logged'] = true;
            $_SESSION['admin_id']     = (int)$admin['id'];
            $_SESSION['admin_name']   = $admin['name'];
            $_SESSION['admin_role']   = $admin['role'];

            header('Location: ./dashboard.php');
            exit;
        } else {
            $error = 'Invalid credentials.';
        }
    }
}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Login</title>
    <link rel="stylesheet" href="./assets/css/style.css">
</head>

<body>
    <main style="max-width:420px;margin:60px auto;padding:20px;">
        <h1>Admin Login</h1>

        <?php if ($error): ?>
            <p style="color:red;"><?= htmlspecialchars($error) ?></p>
        <?php endif; ?>

        <form method="POST" autocomplete="off">
            <label>Email</label><br>
            <input name="email" type="email" required style="width:100%;padding:10px;"><br><br>

            <label>Password</label><br>
            <input name="password" type="password" required style="width:100%;padding:10px;"><br><br>

            <button type="submit" style="padding:10px 14px;">Login</button>
        </form>
    </main>
</body>

</html>