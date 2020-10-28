<?php

// Create file function
// if receive POST action
function create_file(){
    if(isset($_POST['filename']) and isset($_POST['notes']))
    {
        // declare variable
        $filename = $_POST['filename'];
        $note = $_POST['notes'];

        // FUNCTION TO CHECK IF FILENAME EXISTED
        // RUN CONFIRMATION TO REPLACE OR CHANGE NAME

        // CREATE A NEW FILE
        $create_file = fopen("storage/$filename.txt", 'a');

        // WRITE ON FILE
        fwrite($create_file, $note);
        // CLOSE FILE
        fclose($create_file);
    }
}

// CREATE SECTION




