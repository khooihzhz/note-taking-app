<?php
// Create file function
// if receive POST action
function create_file($filename){
    if(isset($_POST['notes']))
    {
        // declare variable
        $note = $_POST['notes'];
        // WRITE ON FILE
        file_put_contents("storage/$filename.txt", $note);
    }
}

// SCAN THROUGH DIRECTORIES
function list_file(){
    $dir = 'storage';
    // SCAN THROUGH DATABASE
    $files = array_diff(scandir($dir), array('..', '.'));

    // loop through every available files
    foreach ($files as $file) {
        //echo "<p><a href='views.php?file=$file'> $file </a> </p>";
        echo "<ul> <li><a class='file-button' href='views.php?file=$file'> $file</a> </li></ul>";
    }

}

// READ FILE
function read_file(){
    // CHECK IF URL GOT PARAMETER
    if (isset($_GET['file'])) {
        {
            // GET URL FILENAME
           $file = $_GET['file'];
           $open_file = fopen("storage/$file", "r");
           echo fgets($open_file);
           fclose ($open_file);
        }
    }
}





