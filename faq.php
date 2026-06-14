<?php include 'includes/header.php'; ?>
<div class="container py-5">
  <h2 class="mb-4 text-center">Frequently Asked Questions</h2>
  <div class="accordion" id="faqAccordion">
    <div class="accordion-item">
      <h2 class="accordion-header" id="headingOne">
        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          How do I book a free tour?
        </button>
      </h2>
      <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
        <div class="accordion-body">
          Simply click the <a href="book-tour.php" class="text-primary">Book a Free Tour</a> button in the navigation bar, fill in the form and submit. Our team will contact you shortly.
        </div>
      </div>
    </div>
    <div class="accordion-item">
      <h2 class="accordion-header" id="headingTwo">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          What workspace options do you offer?
        </button>
      </h2>
      <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faqAccordion">
        <div class="accordion-body">
          <ul>
            <li>Hot Desk – shared open‑desk area</li>
            <li>Dedicated Desk – your own desk in a shared area</li>
            <li>Private Cabin – enclosed office for teams or individuals</li>
            <li>Meeting Room – bookable rooms for meetings</li>
            <li>Tour – schedule a visit to see the space in person</li>
          </ul>
        </div>
      </div>
    </div>
    <div class="accordion-item">
      <h2 class="accordion-header" id="headingThree">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          What are your opening hours?
        </button>
      </h2>
      <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#faqAccordion">
        <div class="accordion-body">
          Our coworking space is open Monday to Friday, 9:00 AM – 6:00 PM. Members have 24/7 access with a card.
        </div>
      </div>
    </div>
    <div class="accordion-item">
      <h2 class="accordion-header" id="headingFour">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
          Do you provide high‑speed internet?
        </button>
      </h2>
      <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#faqAccordion">
        <div class="accordion-body">
          Yes! All workstations have high‑speed, secure Wi‑Fi (minimum 100 Mbps) and wired Ethernet where needed.
        </div>
      </div>
    </div>
  </div>
</div>
<?php include 'includes/footer.php'; ?>
