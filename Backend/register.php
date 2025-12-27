<?php

$conn = new mysqli("localhost", "root", "", "car");
if ($conn->connect_error) {
    die("Database connection failed");
}

$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $password = $_POST['password'];
    $confirm = $_POST['confirm'];

    if ($password !== $confirm) {
        $message = "Passwords do not match";
    } else {
        $hashed = password_hash($password, PASSWORD_DEFAULT);

        $stmt = $conn->prepare(
            "INSERT INTO signup (name, email, password) VALUES (?, ?, ?)"
        );
        $stmt->bind_param("sss", $name, $email, $hashed);

        if ($stmt->execute()) {
            header("Location: login.php");
            exit;
        } else {
            $message = "Email already registered";
        }
    }
}
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Fixora Auto Care — Signup</title>
   <link rel="icon" type="image/png" sizes="16x16" href="Favicon.png">
  <link rel="stylesheet" href="style.css">
  <style>
    .auth{display:grid; place-items:center; min-height:80vh}
    .auth-card{width:min(480px,92vw); padding:24px}
    form{display:flex; flex-direction:column; gap:14px}
    .error{color:red; font-size:14px}
    
  </style>
  <style>
    
  </style></head>
<body>
    <header class="nav">
  <div class="container">
    <a class="brand" href="index.php" style="display:flex; align-items:center; gap:8px;">
      <img src="logo.png" alt="Fixora Auto Care Logo" class="logo">
      <strong>Fixora auto care</strong>
    </a>

    <nav style="margin-left:auto; display:flex; gap:6px;">
      <a href="index.php">Dashboard</a>
      <a href="vehicles.php">Vehicles</a>
      <a href="tasks.php">Tasks</a>
      <a href="reports.php">Reports</a>
      <a href="towing.php">Towing</a>
      <a href="login.php">Login</a>
      <a href="about.php" class="active">About</a>
      <a href="register.php"class="active">register</a>
    </nav>
  </div>
</header>

<main class="auth">
  <div class="card auth-card">
    <h3>Signup</h3>

    <?php if ($message): ?>
      <p class="error"><?= $message ?></p>
    <?php endif; ?>

    <form method="post">
      <input class="input" name="name" placeholder="Full name" required>
      <input class="input" type="email" name="email" placeholder="Email" required>
      <input class="input" type="password" name="password" placeholder="Password" required minlength="6">
      <input class="input" type="password" name="confirm" placeholder="Confirm password" required minlength="6">
      <button class="btn success">Sign up</button>
    </form>

    <p style="margin-top:12px; text-align:center;">
      Already have an account? <a href="login.php">Login</a>
    </p>
  </div>
</main>

</body>
</html>
