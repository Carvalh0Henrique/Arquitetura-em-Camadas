<?php
//terminal -> composer dump-autoload
require_once __DIR__ . '/../vendor/autoload.php';

use App\Controller\AuthController;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $controller = new AuthController();
    $controller->handLogin();
} else {
    ?>
    <form method="POST" action="">
        <label for="email">E-mail:</label><br>
        <input type="email" name="email" required><br><br>
        
        <label for="password">Senha:</label><br>
        <input type="password" name="password" required><br><br>

        <button type="submit">Login:</button>
    </form>
    <?php
}