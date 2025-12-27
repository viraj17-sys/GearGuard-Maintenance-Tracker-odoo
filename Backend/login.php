<?php

session_start();

$conn = new mysqli("localhost", "root", "", "car");
if ($conn->connect_error) {
    die("Database connection failed");
}

$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    $stmt = $conn->prepare("SELECT id, password FROM signup WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        $user = $result->fetch_assoc();

        if (password_verify($password, $user['password'])) {
            $_SESSION['user_id'] = $user['id'];
            header("Location: dashboard.php");
            exit;
        } else {
            $error = "Invalid password";
        }
    } else {
        $error = "User not found";
    }
}
?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Fixora Auto Care — Login</title>
   <link rel="icon" type="image/png" sizes="16x16" href="Favicon.png">
  <link rel="stylesheet" href="style.css">
  <style>
    .auth{display:grid; place-items:center; min-height:80vh}
    .auth-card{width:min(420px,92vw); padding:24px}
    form{display:flex; flex-direction:column; gap:14px}
    .error{color:red; font-size:14px}
    .links{text-align:center; margin-top:12px}
  </style>
</head>
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
      <a href="login.php"class="active">Login</a>
      <a href="register.php">register</a>
      <a href="about.php" class="active">About</a>
    </nav>
  </div>
</header>
<main class="auth">
  <div class="card auth-card">
    <h3>Login</h3>

    <?php if ($error): ?>
      <p class="error"><?= $error ?></p>
    <?php endif; ?>

    <form method="post">
      <input class="input" type="email" name="email" placeholder="Email" required>
      <input class="input" type="password" name="password" placeholder="Password" required minlength="6">
      <button class="btn primary">Login</button>
    </form>
    <div class="links">
      <p>Don’t have an account? <a href="register.php">Sign up</a></p>
    </div>
  </div>
</main>

</body>
</html>
