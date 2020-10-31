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
<!--NavBar here-->

<!--Title-->
<div class="title"><h2 class="homepage-title">Create Your Own Notes!</h2></div>
<div>
    <!--Submit new Note note-->
    <form method="POST" class="form-container"> <!-- Added Styling Form -->
        <label for="filename"> Enter Filename: </label><input class="form" type="text" id="filename" name="filename" placeholder="filename">
        <br>
        <textarea id="notes" name="notes" rows="25" cols="55" placeholder="Write your notes here!"></textarea>
        <br><br>
        <input class="input-styling" type="submit" value="Save">    <!-- Added Styling -->
        <input class="input-styling" type="reset" value="Clear">
    </form>
    <!--END new Note function-->
</div>
</body>
</html>