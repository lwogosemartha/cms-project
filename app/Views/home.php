<?php
    // guest_home.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Clinic Management System - Guest Home</title>
    <link rel="stylesheets" href="style.css">
0  <style>
        body {
            font-family: Arial, sans-serif;
            background: #f7f9fc;
            margin: 0;
            padding: 0;
        }
        header {
            background: #0066cc;
            color: white;
            padding: 20px;
            text-align: center;
        }
        nav {
            background: #004d99;
            padding: 10px;
            display: flex;
            justify-content: center;
        }
        nav a {
            color: white;
            text-decoration: none;
            margin: 0 15px;
            font-weight: bold;
        }
        nav a:hover {
            text-decoration: underline;
        }
        .container {
            margin: 30px auto;
            width: 90%;
            max-width: 1200px;
        }
        .welcome {
            text-align: center;
            margin-bottom: 30px;
        }
        .card {
            background: white;
            padding: 20px;
            border-radius: 8px;
            margin: 15px;
            box-shadow: 0 3px 6px rgba(0,0,0,0.1);
            flex: 1;
            min-width: 250px;
        }
        .cards {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }
        footer {
            background: #004d99;
            color: white;
            text-align: center;
            padding: 15px;
            margin-top: 40px;
        }
    </style> 
</head>
<body>
    <header>
        <h1>Clinic Management System</h1>
        <p>Welcome to the Clinic Portal</p>
    </header>

    <nav>
        <a href="#">Home</a>
        <a href="#">About</a>
        <a href="#">Departments</a>
        <a href="#">Contacts</a>
        <a href="login.php">Staff Login</a>
    </nav>

    <div class="container">
        <div class="welcome">
            <h2>Hi your welcome</h2>
            <p>This is our main portal. Please log in to access your role specific dashboard.</p>
        </div>

        <div class="cards">
            <div class="card">
                <h3>Departments</h3>
                <p>Explore our medical services: Pediatrics, OB/GYN, General Medicine, and more.</p>
            </div>
            <div class="card">
                <h3>Our Team</h3>
                <p>Meet our doctors, nurses, and support staff who care for patients every day.</p>
            </div>
            <div class="card">
                <h3>Contact Us</h3>
                <p>Have questions? Reach out to our administration office for support.</p>
            </div>
            <div class="card">
                <h3>Staff Access</h3>
                <p>Click below to log in and view your personal dashboard.</p>
                <p><a href="login.php" style="color:#0066cc;font-weight:bold;">➡ Go to Login</a></p>
            </div>
        </div>
    </div>

    <footer>
        <p>&copy; <?php echo date("Y"); ?> Clinic Management System. All rights reserved.</p>
    </footer>
</body>
</html>
