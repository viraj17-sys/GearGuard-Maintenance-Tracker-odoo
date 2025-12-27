<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Fixora Auto Care — About Us</title>
   <link rel="icon" type="image/png" sizes="16x16" href="Favicon.png">
  <link rel="stylesheet" href="style.css">

  <style>
    .about-hero {
      text-align: center;
      padding: 60px 20px;
    }

    .about-hero h1 {
      font-size: 36px;
      margin-bottom: 10px;
    }

    .about-hero p {
      max-width: 800px;
      margin: auto;
      color: #6b7280;
      font-size: 16px;
    }

    .team {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
      gap: 24px;
      margin-top: 40px;
    }

    .team-card {
      text-align: center;
      padding: 20px;
    }

    .team-card img {
      width: 100%;
      height: 280px;
      object-fit: cover;
      border-radius: 12px;
      margin-bottom: 12px;
    }

    .team-card h4 {
      margin: 6px 0 2px;
    }

    .team-card span {
      font-size: 14px;
      color: #6b7280;
    }

    .contact-box {
      margin-top: 50px;
      padding: 30px;
      text-align: center;
    }

    .contact-box p {
      margin: 6px 0;
      font-size: 15px;
    }
  </style>
</head>

<body>

<!-- Navbar -->
<header class="nav">
  <div class="container">
    <a class="brand" href="index.php">
      <img src="logo.png" class="logo">
      Fixora auto care
    </a>

    <nav>
      <a href="index.php">Dashboard</a>
      <a href="vehicles.php">Vehicles</a>
      <a href="tasks.php">Tasks</a>
      <a href="reports.php">Reports</a>
      <a href="towing.php">Towing</a>
      <a href="about.php" class="active">About</a>
      <a href="login.php">Login</a>
      <a href="register.php">Register</a>
    </nav>
  </div>
</header>

<main class="container">

  <section class="about-hero">
    <h1>About Fixora Auto Care</h1>
    <p>
      Fixora Auto Care is a modern vehicle service and management platform.
      We provide reliable vehicle maintenance tracking, towing assistance,
      and service management with a focus on quality and trust.
    </p>
  </section>

  
  <section>
    <h3 style="text-align:center;">Our Team</h3>

    <div class="team">
          <div class="card team-card">
        <img src="WhatsApp Image 2025-12-27 at 15.24.42.jpeg" alt="Team Member">
        <h4>Team Member 1</h4>
        <span>TEAM LEADER</span>
      </div>
      <div class="card team-card">
        <img src="WhatsApp Image 2025-12-27 at 15.29.55.jpeg" alt="Team Member">
        <h4>Team Member 2</h4>
        <span>BACKEND DEVLOPER</span>
      </div>

    

      <div class="card team-card">
        <img src="WhatsApp Image 2025-12-27 at 15.24.04.jpeg" alt="Team Member">
        <h4>Team Member 3</h4>
        <span>FRONTEND DEVLOPER/GITHUB DEVLOPER </span>
      </div>

      <div class="card team-card">
        <img src="WhatsApp Image 2025-12-27 at 15.23.51.jpeg" alt="Team Member">
        <h4>Team Member 4</h4>
        <span>FRONTEND DEVLOPER</span>
      </div>
    </div>
  </section>

  <section class="card contact-box">
    <h3>Contact Us</h3>
    <p><strong>Email:</strong> fixora.autocare@gmail.com</p>
    <p><strong>Phone:</strong> +91 9998312397</p>
    <p><strong>Location:</strong> Gujarat, India</p>
    <p>24/7 Vehicle Support & Towing Assistance</p>
  </section>

</main>

<footer class="footer">
  © 2025 Fixora Auto Care. All rights reserved.
</footer>

</body>
</html>
