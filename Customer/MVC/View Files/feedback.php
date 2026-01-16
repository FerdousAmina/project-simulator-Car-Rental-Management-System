<?php
include('../Controller logic/feedbackcontroller.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
    <title>Feedback</title>
    <link rel="stylesheet" href="../Stylesheets/feedback.css">
    <link rel="stylesheet" href="../Stylesheets/common.css">
    <link rel="stylesheet" href="../Stylesheets/back.css">
</head>
<body>
    <div class="sidebar">
        <a href="customerdashboard.php" class="back-btn">Back</a>
        <h2>Features</h2>
        <a href="places.php">Nearby Tourist Places</a>
        <a href="calculator.php">Cost Calculator</a>    
        <a href="tripnotes.php">My Notes</a>
        <a href="feedback.php">Feedback</a>
        <a href="emergencydirectory.php">Emergency Helplines</a>
        <a href="logout.php">Logout</a>
    </div>
    <div class="main-content">
        <h1>Feedback</h1>
        <p>We value your thoughts! Help us improve you ride experience by sharing your feedback with us.</p>

        <div class = "form-section">
            <form method="POST" action="feedback.php">
                <input type="hidden" name="id" value="<?php echo $editData['id'] ?? ''; ?>">
                <p><strong>About:</strong></p>

                <input type="text" name="about" value="<?php echo $editData['about'] ?? ''; ?>" required>
                <p><strong>Feedback:</strong></p>

                <textarea name="feedback" required><?php echo $editData['feedback'] ?? ''; ?></textarea>

                <?php if ($editData): ?>
                    <button type="submit" name="update">Update</button>
                    <a href="feedback.php" class="btn-cancel">Cancel</a>
                <?php else: ?>
                    <button type="submit" name="add">Add</button>
                <?php endif; ?>
            </form>
            <p><?php echo $success; ?></p>
            <p><?php echo $error; ?></p>
        </div>

        <?php
        $current_user = $_SESSION['username'];
        $result = mysqli_query($conn, "SELECT * FROM feedback_information WHERE username='$current_user' ORDER BY id DESC");
        while ($row = mysqli_fetch_assoc($result)){
        ?>
        <div class="note-container">
        <div class="note-box">
            <div class="note-header">
                <h3>About: <?php echo htmlspecialchars($row['about']); ?></h3>
            </div>
            <div class="note-body">
                <p>Feedback:  
                <?php echo nl2br(htmlspecialchars($row['feedback'])); ?></p>
            </div>
            </div>
            <div class="note-footer">
                <a href="?edit=<?php echo $row['id']; ?>">Edit</a>
                <a href="?delete=<?php echo $row['id']; ?>" onclick="return confirm('Are you sure you want to delete feedback?');">Delete</a>
            </div>
        </div>
        <?php
        }
        ?>
    </div>
</body>
</html>