<?php
ob_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();
include 'db.php';

$message = '';
if (isset($_POST['submit'])) {
    $name = pg_escape_string($conn, $_POST['name'] ?? '');
$email = pg_escape_string($conn, $_POST['email'] ?? '');
$phone = pg_escape_string($conn, $_POST['phone'] ?? '');
$workspace = pg_escape_string($conn, $_POST['workspace_type'] ?? '');
$date = pg_escape_string($conn, $_POST['date'] ?? '');
    $sql = "INSERT INTO bookings (name, email, phone, workspace_type, status, created_at) VALUES ('$name', '$email', '$phone', '$workspace', 'Pending', NOW())";
    $result = pg_query($conn, $sql);
    if ($result) {
        $message = '<div class="alert alert-success">Your tour request has been submitted. We will contact you shortly.</div>';
    } else {
        $message = '<div class="alert alert-danger">Error: ' . pg_last_error($conn) . '</div>';
    }
}
?>
<?php include "includes/header.php"; ?>
<div class="container py-5">
    <h2 class="mb-4 text-center">Book a Free Tour</h2>
    <?php if (isset($message)) echo $message; ?>
    <form method="POST" action="book-tour.php" class="row g-3">
        <div class="col-md-6">
            <label class="form-label">Name</label>
            <input type="text" name="name" class="form-control" required>
        </div>
        <div class="col-md-6">
            <label class="form-label">Email</label>
            <input type="email" name="email" class="form-control" required>
        </div>
        <div class="col-md-6">
            <label class="form-label">Phone</label>
            <input type="text" name="phone" class="form-control" required>
        </div>
        <div class="col-md-6">
            <label class="form-label">Workspace Type</label>
            <select name="workspace_type" class="form-select" required>
                <option value="Hot Desk">Hot Desk</option>
                <option value="Dedicated Desk">Dedicated Desk</option>
                <option value="Private Cabin">Private Cabin</option>
                <option value="Meeting Room">Meeting Room</option>
                <option value="Tour">Tour</option>
            </select>
        </div>
        <div class="col-md-6">
            <label class="form-label">Preferred Date</label>
            <input type="date" name="date" class="form-control" required>
        </div>
        <div class="col-12 text-center">
            <button type="submit" name="submit" class="btn btn-warning btn-lg">Submit Request</button>
        </div>
    </form>
</div>
<?php include "includes/footer.php"; ?>
