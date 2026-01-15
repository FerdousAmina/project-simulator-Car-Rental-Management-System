<?php
include('../Controller logic/notescontroller.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
    <title>My Notes</title>
    <link rel="stylesheet" href="../Stylesheets/tripnotes.css">
</head>
<body>
    <div class="sidebar">
        <h2>Features</h2>
        <a href="places.php">Nearby Places to Visit</a>
        <a href="calculator.php">Cost Calculator</a>    
        <a href="tripnotes.php">My Notes</a>
        <a href="feedback.php">Feedback</a>
        <a href="emergencydirectory.php">Emergency Helplines</a>
        <a href="logout.php">Logout</a>
    </div>    
    <div class="main-content">
        <h1>Notes</h1>
        <p>Keep track of your travel plans and important information with personal notes.</p>

        <div class = "form-section">
            <form method="POST" action="">
                <input type="hidden" name="id" value="<?php echo $editData['id'] ?? ''; ?>">
                <input type="text" name="title" placeholder="Note Title" value="<?php echo $editData['title'] ?? ''; ?>" required>
                <textarea name="content" placeholder="Write your note here..." required><?php echo $editData['content'] ?? ''; ?></textarea>

                <?php if ($editData): ?>
                    <button type="submit" name="update">Update</button>
                    <a href="tripnotes.php"><button type="button">Cancel</button></a>
                <?php else: ?>
                    <button type="submit" name="add">Add</button>
                <?php endif; ?>
            </form>
            <p><?php echo $success; ?></p>
            <p><?php echo $error; ?></p>
        </div>

        <?php
        $result = mysqli_query($conn, "SELECT * FROM trip_notes ORDER BY id DESC");
        while ($row = mysqli_fetch_assoc($result)){
        ?>
        <div class="note-box">
            <div class="note-header">
                <h3><?php echo $row['title']; ?></h3>
            </div>
            <div class="note-body">
                <p><?php echo $row['content']; ?></p>
            </div>
            <div class="note-footer">
                <a href="?edit=<?php echo $row['id']; ?>">Edit</a>
                <a href="?delete=<?php echo $row['id']; ?>" onclick="return confirm('Are you sure you want to delete this note?');">Delete</a>
            </div>
        </div>
        <?php
        }
        ?>
    </div>
</body>
</html>
