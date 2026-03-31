<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <nav class="navbar">
  <div class="nav-container">
    <div class="logo">
      <span href="#" class="plus-icon">+</span> Health<span>Care</span>
    </div>

    <input type="checkbox" id="nav-check">
    <label for="nav-check" class="nav-btn">
      <span></span>
      <span></span>
      <span></span>
    </label>

    <ul class="nav-links">
      <li><a href="./index.html">Home</a></li>
      <li><a href="./finddoc.html">Find a Doctor</a></li>
      <li><a href="./services.html">Services</a></li>
      <li><a href="#">Patient Portal</a></li>
      <li><a href="./appoint.html" class="cta-button">Book Appointment</a></li>
    </ul>
  </div>
</nav>

<div id="hero-container" style="position: relative; width: 100%; height: 500px; background: #004a99; overflow: hidden; font-family: sans-serif;">
  
  <div class="my-slide active-slide" style="position: absolute; inset: 0; opacity: 1; transition: opacity 1s; display: flex; align-items: center; justify-content: center;">
    <img src="img/img1.jpg" alt="Doctor 1" style="position: absolute; width: 100%; height: 100%; object-fit: cover; z-index: 1;">
  </div>

  <div class="my-slide" style="position: absolute; inset: 0; opacity: 0; transition: opacity 1s; display: flex; align-items: center; justify-content: center;">
    <img src="img/img3.jpg" alt="Doctor 2" style="position: absolute; width: 100%; height: 100%; object-fit: cover; z-index: 1;">
  </div>

  <div class="my-slide" style="position: absolute; inset: 0; opacity: 0; transition: opacity 1s; display: flex; align-items: center; justify-content: center;">
    <img src="img/img1.jpg" alt="Doctor 3" style="position: absolute; width: 100%; height: 100%; object-fit: cover; z-index: 1;">
  </div>

</div>

<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,700;1,400&family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
<section class="premium-container">
    <header class="article-header">
      <span class="category-tag">Medical Excellence</span>
      <h1 class="main-title">The Art of Precision Care</h1>
      <p class="subtitle">Where advanced medical technology meets a legacy of compassionate healing.</p>
    </header>

    <div class="article-content">
      <p class="drop-cap">
        Healthcare is not just about treating a condition; it is about restoring a life. When we approach patient wellness, we aren't just following protocols; we are orchestrating a journey toward recovery with precision and empathy.
      </p>
      
      <blockquote>
        "The greatest wealth is health."
      </blockquote>

      <p>
        To achieve a premium standard, we focus on <strong>holistic recovery</strong>. By balancing world-class diagnostics with personalized attention, our facility provides an environment that is both advanced and reassuring.
      </p>
      
      <div class="action-footer">
        <a href="#" class="premium-btn">Our Medical Departments</a>
      </div>
    </div>
</section>

</section>
<section class="services-section">
  <div class="section-header">
    <h2>Our <span>Specialized Care</span> & Facilities</h2>
    <p>Providing world-class medical excellence with a touch of compassion.</p>
  </div>
<div class="card-container">
  <div class="hover-card">
    <img src="img/doctor.jpg" alt="Landscape">
    <div class="card-overlay">
      <h3>Expert Consultations</h3>
      <p>Meet our team of world-class specialists dedicated to your health.</p>
      <button class="card-btn">Meet Doctors</button>
    </div>
  </div>

  <div class="hover-card">
    <img src="img/mri machine.jpg" alt="Tech">
    <div class="card-overlay">
      <h3>Advanced Diagnostics</h3>
      <p>Utilizing state-of-the-art imaging technology for precise results.</p>
      <button class="card-btn">View Services</button>
    </div>
  </div>

  <div class="hover-card">
    <img src="img/ward.jpg" alt="Car">
    <div class="card-overlay">
      <h3>Patient Comfort</h3>
      <p>Experience recovery in our modern, serene, and fully equipped wards.</p>
      <button class="card-btn">Take a Tour</button>
    </div>
  </div>

  <div class="hover-card">
    <img src="img/xray.jpg" alt="City">
    <div class="card-overlay">
      <h3>Radiology Services</h3>
      <p>Fast and accurate digital imaging to support your treatment plan.</p>
      <button class="card-btn">Learn More</button>
    </div>
  </div>
</div>
</section>

<footer class="main-footer">
  <div class="footer-container">
    
    <div class="footer-col">
      <h2 class="footer-logo">Health<span>Care</span></h2>
      <p class="footer-about">
        Providing world-class healthcare with a focus on compassion, 
        innovation, and patient-centered excellence since 1998.
      </p>
      <div class="emergency-box">
        <span>Emergency 24/7</span>
        <a href="tel:911" class="emergency-num">000-123-4567</a>
      </div>
    </div>

    <div class="footer-col">
      <h3>Quick Links</h3>
      <ul>
        <li><a href="./finddoc.html">Find a Doctor</a></li>
        <li><a href="./services.html">Our Services</a></li>
        <li><a href="#">Book Appointment</a></li>
        <li><a href="#">Patient Portal</a></li>
      </ul>
    </div>

    <div class="footer-col">
      <h3>Departments</h3>
      <ul>
        <li><a href="./finddoc.html">Cardiology</a></li>
        <li><a href="./finddoc.html">Neurology</a></li>
      </ul>
    </div>

    <div class="footer-col">
      <h3>Visit Us</h3>
      <p>123 Medical Park Drive<br>Healthcare City, HC 56789</p>
      <p>Email: info@healthcare.com</p>
      <div class="social-links">
        <span>Follow us for health tips</span>
      </div>
    </div>

  </div>

  <div class="footer-bottom">
    <p>&copy; 2026 HealthCare Hospital. All Rights Reserved. | <a href="#">Privacy Policy</a></p>
  </div>
</footer>

<script>
  function startSlideshow() {
    const slides = document.querySelectorAll('.my-slide');
    let current = 0;

    if (slides.length === 0) {
      console.error("No slides found! Check your class names.");
      return;
    }

    setInterval(() => {
      // 1. Hide current slide
      slides[current].style.opacity = 0;
      
      // 2. Move to next (1, 2, 3, then back to 0)
      current = (current + 1) % slides.length;
      
      // 3. Show next slide
      slides[current].style.opacity = 1;
      
      console.log("Switched to slide: " + (current + 1));
    }, 4000); // 4 seconds
  }

  // Run as soon as the page is ready
  window.addEventListener('DOMContentLoaded', startSlideshow);
</script>

<script src="./script.js"></script>
</body>
</html>
