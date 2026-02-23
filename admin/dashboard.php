<?php

declare(strict_types=1);

require_once __DIR__ . '/../config/auth.php';
require_admin();

$name = $_SESSION['admin_name'] ?? 'Admin';
$role = $_SESSION['admin_role'] ?? 'admin';
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="./assets/css/style.css">
</head>

<body>
    <main style="max-width:900px;margin:40px auto;padding:20px;">
        <h1>Dashboard</h1>

        <p>
            Welcome,
            <strong><?= htmlspecialchars($name) ?></strong>
            (<?= htmlspecialchars($role) ?>)
        </p>

        <p>
            <a href="/admin/logout.php">Logout</a>
        </p>

        <hr>

        <h2>Next steps</h2>
        <ul>
            <li>Upload photos</li>
            <li>Edit gallery</li>
            <li>Manage captions</li>
        </ul>
    </main>
</body>

</html>