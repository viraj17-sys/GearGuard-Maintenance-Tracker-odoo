<?php

?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Fixora Auto Care — Tasks</title>
   <link rel="icon" type="image/png" sizes="16x16" href="Favicon.png">
  <link rel="stylesheet" href="style.css">
  <style>
 
    .tabcontent{display:none}
    .tabcontent:target{display:block}
    #tab-all:target ~ .tabs a[href="#tab-all"],
    #tab-upcoming:target ~ .tabs a[href="#tab-upcoming"],
    #tab-overdue:target ~ .tabs a[href="#tab-overdue"]{
      background:#0D1424;
      color:#fff
    }

    .tabcontent.default{display:block}
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
      <a href="tasks.php" class="active">Tasks</a>
      <a href="reports.php">Reports</a>
      <a href="towing.php">Towing</a>
      <a href="login.php">Login</a>
      <a href="about.php" class="active">About</a>
      <a href="register.php">Register</a>
    </nav>
  </div>
</header>

<main class="container">

  <span id="tab-all" class="tabcontent default"></span>
  <span id="tab-upcoming" class="tabcontent"></span>
  <span id="tab-overdue" class="tabcontent"></span>

  <div class="tabs">
    <a class="tab active" href="#tab-all">All</a>
    <a class="tab" href="#tab-upcoming">Upcoming</a>
    <a class="tab" href="#tab-overdue">Overdue</a>
  </div>

  <div class="card">
    <h3>Maintenance tasks</h3>

    <table class="table">
      <thead>
        <tr>
          <th>Vehicle</th>
          <th>Task</th>
          <th>Status</th>
          <th>Due</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>GJ-05-AB-1234</td>
          <td>Oil change</td>
          <td><span class="badge ok">Completed</span></td>
          <td>20 Dec 2025</td>
        </tr>
        <tr>
          <td>GJ-05-XY-9876</td>
          <td>Brake inspection</td>
          <td><span class="badge warn">Scheduled</span></td>
          <td>28 Dec 2025</td>
        </tr>
        <tr>
          <td>GJ-05-MN-4521</td>
          <td>Battery check</td>
          <td><span class="badge due">Overdue</span></td>
          <td>16 Dec 2025</td>
        </tr>
      </tbody>
    </table>

    <div style="margin-top:12px; display:flex; gap:8px;">
      <label for="addTask" class="btn primary">Add task</label>
      <a href="reports.php" class="btn ghost">Generate report</a>
    </div>
  </div>

  <input id="addTask" type="checkbox" class="modal-toggle">
  <div class="modal">
    <div class="modal-card">
      <h3>Add new task</h3>

      <div class="form-row">
        <input class="input" placeholder="Vehicle plate">
        <input class="input" placeholder="Task name">
      </div>

      <div class="form-row">
        <select>
          <option>Status</option>
          <option>Scheduled</option>
          <option>Completed</option>
          <option>Overdue</option>
        </select>
        <input class="input" placeholder="Due date (DD MMM YYYY)">
      </div>

      <div style="display:flex; gap:8px; margin-top:12px;">
        <label for="addTask" class="btn">Cancel</label>
        <label for="addTask" class="btn success">Save (visual)</label>
      </div>
    </div>
  </div>

  <footer class="footer">
    Plan, schedule, and review tasks.
  </footer>

</main>
</body>
</html>
