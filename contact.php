<?php
include 'db.php';

$feedback = '';

// Handle the POST request
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize and capture inputs
    $name = htmlspecialchars($_POST['name'] ?? '');
    $email = filter_var($_POST['email'] ?? '', FILTER_SANITIZE_EMAIL);
    $message = htmlspecialchars($_POST['message'] ?? '');

    if (!empty($name) && filter_var($email, FILTER_VALIDATE_EMAIL) && !empty($message)) {
        // Secure insert using prepared statements
        $stmt = $conn->prepare("INSERT INTO messages (name, email, message) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $name, $email, $message);
        
        if ($stmt->execute()) {
            $feedback = "<div class='alert success'>Your message has been securely stored. We will get back to you soon.</div>";
        } else {
            $feedback = "<div class='alert error'>Server error: Could not store message.</div>";
        }
        $stmt->close();
    } else {
        $feedback = "<div class='alert error'>Please provide valid inputs for all fields.</div>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - Anatomy Explorer</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <style>
        /* Quick alert styles for the form feedback */
        .alert { padding: 12px; border-radius: 8px; margin-bottom: 20px; text-align: center; font-weight: 500; }
        .alert.success { background: #e8f5e9; color: #27ae60; border: 1px solid #27ae60; }
        .alert.error { background: #ffebee; color: #e74c3c; border: 1px solid #e74c3c; }
    </style>
</head>
<body class="detail-page">

<nav class="navbar">
    <div class="logo">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 12h-4l-3 9L9 3l-3 9H2"/></svg>
        Anatomy Explorer
    </div>
    <ul class="nav-links">
        <li><a href="index.php">Home</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="contact.php" class="active">Contact</a></li>
    </ul>
</nav>

<div class="detail-wrapper fade-in-up" style="margin-top: 50px;">
    <div class="detail-card" style="display: block; max-width: 600px; margin: 0 auto;">
        <h1 style="color: #2980b9; margin-bottom: 20px; text-align: center;">Get In Touch</h1>
        
        <?php echo $feedback; ?>
        
        <form class="contact-form" action="contact.php" method="POST">
            <div class="form-group">
                <label>Name</label>
                <input type="text" name="name" placeholder="Enter your name" required>
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" placeholder="Enter your email" required>
            </div>
            <div class="form-group">
                <label>Message</label>
                <textarea name="message" rows="5" placeholder="How can we help?" required></textarea>
            </div>
            <button type="submit" class="btn" style="background: #27ae60; width: 100%; border: none; cursor: pointer; padding: 12px;">Send Message</button>
        </form>
    </div>
</div>

</body>
</html>