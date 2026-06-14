<?php include 'includes/header.php'; ?>

<!-- HERO SECTION -->



<?php
    $images = [
      'https://images.unsplash.com/photo-1497366811353-6870744d04b2?auto=format&fit=crop&w=1200&q=80',
      'https://images.unsplash.com/photo-1524758631624-e2822e304c36?auto=format&fit=crop&w=1200&q=80',
      'https://images.unsplash.com/photo-1497366754035-f200968a6e72?auto=format&fit=crop&w=1200&q=80',
      'https://images.unsplash.com/photo-1497366412874-3415097a27e7?auto=format&fit=crop&w=1200&q=80'
    ];
?>
<div id="heroCarousel" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <?php foreach ($images as $i => $src): ?>
    <div class="carousel-item <?= $i===0 ? 'active' : '' ?>">
      <img src="<?= $src ?>" class="d-block w-100" alt="Hero image <?= $i+1 ?>">
      <div class="carousel-caption d-none d-md-block">
        <h1>Work. Connect. Grow.</h1>
        <p class="mt-4">Premium coworking spaces in Anna Nagar, Chennai. Flexible desks, private cabins and meeting rooms for startups, freelancers and growing businesses.</p>
        <a href="book-tour.php" class="btn btn-warning btn-lg">Book a Free Tour</a>
        <a href="contact.php" class="btn btn-outline-light btn-lg ms-2">Contact Us</a>
      </div>
    </div>
    <?php endforeach; ?>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<?php
    $heroImg = 'https://images.unsplash.com/photo-1497366811353-6870744d04b2?auto=format&fit=crop&w=1200&q=80';
?>
<div class="hero-section d-flex align-items-center justify-content-center text-center" style="background-image:url('<?= $heroImg ?>');">
    <div class="hero-overlay p-4 rounded">
        <h1 class="display-3 fw-bold text-white mb-3" style="text-shadow: 2px 2px 6px rgba(0,0,0,0.7);">Work. Connect. Grow.</h1>
        <p class="lead text-white mb-4">Premium coworking spaces in Anna Nagar, Chennai. Flexible desks, private cabins and meeting rooms for startups, freelancers and growing businesses.</p>
        <a href="book-tour.php" class="btn btn-warning btn-lg me-2">Book a Free Tour</a>
        <a href="contact.php" class="btn btn-outline-light btn-lg">Contact Us</a>
    </div>
</div>


<!-- STATS SECTION -->

<section data-aos="fade-up">

<div class="container">

<div class="row g-4">

<div class="col-md-3">

<div class="stats-box">

<h2 class="counter" data-target="100">0</h2>

<p>Seats Available</p>

</div>

</div>

<div class="col-md-3">

<div class="stats-box">

<h2 class="counter" data-target="2">0</h2>

<p>Premium Floors</p>

</div>

</div>

<div class="col-md-3">

<div class="stats-box">

<h2 class="counter" data-target="50">0</h2>

<p>Businesses Served</p>

</div>

</div>

<div class="col-md-3">

<div class="stats-box">

<h2 class="counter" data-target="24">0</h2>

<p>Hours Access</p>

</div>

</div>

</div>

</div>

</section>

<!-- ABOUT SECTION -->

<section class="bg-light" data-aos="fade-up">

<div class="container">

<div class="row align-items-center">

<div class="col-md-6">

<img
src="https://images.unsplash.com/photo-1497366811353-6870744d04b2?auto=format&fit=crop&w=1200&q=80"
class="img-fluid rounded">

</div>

<div class="col-md-6">

<h2>

Why Choose SPCC Workspaces?

</h2>

<p>

Located in the heart of Anna Nagar East,
SPCC Workspaces offers modern office spaces
with premium amenities and a professional
business environment.

</p>

<ul>

<li>High-Speed Internet</li>

<li>Conference Rooms</li>

<li>Power Backup</li>

<li>Dedicated Parking</li>

<li>Business Networking</li>

<li>Metro Connectivity</li>

</ul>

</div>

</div>

</div>

</section>

<!-- AMENITIES -->

<section data-aos="fade-up">

<div class="container">

<h2 class="text-center mb-5">

Premium Amenities

</h2>

<div class="row g-4">

<div class="col-md-3">

<div class="card p-4 text-center">

<i class="fas fa-wifi fa-3x text-warning"></i>

<h5 class="mt-3">

High-Speed WiFi

</h5>

</div>

</div>

<div class="col-md-3">

<div class="card p-4 text-center">

<i class="fas fa-mug-hot fa-3x text-warning"></i>

<h5 class="mt-3">

Free Refreshments
</h5>

</div>

</div>

<div class="col-md-3">

<div class="card p-4 text-center">

<i class="fas fa-door-open fa-3x text-warning"></i>

<h5 class="mt-3">

Meeting Rooms
</h5>

</div>

</div>

<div class="col-md-3">

<div class="card p-4 text-center">

<i class="fas fa-car fa-3x text-warning"></i>

<h5 class="mt-3">

Parking Facility
</h5>

</div>

</div>

</div>

</div>

</section>

<!-- WORKSPACES -->

<section class="bg-light" data-aos="fade-up">

<div class="container">

<h2 class="text-center mb-5">

Workspace Options

</h2>

<div class="row g-4">

<div class="col-md-4">

<div class="card">

<img
src="https://images.unsplash.com/photo-1524758631624-e2822e304c36?auto=format&fit=crop&w=1200&q=80"
class="gallery-img">

<div class="card-body">

<h4>Hot Desk</h4>

<p>

Flexible seating for freelancers
and remote workers.

</p>

</div>

</div>

</div>

<div class="col-md-4">

<div class="card">

<img
src="https://images.unsplash.com/photo-1497366754035-f200968a6e72?auto=format&fit=crop&w=1200&q=80"
class="gallery-img">

<div class="card-body">

<h4>Dedicated Desk</h4>

<p>

Reserved desk space for
daily productivity.

</p>

</div>

</div>

</div>

<div class="col-md-4">

<div class="card">

<img
src="https://images.unsplash.com/photo-1497366412874-3415097a27e7?auto=format&fit=crop&w=1200&q=80"
class="gallery-img">

<div class="card-body">

<h4>Private Cabin</h4>

<p>

Private office space for teams
and growing companies.

</p>

</div>

</div>

</div>

</div>

</div>

</section>

<!-- TESTIMONIALS -->

<section data-aos="fade-up">

<div class="container">

<h2 class="text-center mb-5">

What Our Members Say

</h2>

<div class="row g-4">

<div class="col-md-4">

<div class="card p-4">

<p>

"Excellent workspace with modern facilities.
Perfect for startups."

</p>

<h5>

- Rajesh Kumar

</h5>

</div>

</div>

<div class="col-md-4">

<div class="card p-4">

<p>

"Great location near the metro station
and professional environment."

</p>

<h5>

- Priya Sharma

</h5>

</div>

</div>

<div class="col-md-4">

<div class="card p-4">

<p>

"Affordable pricing and excellent support."

</p>

<h5>

- Arjun Nair

</h5>

</div>

</div>

</div>

</div>

</section>

<!-- LOCATION -->

<section data-aos="fade-up">

<div class="container">

<h2 class="text-center mb-4">

Find Us

</h2>

<iframe
src="https://www.google.com/maps?q=Anna+Nagar+East+Chennai&output=embed"
width="100%"
height="450"
style="border:0;"
allowfullscreen>

</iframe>

</div>

</section>

<!-- CALL TO ACTION -->

<section class="bg-dark text-white text-center">

<div class="container">

<h2>

Ready to Start Working Smarter?

</h2>

<p>

Book a tour and experience SPCC Workspaces.

</p>

<a
href="book-tour.php"
class="btn btn-warning btn-lg">

Schedule a Visit

</a>

</div>

</section>

<?php include 'includes/footer.php'; ?>
