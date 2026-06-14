<?php
// create_admin.php – run once to ensure an admin user exists.
require 'db.php';

$username = 'admin';
$password = 'admin'; // plain‑text for demo; replace with password_hash() in production.

// Check if user already exists
$check = mysqli_query($conn, "SELECT * FROM admin_users WHERE username='$username'");
if (mysqli_num_rows($check) == 0) {
    $sql = "INSERT INTO admin_users (username, password) VALUES ('$username', '$password')";
    if (mysqli_query($conn, $sql)) {
        echo 'Default admin user created.'; 
    } else {
        echo 'Error creating admin: ' . mysqli_error($conn);
    }
} else {
    echo 'Admin user already exists.';
}
?>
