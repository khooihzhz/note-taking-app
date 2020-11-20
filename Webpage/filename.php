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
<!--Title-->
<div class="main-container">
    <div class="title"><h2 class="homepage-title">Enter New or Existing File</h2></div>
    <div class="filename-container">
        <!--Submit new Note note-->
        <form method="POST" action="homepage.php">
            <div class="filename-div">
                <div class="file-input">
                    <label>Filename: </label>
                    <input class="form" type="text" id="filename" name="filename" required placeholder="Your Filename">
                </div>
                <div class="img-pen">
                    <img id="pencil" src="image/penpaper.png">
                </div>
            </div>
            <div class="filename-btn-container">
                <input class="save-btn" type="submit" value="Confirm">
            </div>
        </form>
        <!--END new Note function-->
    </div>
</div>
</body>
</html>