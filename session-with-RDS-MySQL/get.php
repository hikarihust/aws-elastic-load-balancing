<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require 'vendor/autoload.php';

# Create your MySQL database connection
$db = new mysqli('webrdsmysql.cgobf5ltljcd.us-east-2.rds.amazonaws.com', 'admin', 'webrdsmysql', 'webrdsmysql');

# Create the session handler using that connection and pass it the name of the table
# The handler will try to create it if it doesn't already exist.
$handler = new \Programster\SessionHandler\SessionHandler($db, 'my_sessions_table');

# Tell PHP to use the handler we just created.
session_set_save_handler($handler, true);
session_start();

echo "Get Server 1<br/>";

if (isset($_SESSION["username"])) {
	echo $_SESSION["username"];
}
?>