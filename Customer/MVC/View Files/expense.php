<?php
include('../Controller logic/expensecontroller.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
    <title>Travel Expense Logger</title>
    <link rel="stylesheet" href="../Stylesheets/expense.css">
    <link rel="stylesheet" href="../Stylesheets/common.css">
    <link rel="stylesheet" href="../Stylesheets/back.css">
</head>
<body>
    <div class="sidebar">
        <a href="customerdashboard.php" class="back-btn">Back</a>
        <h2>Features</h2>
        <a href="places.php">Nearby Tourist Places</a>
        <a href="expense.php">Travel Expense Logger</a>     
        <a href="tripnotes.php">My Notes</a>
        <a href="feedback.php">Feedback</a>
        <a href="emergencydirectory.php">Emergency Helplines</a>
        <a href="logout.php">Logout</a>
    </div>

    <div class="main-content">
        <h1>Travel Expense Logger</h1>
        <p>Keep track of all your ride expenses easily.</p>

    <div class="form-section">
        <form method="post" action="">
            <input type="hidden" name="id" value="<?php echo $editData['id'] ?? ''; ?>">

            <input type="text" name="title" placeholder="Expense Title" value="<?php echo $editData['title'] ?? ''; ?>" required>
            <input type="number" name="cost" placeholder="Cost" value="<?php echo $editData['cost'] ?? ''; ?>"
            onkeypress="return event.charCode >=48 && event charCode <= 57" required>

            <?php if ($editData): ?>
                <button type="submit" name="update">Update</button>
                <a href ="expense.php"><button type="button">Cancel</button></a>
            <?php else: ?>
                <button type="submit" name="add">Add</button>
            <?php endif; ?>
        </form>
    </div>

    <div class="table-container">
        <table class="cost-table">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Cost</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>

                <?php
                $total_expense = 0;
                $current_user = $_SESSION['username'];
                $result = mysqli_query($conn, "SELECT * FROM expenses WHERE username='$current_user'");
                while ($row = mysqli_fetch_assoc($result)) {
                    $total_expense += $row['cost']; 
                ?>
                <tr>
                    <td><?php echo $row['title']; ?></td>
                    <td class="num"><?php echo $row['cost']; ?></td>
                    <td>
                        <a href="?edit=<?php echo $row['id']; ?>">Edit</a> |
                        <a href="?delete=<?php echo $row['id']; ?>" onclick="return confirm('Are you sure to delete this contact?');">Delete</a>
                    </td>
                </tr>
                <?php 
                } 
                ?>
           
