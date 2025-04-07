<?php
$conn = new mysqli('localhost', 'root', '', 'testdb');
$aboutMessage = $welcomeMessage = $trustMessage = $bottomaboutMessage = "";


// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle 'about content' update
if (isset($_POST['update_content'])) {
    $newContent = $conn->real_escape_string($_POST['content']);
    $conn->query("UPDATE about_section SET content = '$newContent' WHERE id = 1");
    $aboutMessage = "About updated sucsessfully!";
}

// Handle 'welcome content' update
if (isset($_POST['update_welcome'])) {
    $newWelcome = $conn->real_escape_string($_POST['welcome']);
    $conn->query("UPDATE about_section SET content = '$newWelcome' WHERE id = 2");
    $welcomeMessage = "Welcome section updated successfully!";
}

// Handle 'trust content' update
if (isset($_POST['update_trust'])) {
    $newTrust = $conn->real_escape_string($_POST['trust']);
    $conn->query("UPDATE about_section SET content = '$newTrust' WHERE id = 3");
    $trustMessage = "Trust section updated successfully!";
}

// Handle 'trust content' update
if (isset($_POST['update_bottomabout'])) {
    $newbottomabout = $conn->real_escape_string($_POST['bottomabout']);
    $conn->query("UPDATE about_section SET content = '$newbottomabout' WHERE id = 4");
    $bottomaboutMessage = "bottomabout section updated successfully!";
}

// Fetch about section content
$contentResult = $conn->query("SELECT content FROM about_section WHERE id = 1");
$contentRow = $contentResult->fetch_assoc();

// Fetch welcome section content
$welcomeResult = $conn->query("SELECT content FROM about_section WHERE id = 2");
$welcomeRow = $welcomeResult->fetch_assoc();

// Fetch trust section content
$trustResult = $conn->query("SELECT content FROM about_section WHERE id = 3");
$trustRow = $trustResult->fetch_assoc();

// Fetch bottomabout section content
$bottomaboutResult = $conn->query("SELECT content FROM about_section WHERE id = 4");
$bottomaboutRow = $bottomaboutResult->fetch_assoc();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin-pannel</title>
    <link rel="stylesheet" href="admin-styles.css">
</head>
<body>
    <div class="body-container">
        <div class="container">
        <!-- About section form -->
        <form method="POST">
            <label>Edit About Text:</label><br>
            <textarea name="content" rows="5" cols="50"><?php echo htmlspecialchars($contentRow             ['content']); ?></textarea><br>
            <button type="submit" name="update_content">Update</button>
            <p class="message"><?php echo $aboutMessage; ?></p>
        </form>

        <!-- Welcome section form -->
        <form method="POST">
            <label>Edit Welcome Text:</label><br>
            <textarea name="welcome" rows="5" cols="50"><?php echo htmlspecialchars($welcomeRow             ['content']); ?></textarea><br>
            <button type="submit" name="update_welcome">Update</button>
            <p class="message"><?php echo $welcomeMessage; ?></p>
        </form>

        <!-- trust section form -->
        <form method="POST">
            <label>Edit trust Text:</label><br>
            <textarea name="trust" rows="5" cols="50"><?php echo htmlspecialchars($trustRow                 ['content']); ?></textarea><br>
            <button type="submit" name="update_trust">Update</button>
            <p class="message"><?php echo $trustMessage; ?></p>
        </form>

        <!-- trust section form -->
        <form method="POST">
            <label>Edit bottomabout Text:</label><br>
            <textarea name="bottomabout" rows="5" cols="50"><?php echo htmlspecialchars                     ($bottomaboutRow['content']); ?></textarea><br>
            <button type="submit" name="update_bottomabout">Update</button>
            <p class="message"><?php echo $bottomaboutMessage; ?></p>
        </form>
        </div>
    
    </div>
</body>
</html>
