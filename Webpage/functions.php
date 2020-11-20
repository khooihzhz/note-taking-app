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
        echo "<ul> <li><div class='list-of-files'><a class='file-button' href='views.php?file=$file&action=0'>$file </a> <a href='views.php?file=$file&action=1'><img class='trash-icon' src=image/trash.svg></a></div> </li></ul>";
    }
}

// READ FILE
function read_file(){
    // CHECK IF URL GOT PARAMETER
    $action = $_GET['action'];
    if ($action == 0) {
        if (isset($_GET['file'])) {
            {
                // GET URL FILENAME
                $file = $_GET['file'];
                $open_file = fopen("storage/$file", "r");
                while (!feof($open_file)) {
                    echo fgets($open_file) . "<br />";
                }
                fclose ($open_file);
            }
        }
    }
}

function delete_file()
{
    //GET FILE
    $action = $_GET['action'];

    if ($action == 1) {
        $file = $_GET['file'];
        if (is_file("storage/$file")) {

            unlink("storage/$file");
        }
        return "$file IS DELETED";
    }
    else{
        return "";
    }
}




