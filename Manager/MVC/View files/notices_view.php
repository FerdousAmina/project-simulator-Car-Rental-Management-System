<?php require_once('../Model files/noticedb.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>All Public Notices</title>
    <link rel="stylesheet" href="../Stylesheets/nav.css">
    <link rel="stylesheet" href="../Stylesheets/notice_display.css">
</head>
<body class="notice-body">
<nav>
    <div class="nav-container">
        <a href="Project page.php">Home</a>
         <a href="notices_view.php" class="active">Notices</a>
    </div>
    </nav>
    <div class="notice-wrapper">
        <h1 class="main-title">All Official Notices</h1>
    <div class="notice-grid">
    <?php
        $all_notices = getAllNotices();
        if ($all_notices && $all_notices->num_rows > 0) {
        while($row = $all_notices->fetch_assoc()) {
    ?>
    <div class="notice-card-container">
        <div class="card-header-bar">
         <h3><?php echo htmlspecialchars($row['title']); ?></h3>
    </div>
        <div class="card-content-area">
            <p class="notice-text"><?php echo nl2br(htmlspecialchars($row['content'])); ?></p>
            <div class="card-footer-date">
            <span>Date:<?php echo date('d M, Y', strtotime($row['created_at'])); ?></span>
        </div>
    </div>
    </div>
        <?php
        }
            } 
    else 
        {
            echo "<p style='color: white;'>No notices available.</p>";
            
        }
    ?>
    </div>
    </div>
</body>
</html>