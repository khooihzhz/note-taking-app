<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Enter Filename - QuickNote</title>
    <!--CSS FILE-->
    <link rel="stylesheet" href="style.css">
</head>

<!-- NavBar -->
<div class="navbar">
    <a href="welcome.html" class="home">Home</a>
    <a href="filename.php" class="new-note">New</a>
    <a href="views.php" class="view-note">View</a>
</div>
<!-- END of NavBar -->

<body class="main-body">
<div class="main-container">
    <!-- Title of the page -->
    <div class="title"><h2 class="homepage-title">Enter New or Existing File</h2></div>
    <div class="filename-container">
        <!-- Filename input -->
        <form method="POST" action="homepage.php">
            <div class="filename-div">
                <div class="file-input">
                    <label>Filename: </label>
                    <input class="form" type="text" id="filename" name="filename" required placeholder="Your Filename">
                </div>
                <!-- Adding image pencil to the page -->
                <div class="img-pen">
                    <img id="pencil" src="image/penpaper.png">
                </div>
            </div>
            <!-- Add a confirm button -->
            <div class="filename-btn-container">
                <input type="submit" value="Confirm">
            </div>
        </form>
        <!-- End of filename-container-->
    </div>
</div>
</body>
</html>