<?php
/*
 * PostgreSQL connection helper.
 * Render injects the connection details as environment variables.
 * The same variable names you already set (DB_HOST, DB_NAME, DB_USER, DB_PASS)
 * are used here, but we connect with pg_connect instead of mysqli.
 */

// Grab the environment variables Render provides.
$host = getenv('DB_HOST');      // e.g. dpg-d8n6thr7uimc739j514g-a.pg.render.com
$port = getenv('DB_PORT');     // Render usually gives 5432; fallback to 5432 if empty
$db   = getenv('DB_NAME');     // e.g. spcc_db
$user = getenv('DB_USER');     // e.g. spcc_db_user
$pass = getenv('DB_PASS');     // the password Render generated

// Provide sane defaults for local development (optional)
if (!$host) $host = 'localhost';
if (!$port) $port = '5432';
if (!$db)   $db   = 'spcc_db';
if (!$user) $user = 'postgres';
if ($pass === false) $pass = '';

/*
 * Build the PostgreSQL connection string.
 * pg_connect expects a string like:
 *   host=... port=... dbname=... user=... password=...
 */
$connectionString = sprintf(
    'host=%s port=%s dbname=%s user=%s password=%s',
    $host,
    $port,
    $db,
    $user,
    $pass
);

// Open the connection.
$conn = pg_connect($connectionString);

if (!$conn) {
    // pg_last_error() gives the most recent error message.
    die('Connection Failed: ' . pg_last_error());
}

/* -------------------------------------------------
 * From this point on you can use $conn with the
 * PostgreSQL functions (pg_query, pg_fetch_assoc, …)
 * ------------------------------------------------- */
?>