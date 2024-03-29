<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Notes</title>
    <!-- LINK TO CSS FILE -->
    <link rel="stylesheet" href="style.css">
    <!-- LINK TO FUNCTION PHP FILE -->
    <?php include 'functions.php';
    $filename = $_POST['filename'];
    $message = '';
    create_file($filename);
    $message = delete_file();
    ?>
</head>

<!-- NavBar -->
<div class="navbar">
    <a href="welcome.html" class="home">Home</a>
    <a href="filename.php" class="new-note">New</a>
    <a href="views.php" class="view-note">View</a>
</div>
<!-- END of NavBar -->

<body class="main-body">
    <!-- Add title to the page -->
    <div class="title"><h2 class="viewpage-title">View Your Notes Here!</h2></div>
    <!-- Display deleted file -->
    <div class='delete-txt'><?php echo $message ?></div>
    <!-- Listing and Viewing -->
    <div>
        <div class="list-container">
            <div class="list-elements">
                <span>List of Notes</span>
                <!-- Listing files from the directory -->
                <?php list_file(); ?>
            </div>
        </div>
        <div class="read-container">
            <div class="read-elements">
            <span>Note is shown here:-</span>
                <!-- Read file content -->
                <div id="read-styling"> <?php read_file(); ?> </div>
            </div>
        </div>
    </div>
</body>
</html>
