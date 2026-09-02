<?php 
include 'db.php'; 

// Fetch all parts for the grid
$sql = "SELECT name, image FROM parts";
$result = $conn->query($sql);

// Map distinct colors for the buttons based on the design mockup
$buttonColors = [
    'Heart' => '#ff4757', 'Brain' => '#8e44ad', 'Eye' => '#2980b9',
    'Lungs' => '#00cec9', 'Liver' => '#e67e22', 'Kidney' => '#e84393',
    'Stomach' => '#f1c40f', 'Ear' => '#8e44ad', 'Nose' => '#00cec9',
    'Skin' => '#e84393', 'Intestines' => '#2ecc71', 'Pancreas' => '#2980b9'
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anatomy Explorer</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>

<nav class="navbar">
    <div class="logo">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 12h-4l-3 9L9 3l-3 9H2"/></svg>
        Anatomy Explorer
    </div>
    <ul class="nav-links">
        <li><a href="index.php" class="active">Home</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="contact.php">Contact</a></li>
    </ul>
    <div class="search-box">
        <input type="text" id="searchInput" placeholder="Search organs...">
    </div>
</nav>

<div class="hero">
    <div class="hero-content">
        <h1>HUMAN BODY PARTS</h1>
        <h2>INFORMATION</h2>
        <p>Click on any organ to know more about it</p>
    </div>
</div>

<div class="container fade-in-up">
    <?php while($row = $result->fetch_assoc()): 
        $organName = htmlspecialchars($row['name']);
        $imgSrc = htmlspecialchars($row['image']);
        $btnColor = isset($buttonColors[$organName]) ? $buttonColors[$organName] : '#3498db';
    ?>
    <div class="card">
        <div class="card-img-wrapper">
            <img src="images/<?php echo $imgSrc; ?>" alt="<?php echo $organName; ?>">
        </div>
        <h3><?php echo $organName; ?></h3>
        <a href="display.php?part=<?php echo urlencode($organName); ?>" class="btn" style="background-color: <?php echo $btnColor; ?>;">
            View Details
        </a>
    </div>
    <?php endwhile; ?>
</div>
<script>
    // Real-time client-side search filter
    document.getElementById('searchInput').addEventListener('keyup', function(e) {
        const term = e.target.value.toLowerCase();
        const cards = document.querySelectorAll('.card');

        cards.forEach(card => {
            const title = card.querySelector('h3').textContent.toLowerCase();
            // Toggle display based on match. Using 'flex' to maintain card structure.
            if(title.includes(term)) {
                card.style.display = 'flex'; 
            } else {
                card.style.display = 'none';
            }
        });
    });
</script>
</body>
</html>