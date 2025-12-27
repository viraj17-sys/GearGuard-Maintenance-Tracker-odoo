<?php

?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Fixora Auto Care — Reports</title>
   <link rel="icon" type="image/png" sizes="16x16" href="Favicon.png">
  <link rel="stylesheet" href="style.css">
  <style>
    @media print{
      .nav, .footer, .btn{display:none}
      body{background:#fff; color:#000}
      .card{box-shadow:none; border:1px solid #ddd; background:#fff}
      .table td{background:#fff; border:1px solid #ddd}
    }
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
      <a href="reports.php" class="active">Reports</a>
      <a href="towing.php">Towing</a>
      <a href="login.php">Login</a>
      <a href="register.php">Register</a>
      <a href="about.php" class="active">About</a>
    </nav>
  </div>
</header>

<main class="container">
  <div class="card">
    <h3>Monthly summary</h3>
    <p>Period: Dec 2025</p>

    <table class="table">
      <thead>
        <tr>
          <th>Metric</th>
          <th>Value</th>
        </tr>
      </thead>
      <tbody>
        <tr><td>Completed tasks</td><td>12</td></tr>
        <tr><td>Scheduled tasks</td><td>4</td></tr>
        <tr><td>Overdue tasks</td><td>1</td></tr>
        <tr><td>Total estimated cost</td><td>₹28,500</td></tr>
      </tbody>
    </table>

    <div style="margin-top:12px;">
      <a class="btn primary" href="#" onclick="window.print(); return false;">
        Print via browser (Ctrl + P)
      </a>
    </div>
  </div>

  <footer class="footer">
    Print-friendly layout using @media print.
  </footer>
</main>

</body>
</html>
