<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Note - QuickNote</title>
    <!--CSS FILE-->
    <link rel="stylesheet" href="style.css">
    <!--PHP FILE-->
    <?php include 'functions.php';
            create_file();?>
</head>

<!-- NavBar -->
<div id="navbar">
    <a href="welcome.html" id="home">Home</a>
    <a href="homepage.php" id="new-note">New</a>
    <a href="views.php" id="view-note">View</a>
</div>
<!-- END of NavBar -->
<body class="main-body">

<!--Title-->
<div class="main-container">
    <div class="title"><h2 class="homepage-title">Create Your Own Notes!</h2></div>
    <div>
        <!--Submit new Note note-->
        <form method="POST" class="form-container">
            <div class="file-div">
                <div class="file-input">
                <label>Filename: </label>
                <input class="form" type="text" id="filename" name="filename" required placeholder="Your Filename">
                </div>
                <div class="img-note">
                    <img id="pencil" src="image/pencil.png">
                </div>
            </div>

            <div class="writing-area">
            <textarea id="notes" name="notes"  placeholder="Write your notes here!"></textarea>
            </div>

            <div class="submit-container">
                <input class="submit-btn" type="submit" value="Save" style="margin-left: -30px; margin-right: 20px;">
                <input class="submit-btn" type="reset" value="Clear">
            </div>
        </form>
        <!--END new Note function-->
    </div>
</div>
</body>
</html>