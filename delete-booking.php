<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header('Location: admin-login.php');
    exit();
}
require 'db.php';
if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
    header('Location: admin-dashboard.php?msg=invalid');
    exit();
}
$id = (int)$_GET['id'];
$stmt = $conn->prepare('DELETE FROM bookings WHERE id = ?');
$stmt->bind_param('i', $id);
if ($stmt->execute()) {
    header('Location: admin-dashboard.php?msg=deleted');
} else {
    header('Location: admin-dashboard.php?msg=error');
}
$stmt->close();
$conn->close();
?>
