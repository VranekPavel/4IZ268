<?php
function db_connect() {

        // Define connection as a static variable, to avoid connecting more than once 
    static $conn;

        // Try and connect to the database, if a connection has not been established yet
    if(!isset($conn)) {
             // Load configuration as an array. Use the actual location of your configuration file
        $config = parse_ini_file('config.ini'); 
        $conn = mysqli_connect($config['server'],$config['username'],$config['password'],$config['db']);
    }

        // If connection was not successful, handle the error
    if($conn === false) {
            // Handle error - notify administrator, log to a file, show an error screen, etc.
        return mysqli_connect_error(); 
    }
    return $conn;
}

// Connect to the database
$conn = db_connect();

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?> 




















