<?php
session_start();

$conn = new mysqli("localhost", "root", "", "car");

if ($conn->connect_error) {
    die("Database connection failed: " . $conn->connect_error);
}

$fleet_good = 8;
$fleet_due_soon = 3;
$fleet_overdue = 1;

$completed_tasks = 12;
$total_cost = 28500;

$recent_activity = [
    [
        "vehicle" => "GJ-05-AB-1234",
        "task" => "Oil change",
        "status" => "Completed",
        "date" => "20 Dec 2025"
    ],
    [
        "vehicle" => "GJ-05-XY-9876",
        "task" => "Brake inspection",
        "status" => "Scheduled",
        "date" => "28 Dec 2025"
    ],
    [
        "vehicle" => "GJ-05-MN-4521",
        "task" => "Battery check",
        "status" => "Overdue",
        "date" => "16 Dec 2025"
    ]
];
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Fixora auto care — Dashboard



  </title>
  <link rel="icon" type="image/png" sizes="16x16" href="Favicon.png">
  <link rel="stylesheet" href="style.css">
</head>
<body>

<header class="nav">
  <div class="container">
    <a class="brand" href="dashboard.php" style="display:flex; align-items:center; gap:8px;">
      <img src="logo.png" alt="Fixora Auto Care Logo" class="logo">
      <strong>Fixora auto care</strong>
    </a>

    <nav style="margin-left:auto; display:flex; gap:6px;">
      <a href="dashboard.php" class="active">Dashboard</a>
      <a href="vehicles.php">Vehicles</a>
      <a href="tasks.php">Tasks</a>
      <a href="reports.php">Reports</a>
      <a href="towing.php">Towing</a>
      <a href="login.php">Login</a>
       <a href="about.php">about</a>
      <a href="register.php">register</a>
    </nav>
  </div>
</header>

<main class="container">

  <div class="grid grid-3">
    <div class="card">
      <h3>Fleet health</h3>
      <p>Overall status of your vehicles.</p>
      <div style="display:flex; gap:10px; margin-top:8px;">
        <span class="badge ok">Good: <?= $fleet_good ?></span>
        <span class="badge warn">Due soon: <?= $fleet_due_soon ?></span>
        <span class="badge due">Overdue: <?= $fleet_overdue ?></span>
      </div>
    </div>

    <div class="card">
      <h3>Upcoming services</h3>
      <p>Next 7 days: 4 items scheduled.</p>
      <a class="btn ghost" href="tasks.php">View tasks</a>
    </div>

    <div class="card">
      <h3>Last 30 days</h3>
      <p>
        Completed: <?= $completed_tasks ?> tasks, 
        Total cost: ₹<?= number_format($total_cost) ?>
      </p>
      <a class="btn primary" href="reports.php">Open reports</a>
    </div>
  </div>

  <div class="card" style="margin-top:20px;">
    <h3>Recent activity</h3>
    <table class="table">
      <thead>
        <tr>
          <th>Vehicle</th>
          <th>Task</th>
          <th>Status</th>
          <th>Date</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($recent_activity as $row): ?>
        <tr>
          <td><?= $row['vehicle'] ?></td>
          <td><?= $row['task'] ?></td>
          <td>
            <?php if ($row['status'] == "Completed"): ?>
              <span class="badge ok">Completed</span>
            <?php elseif ($row['status'] == "Scheduled"): ?>
              <span class="badge warn">Scheduled</span>
            <?php else: ?>
              <span class="badge due">Overdue</span>
            <?php endif; ?>
          </td>
          <td><?= $row['date'] ?></td>
        </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>

  <footer class="footer">© 2025 Fixora auto care</footer>

</main>
</body>
</html>
