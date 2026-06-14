<?php include 'includes/header.php'; ?>
<div class="container py-5">
  <h2 class="mb-4 text-center">Gallery</h2>
  <div class="row g-4">
    <?php
    $images = [
      'https://images.unsplash.com/photo-1497366811353-6870744d04b2?auto=format&fit=crop&w=600&q=80',
      'https://images.unsplash.com/photo-1524758631624-e2822e304c36?auto=format&fit=crop&w=600&q=80',
      'https://images.unsplash.com/photo-1497366754035-f200968a6e72?auto=format&fit=crop&w=600&q=80',
      'https://images.unsplash.com/photo-1497366412874-3415097a27e7?auto=format&fit=crop&w=600&q=80',
      'https://images.unsplash.com/photo-1524758631624-e2822e304c36?auto=format&fit=crop&w=600&q=80',
      'https://images.unsplash.com/photo-1497366754035-f200968a6e72?auto=format&fit=crop&w=600&q=80'
    ];
    foreach ($images as $src) {
        echo "<div class='col-md-4'>";
        echo "<div class='card'><img src='$src' class='card-img-top' loading='lazy' alt='Gallery image'></div>";
        echo "</div>";
    }
    ?>
  </div>
</div>
<?php include 'includes/footer.php'; ?>
