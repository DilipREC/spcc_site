<footer class="footer">
<div class="container">
<div class="row">
<div class="col-md-4">
<h4>SPCC Workspaces</h4>
<p>
Premium coworking spaces for startups,
freelancers and growing businesses in
Anna Nagar East, Chennai.
</p>
</div>
<div class="col-md-4">
<h4>Quick Links</h4>
<ul class="list-unstyled">
<li><a href="index.php">Home</a></li>
<li><a href="about.php">About</a></li>
<li><a href="pricing.php">Pricing</a></li>
<li><a href="contact.php">Contact</a></li>
<li><a href="book-tour.php">Book Tour</a></li>
</ul>
</div>
<div class="col-md-4">
<h4>Contact Us</h4>
<p>
📞 07947143174<br>
✉ spcc000@gmail.com<br>
SPCC GLOBAL<br>
Anna Nagar East,<br>
Chennai - 600102
</p>
</div>
</div>
<hr>
<p class="text-center mb-0">
© 2026 SPCC Workspaces.
All Rights Reserved.
</p>
</div>
</footer>
<!-- WhatsApp Button -->
<a href="https://wa.me/917947143174" class="whatsapp-float" target="_blank">
<i class="fab fa-whatsapp"></i>
</a>
<!-- Call Button -->
<a href="tel:079471143174" class="call-float">
<i class="fas fa-phone"></i>
</a>
<!-- Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- AOS -->
<script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
<script>
AOS.init({duration:1000,once:true});
</script>
<!-- Animated Counter -->
<script>
const counters=document.querySelectorAll('.counter');
counters.forEach(counter=>{counter.innerText='0';const updateCounter=()=>{const target=+counter.getAttribute('data-target');const c=+counter.innerText;const increment=target/100;if(c<target){counter.innerText=`${Math.ceil(c+increment)}`;setTimeout(updateCounter,20);}else{counter.innerText=target;}};updateCounter();});
</script>
<div id=\"cookie-banner\" style=\"position:fixed;bottom:0;width:100%;background:#222;color:#fff;padding:1rem;text-align:center;z-index:1000;\">We use cookies to improve your experience. <button id=\"accept-cookies\" style=\"margin-left:1rem;background:#4caf50;color:#fff;border:none;padding:0.5rem 1rem;cursor:pointer;\">Accept</button></div>
<script>
  if (localStorage.getItem('cookiesAccepted')) {
    document.getElementById('cookie-banner').style.display = 'none';
  }
  document.getElementById('accept-cookies').addEventListener('click', function() {
    localStorage.setItem('cookiesAccepted', 'true');
    document.getElementById('cookie-banner').style.display = 'none';
  });
</script>
</body>
</html>
