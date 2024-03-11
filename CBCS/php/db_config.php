<?php
// Creating Database Connection Function 
function Opencon()
{
    $server = "localhost";
    $name = "root";
    $pwd = "";
    $db_name = "cbcs";

    $db = mysqli_connect($server, $name, $pwd, $db_name);

    if (!$db) {
        die("Connection failed : " . mysqli_connect_error());
    }
    // echo "Connected Sucessfully";
    return $db;
}

// Closing Database Connection
function Closecon($db)
{
    $db->close();
}
