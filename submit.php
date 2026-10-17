<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize input email
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);

    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Here you would normally save to a database or text file.
        // For now, we will display a quick success message.
        echo "<h1>Thank you!</h1><p>We've successfully saved " . htmlspecialchars($email) . " to our waitlist.</p>";
        echo "<br><a href='index.php'>Back to landing page</a>";
    } else {
        echo "Invalid email address. Please try again.";
    }
} else {
    header("Location: index.php");
    exit();
}
?>
