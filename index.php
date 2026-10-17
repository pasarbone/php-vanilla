<?php
// Simple configuration or dynamic variables
$company_name = "LaunchPad";
$current_year = date("Y");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $company_name; ?> | Coming Soon</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <div class="logo"><?php echo $company_name; ?></div>
    </header>

    <main class="hero">
        <h1>Something Amazing is Coming</h1>
        <p>We are working hard to bring you the ultimate experience. Sign up to get notified when we launch!</p>
        
        <form action="submit.php" method="POST" class="signup-form">
            <input type="email" name="email" placeholder="Enter your email address" required>
            <button type="submit">Notify Me</button>
        </form>
    </main>

    <footer>
        <p>&copy; <?php echo $current_year; ?> <?php echo $company_name; ?>. All rights reserved.</p>
    </footer>
</body>
</html>
