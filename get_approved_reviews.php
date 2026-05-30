<?php
// get_approved_reviews.php

// Database connection settings — update these with your own
$host = 'localhost';
$dbname = 'your_database_name';
$user = 'your_db_user';
$pass = 'your_db_password';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Fetch approved reviews only (assuming you have a column like 'approved' = 1)
    $stmt = $pdo->prepare("SELECT name, rating, review, created_at FROM reviews WHERE approved = 1 ORDER BY created_at DESC");
    $stmt->execute();

    $reviews = $stmt->fetchAll(PDO::FETCH_ASSOC);

    if (!$reviews) {
        echo "<p>No reviews found.</p>";
        exit;
    }

    // Generate HTML for each review
    foreach ($reviews as $review) {
        // Create stars based on rating
        $stars = '';
        for ($i = 1; $i <= 5; $i++) {
            $stars .= $i <= $review['rating'] ? '<span class="star">★</span>' : '<span class="empty-star">☆</span>';
        }

        // Print each review card
        echo '<div class="review-card">';
        echo '  <div class="reviewer-info">';
        echo '    <div class="reviewer-icon">' . htmlspecialchars(substr($review['name'], 0, 1)) . '</div>';
        echo '    <div>';
        echo '      <div class="reviewer-name">' . htmlspecialchars($review['name']) . '</div>';
        echo '      <div class="review-time">' . date('M j, Y', strtotime($review['created_at'])) . '</div>';
        echo '    </div>';
        echo '  </div>';
        echo '  <div class="review-rating">' . $stars . '</div>';
        echo '  <p class="review-text">“' . htmlspecialchars($review['review']) . '”</p>';
        echo '</div>';
    }
} catch (PDOException $e) {
    // In production, avoid displaying raw errors, just log them instead
    echo "<p>Unable to load reviews at this time.</p>";
    // error_log($e->getMessage());
}
?>