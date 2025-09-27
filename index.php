<?php
require_once __DIR__ . '/settings/core.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Commerce Platform - Home</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="header">
        <div class="container">
            <h1>E-Commerce Platform</h1>
        </div>
    </div>

    <div class="nav">
        <div class="container">
            <ul>
                <li><a href="index.php">Home</a></li>
                <?php if (!isLoggedIn()): ?>
                    <li><a href="view/login.php" class="btn btn-secondary">Login</a></li>
                    <li><a href="view/register.php" class="btn btn-primary">Register</a></li>
                <?php else: ?>
                    <?php if (isAdmin()): ?>
                        <li><a href="admin/category.php" class="btn btn-secondary">Category</a></li>
                    <?php endif; ?>
                    <li><a href="actions/logout_action.php" class="btn btn-danger">Logout</a></li>
                <?php endif; ?>
            </ul>
        </div>
    </div>

    <div class="container">
        <div class="form-container">
            <h2>Welcome to Our E-Commerce Platform</h2>
            <p>This is a simple e-commerce platform. You can register for a new account or login if you already have one.</p>
            
            <div style="text-align: center; margin-top: 30px;">
                <?php if (!isLoggedIn()): ?>
                    <a href="view/register.php" class="btn btn-primary" style="margin-right: 10px;">Create Account</a>
                    <a href="view/login.php" class="btn btn-secondary">Sign In</a>
                <?php else: ?>
                    <?php if (isAdmin()): ?>
                        <a href="admin/category.php" class="btn btn-secondary" style="margin-right: 10px;">Manage Categories</a>
                    <?php endif; ?>
                    <a href="actions/logout_action.php" class="btn btn-danger">Logout</a>
                <?php endif; ?>
            </div>
        </div>
    </div>

</body>
</html>