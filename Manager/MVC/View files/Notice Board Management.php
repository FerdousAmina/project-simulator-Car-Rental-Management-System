<?php require_once('../Model files/noticedb.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Notice Board Management</title>
    <link rel="stylesheet" href="../Stylesheets/notice_form.css">
    <link rel="stylesheet" href="../Stylesheets/notice_list.css">
</head>
<body>
    <div class="main-container">
     <form action="../Controller logic/notice_controller.php" method="POST" class="notice-form">
            <h1>Post New Notice</h1>
            <input type="text" name="title" placeholder="Notice Title" required><br>
            <textarea name="content" placeholder="write your notice here..." required></textarea><br>
            <button type="submit" name="submit_notice">Post Notice</button>
     </form>

    <div class="manage-notices">
    <h3>Manage Existing Notices</h3>
        <table class="notice-table">
        <tr>
            <th>Notice Title</th>
            <th>Action</th>
        </tr>
        <?php
            $notices = getAllNotices();
            while($row = $notices->fetch_assoc()) {
             echo "<tr>
             <td>{$row['title']}</td>
            <td>
            <a href='../Controller logic/notice_controller.php?delete={$row['id']}' 
            class='delete-btn' onclick='return confirm(\"Are you sure?\")'>Delete</a>
            </td>
             </tr>";
            }
        ?>
        </table>
    </div>
    </div>
</body>
</html>