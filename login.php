<?php
session_start();

// If user is already logged in, redirect to dashboard
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
    header('Location: index.php');
    exit;
}

$error = '';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';

    // Hardcoded credentials for this initial version
    $admin_email = 'admin@example.com';
    $admin_password = 'password';

    if ($email === $admin_email && $password === $admin_password) {
        $_SESSION['loggedin'] = true;
        $_SESSION['email'] = $email;
        header('Location: index.php');
        exit;
    } else {
        $error = 'Invalid email or password.';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Push Up Unlock Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/custom.css">
</head>
<body class="login-body">
    <div class="login-container">
        <div class="text-center mb-4">
            <h1 class="h3 mb-3 fw-normal">Push Up Unlock</h1>
            <p>Admin Dashboard Login</p>
        </div>
        <?php if ($error): ?>
            <div class="alert alert-danger" role="alert">
                <?php echo htmlspecialchars($error); ?>
            </div>
        <?php endif; ?>
        <form method="POST" action="login.php">
            <div class="form-floating mb-3">
                <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com" required value="admin@example.com">
                <label for="email">Email address</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" id="password" name="password" placeholder="Password" required value="password">
                <label for="password">Password</label>
            </div>
            <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Sign in</button>
        </form>
        <p class="mt-5 mb-3 text-muted text-center">&copy; <?php echo date("Y"); ?> Push Up Unlock</p>
    </div>
</body>
</html>
