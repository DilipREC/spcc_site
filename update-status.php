<?php
ob_start();
session_start();
// Ensure admin is logged in
if (!isset($_SESSION['admin'])) {
    header('Location: admin-login.php');
    exit();
}

require_once 'db.php';

// Get and sanitize parameters
$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
$status = isset($_GET['status']) ? $_GET['status'] : '';

$validStatuses = ['Contacted', 'Confirmed', 'Pending'];
if ($id > 0 && in_array($status, $validStatuses)) {
    // Prepared statement to avoid injection
    $stmt = $conn->prepare('UPDATE bookings SET status = ? WHERE id = ?');
    $stmt->bind_param('si', $status, $id);
    $stmt->execute();
    $stmt->close();
}

// Back to dashboard
header('Location: admin-dashboard.php');
exit();
?>
