<?php

declare(strict_types=1);

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

function require_admin(): void
{
    if (empty($_SESSION['admin_logged']) || $_SESSION['admin_logged'] !== true) {
        header("Location: /admin/login.php");
        exit;
    }
}

function require_role(array $allowedRoles): void
{
    $role = $_SESSION['admin_role'] ?? null;
    if (!$role || !in_array($role, $allowedRoles, true)) {
        http_response_code(403);
        echo "Forbidden";
        exit;
    }
}
