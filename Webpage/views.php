<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Notes</title>
    <!-- LINK TO CSS FILE -->
    <link rel="stylesheet" href="style.css">
    <!-- LINK TO FUNCTION PHP FILE -->
    <?php include 'functions.php';?>
</head>

<!-- NavBar -->
<div class="navbar">
    <a href="welcome.html" class="home">Home</a>
    <a href="homepage.php" class="new-note">New</a>
    <a href="views.php" class="view-note">View</a>
</div>
<!-- END of NavBar -->

<body class="main-body">
<div class="title"><h2 class="viewpage-title">View Your Notes Here!</h2></div>

<div class="list-container">
    Choose to see your notes!
    <?php list_file(); ?>
    <br>
</div>
<div class="read-container">
    Note is shown here:-
    <br><br>
    <div id="read-styling"> <?php read_file(); ?> </div>
</div>
</body>
</html>
