<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Note - QuickNote</title>
    <!--CSS FILE-->
    <link rel="stylesheet" href="style.css">
    <!--PHP FILE-->
    <?php include 'functions.php';
            $filename = $_POST['filename'];
            $text_file = '';
            if (file_exists("storage/$filename.txt"))
            {
                $text_file = file_get_contents('storage/'.$filename.'.txt');
            }
            else
            {
                file_put_contents("storage/$filename.txt", '');
            } ?>
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
    <div class="title"><h2 class="homepage-title">Create Your Own Notes!</h2></div>
    <div>

        <!--Submit new Note note-->
        <form method="POST" action="views.php">
            <div class="file-div">
                <div class="file-input">
                    <p style="color: black"> Filename :<?php echo $filename ?></p>
                </div>
                <div class="img-note">
                    <img id="pencil" src="image/pencil.png">
                </div>
            </div>

            <div class="writing-area">
                <input type="hidden" name="filename" value="<?php echo $filename;?>">
            <textarea id="notes" name="notes"  placeholder="Write your notes here!"><?php echo ($text_file); ?></textarea>
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