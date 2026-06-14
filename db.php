<?php
// Read database connection details from environment variables (Render provides these)
$host = getenv('DB_HOST');
$db   = getenv('DB_NAME');
$user = getenv('DB_USER');
$pass = getenv('DB_PASS');

// If any variable is missing, fall back to typical local development defaults
if (!$host) $host = 'localhost';
if (!$db)   $db   = 'spcc_workspace';
if (!$user) $user = 'root';
if ($pass === false) $pass = '';

// Establish connection using mysqli
$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    // Output a clear error; Render logs will capture this
    die('Connection Failed: ' . mysqli_connect_error());
}
?>
