<?php
session_start();
if(!isset($_SESSION['admin'])) {
    header("Location: admin-login.php");
    exit();
}
include 'db.php';

// Pagination settings
$limit = 20; // rows per page
$page = isset($_GET['page']) && is_numeric($_GET['page']) ? (int)$_GET['page'] : 1;
if ($page < 1) $page = 1;
$offset = ($page - 1) * $limit;

// Total counts
$totalRows = mysqli_fetch_row(mysqli_query($conn, "SELECT COUNT(*) FROM bookings"))[0];
$totalPages = ceil($totalRows / $limit);
$totalBookings = $totalRows;
$newBookings = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM bookings WHERE status='New'"));

// Search handling
$search = "";
if (isset($_GET['search'])) {
    $search = $_GET['search'];
    $searchEsc = mysqli_real_escape_string($conn, $search);
    $result = mysqli_query($conn,
        "SELECT * FROM bookings WHERE name LIKE '%$searchEsc%' OR email LIKE '%$searchEsc%' OR phone LIKE '%$searchEsc%' ORDER BY id DESC LIMIT $limit OFFSET $offset");
} else {
    $result = mysqli_query($conn,
        "SELECT * FROM bookings ORDER BY id DESC LIMIT $limit OFFSET $offset");
}
?>
<?php include 'includes/header.php'; ?>
<div class="container py-5">
  <div class="d-flex justify-content-between align-items-center mb-4">
    <h2>Admin Dashboard</h2>
    <div>
      <a href="export-bookings.php" class="btn btn-success">Export CSV</a>
      <a href="logout.php" class="btn btn-danger">Logout</a>
    </div>
  </div>
  <hr>
  <div class="row mb-4">
    <div class="col-md-6">
      <div class="card p-4 text-center">
        <h4>Total Bookings</h4>
        <h2 class="text-primary"><?php echo $totalBookings; ?></h2>
      </div>
    </div>
    <div class="col-md-6">
      <div class="card p-4 text-center">
        <h4>New Leads</h4>
        <h2 class="text-success"><?php echo $newBookings; ?></h2>
      </div>
    </div>
  </div>
  <form method="GET" class="mb-4">
    <div class="row">
      <div class="col-md-10">
        <input type="text" name="search" class="form-control" placeholder="Search by Name, Email or Phone" value="<?php echo htmlspecialchars($search); ?>">
      </div>
      <div class="col-md-2">
        <button type="submit" class="btn btn-primary w-100">Search</button>
      </div>
    </div>
  </form>

  <div class="table-responsive">
    <table class="table table-striped">
      <thead>
        <tr>
          <th>ID</th>
          <th>Name</th>
          <th>Email</th>
          <th>Phone</th>
          <th>Workspace</th>
          <th>Status</th>
          <th>Date</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        <?php while($row = mysqli_fetch_assoc($result)) { ?>
        <tr>
          <td><?php echo $row['id']; ?></td>
          <td><?php echo $row['name']; ?></td>
          <td><?php echo $row['email']; ?></td>
          <td><?php echo $row['phone']; ?></td>
          <td><?php echo $row['workspace_type']; ?></td>
          <td><span class="badge bg-info"><?php echo $row['status']; ?></span></td>
          <td><?php echo $row['created_at']; ?></td>
          <td>
            <a href="update-status.php?id=<?php echo $row['id']; ?>&status=Contacted" class="btn btn-primary btn-sm">Contacted</a>
            <a href="update-status.php?id=<?php echo $row['id']; ?>&status=Confirmed" class="btn btn-success btn-sm">Confirmed</a>
            <a href="delete-booking.php?id=<?php echo $row['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this booking?')">Delete</a>
          </td>
        </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>

  <!-- Pagination -->
  <?php if ($totalPages > 1): ?>
  <nav aria-label="Page navigation">
    <ul class="pagination justify-content-center">
      <li class="page-item<?php if($page <= 1) echo ' disabled'; ?>">
        <a class="page-link" href="?page=<?php echo $page-1; ?>&search=<?php echo urlencode($search); ?>" tabindex="-1">Previous</a>
      </li>
      <?php for ($i = 1; $i <= $totalPages; $i++): ?>
      <li class="page-item<?php if($i == $page) echo ' active'; ?>">
        <a class="page-link" href="?page=<?php echo $i; ?>&search=<?php echo urlencode($search); ?>"><?php echo $i; ?></a>
      </li>
      <?php endfor; ?>
      <li class="page-item<?php if($page >= $totalPages) echo ' disabled'; ?>">
        <a class="page-link" href="?page=<?php echo $page+1; ?>&search=<?php echo urlencode($search); ?>">Next</a>
      </li>
    </ul>
  </nav>
  <?php endif; ?>

</div>
<?php include 'includes/footer.php'; ?>
