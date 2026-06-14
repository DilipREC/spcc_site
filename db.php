<?php
/**
 * Database connection helper.
 * -------------------------------------------------
 * Render injects the credentials via environment variables.
 *   DB_HOST – hostname of the Render‑provided database
 *   DB_NAME – database name
 *   DB_USER – username
 *   DB_PASS – password
 *
 * Using getenv() makes the same code work locally (you can set
 * the variables in a .env file) and on Render without any
 * further changes.
 */

$host = getenv('DB_HOST');
$db   = getenv('DB_NAME');
$user = getenv('DB_USER');
$pass = getenv('DB_PASS');

// If any variable is missing, give a clear error (helps debugging)
if (!$host || !$db || !$user || !$pass) {
    die('Missing database environment variables. '
        . 'Make sure DB_HOST, DB_NAME, DB_USER, DB_PASS are set.');
}

// Create a MySQLi connection
$conn = new mysqli($host, $user, $pass, $db);

// Check for connection errors
if ($conn->connect_error) {
    die('Database connection failed: ' . $conn->connect_error);
}

// Optional: set proper charset (UTF‑8 is recommended)
$conn->set_charset('utf8mb4');
?>