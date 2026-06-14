<?php
ob_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();
include 'db.php';

$error = "";
if(isset($_POST['login'])) {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    // Simple plain‑text check (replace with password_hash in production)
    $sql = "SELECT * FROM admin_users WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result) > 0) {
        $_SESSION['admin'] = $username;
        session_write_close();
        header("Location: admin-dashboard.php");
        exit();
    } else {
        $error = "Invalid Username or Password";
    }
}
?>
<?php include 'includes/header.php'; ?>
<div class="d-flex align-items-center justify-content-center min-vh-100 bg-light">
  <div class="card shadow-sm p-5" style="max-width:800px;width:100%;min-height:500px;">
    <h2 class="text-center mb-4">Admin Login</h2>
    <?php if($error != "") { ?>
      <div class="alert alert-danger"><?php echo htmlspecialchars($error); ?></div>
    <?php } ?>
    <form method="POST" action="admin-login.php">
      <div class="mb-3">
        <label class="form-label">Username</label>
        <input type="text" name="username" class="form-control" required>
      </div>
      <div class="mb-3">
        <label class="form-label">Password</label>
        <input type="password" name="password" class="form-control" required>
      </div>
      <div class="d-grid">
        <button type="submit" name="login" class="btn btn-primary">Login</button>
      </div>
    </form>
  </div>
</div>
<?php include 'includes/footer.php'; ?>
