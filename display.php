<?php
include 'db.php';

$part = $_GET['part'] ?? '';

// SECURED: Implemented Prepared Statements to prevent SQL Injection
$stmt = $conn->prepare("SELECT * FROM parts WHERE name = ?");
$stmt->bind_param("s", $part);
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_assoc();

if (!$row) {
    die("<div style='text-align:center; margin-top:50px; font-family:Poppins;'><h2>Organ not found.</h2><a href='index.php'>Go Back</a></div>");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($row['name']); ?> - Details</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body class="detail-page">

<div class="detail-header">
    <a href="index.php" class="back-btn">← Back to Home</a>
    <div class="title-wrapper">
        <h1><?php echo htmlspecialchars($row['name']); ?></h1>
        <svg class="ekg-line" viewBox="0 0 100 20" stroke="white" stroke-width="2" fill="none"><path d="M0,10 L20,10 L25,5 L30,15 L35,0 L40,20 L45,10 L100,10"/></svg>
    </div>
</div>

<div class="detail-wrapper fade-in-up">
    <div class="detail-card">
        
        <div class="detail-left">
            <img src="images/<?php echo htmlspecialchars($row['image']); ?>" alt="<?php echo htmlspecialchars($row['name']); ?>">
        </div>

        <div class="detail-right">
            <h2>About <?php echo htmlspecialchars($row['name']); ?></h2>
            <p class="description"><?php echo htmlspecialchars($row['description']); ?></p>

            <div class="feature-box function-box">
                <div class="icon-wrapper">🎯</div>
                <div>
                    <h4>Function</h4>
                    <p><?php echo htmlspecialchars($row['function_desc'] ?? 'Data pending...'); ?></p>
                </div>
            </div>

            <div class="feature-box importance-box">
                <div class="icon-wrapper">🛡️</div>
                <div>
                    <h4>Importance</h4>
                    <p><?php echo htmlspecialchars($row['importance_desc'] ?? 'Data pending...'); ?></p>
                </div>
            </div>
        </div>

        <div class="did-you-know">
            <div class="icon-wrapper">💡</div>
            <div>
                <h4>Did You Know?</h4>
                <p><?php echo htmlspecialchars($row['did_you_know'] ?? 'Data pending...'); ?></p>
            </div>
        </div>

    </div>
</div>

</body>
</html>