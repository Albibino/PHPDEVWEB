<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $login = $_POST['login'] ?? '';
    $password = $_POST['password'] ?? '';

    if ($login === 'admin' && $password === '1234') {
        $_SESSION['user'] = [
            'login' => $login,
            'password' => $password,
            'session_start' => date('Y-m-d H:i:s'),
            'last_request' => date('Y-m-d H:i:s')
        ];
        header('Location: dashboard.php');
        exit();
    } else {
        $error = "Úsuario ou senha inválidos.";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - William Wollert</title>
</head>
<body>
    <h1>Login</h1>
    <p>Login: admin</p>
    <p>Senha: 1234</p>
    <?php if (isset($error)): ?>
        <p style="color: red;"><?= $error; ?></p>
    <?php endif; ?>
    <form method="POST">
        <label for="login">Login:</label>
        <input type="text" name="login" id="login" required>
        <br>
        <label for="password">Senha:</label>
        <input type="password" name="password" id="password" required>
        <br>
        <button type="submit">Entrar</button>
    </form>
</body>
</html>