<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add New Note</title>
    <!--CSS FILE-->
    <link rel="stylesheet" href="style.css">
    <!--PHP FILE-->
    <?php include 'create_file.php';
    create_file();?>
</head>
<nav class="navbar">
    <img src="image/twotone_sticky_note_2_black_24dp.png">
    <a href="#home" class="navbar-text">Notes</a>
</nav>

<body class="main-body">
<!--NavBar here-->

<!--Title-->
<h2>Write new notes here ....</h2>

<!--Submit new Note note-->
<form method="POST">
    <label for="filename"> Enter Filename: </label><input type="text" id="filename" name="filename" placeholder="filename">
    <input type="text" id="notes" name="notes" placeholder="write something here">
    <input type="submit" value="Save">
    <button>Clear</button>
</form>
<!--END new Note function-->
</body>
</html>