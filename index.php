<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ANV Market MLM Website</title>
    <!-- Bootstrap CDN -->
     <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css">
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark">

    <div class="container">
        <a class="navbar-brand" href="#">ANVMarket</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navBar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navBar">
            <ul class="navbar-nav ms-auto">
                <li><a class="nav-link" href="#home">Home</a></li>
                <li><a class="nav-link" href="#plan">Business Plan</a></li>
                <li><a class="nav-link" href="https://anvmarket.com/login">Join Now</a></li>
                <li><a class="nav-link" href="https://anvmarket.com/signup">Member Login</a></li>
                <li><a class="nav-link" href="#products">Products</a></li>
                <li><a class="nav-link" href="#about">About Us</a></li>
                <li><a class="nav-link" href="#contact">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>

<!-- Hero Section -->
<section id="home" class="hero py-5 bg-light text-center">
    <div class="container">
        <h1>Empower Your Financial Future</h1>
        <p>Join our growing MLM network today!</p>
        <button class="btn btn-primary" onclick="location.href='https://anvmarket.com/login'">Join Now</button>
        <button class="btn btn-secondary" onclick="location.href='#plan'">Learn More</button>
    </div>
</section>

<!-- Business Opportunity (Upgraded) -->
<section class="opportunity-section text-white py-5">
  <div class="container text-center">
    <h2 class="mb-5">Why Join <span class="text-warning">ANVMarket?</span></h2>
    <div class="row g-4">
      <!-- Card 1 -->
      <div class="col-lg-3 col-md-6" data-aos="fade-up">
        <div class="opportunity-card glass-card p-4">
          <div class="icon mb-3"><i class="bi bi-cash-coin fs-1"></i></div>
          <h5>Unlimited Earnings</h5>
          <p>Earn high commissions and bonuses every day.</p>
        </div>
      </div>
      <!-- Card 2 -->
      <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
        <div class="opportunity-card glass-card p-4">
          <div class="icon mb-3"><i class="bi bi-graph-up-arrow fs-1"></i></div>
          <h5>High Returns</h5>
          <p>Grow your income with scalable rewards & team goals.</p>
        </div>
      </div>
      <!-- Card 3 -->
      <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
        <div class="opportunity-card glass-card p-4">
          <div class="icon mb-3"><i class="bi bi-clock fs-1"></i></div>
          <h5>Flexible Work Hours</h5>
          <p>Be your own boss and work from anywhere, anytime.</p>
        </div>
      </div>
      <!-- Card 4 -->
      <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
        <div class="opportunity-card glass-card p-4">
          <div class="icon mb-3"><i class="bi bi-stars fs-1"></i></div>
          <h5>Recognition & Rewards</h5>
          <p>Get badges, awards and leadership titles as you grow.</p>
        </div>
      </div>
    </div>
  </div>
</section>



<!-- Compensation Plan --><section id="plan" class="compensation-section py-5">
  <div class="container text-center">
    <h2 class="mb-5">Your <span class="text-gradient">Earning Journey</span></h2>
    <div class="row justify-content-center g-4">
      <!-- Step 1 -->
      <div class="col-md-2 col-sm-6" data-aos="zoom-in">
        <div class="comp-step-card glass p-4">
          <div class="step-icon mb-2"><i class="bi bi-person-plus-fill fs-2 text-warning"></i></div>
          <h6>Level 1</h6>
          <p>₹500<br>Per Direct</p>
        </div>
      </div>
      <!-- Step 2 -->
      <div class="col-md-2 col-sm-6" data-aos="zoom-in" data-aos-delay="100">
        <div class="comp-step-card glass p-4">
          <div class="step-icon mb-2"><i class="bi bi-people-fill fs-2 text-success"></i></div>
          <h6>Level 2</h6>
          <p>₹300<br>Team Bonus</p>
        </div>
      </div>
      <!-- Step 3 -->
      <div class="col-md-2 col-sm-6" data-aos="zoom-in" data-aos-delay="200">
        <div class="comp-step-card glass p-4">
          <div class="step-icon mb-2"><i class="bi bi-award fs-2 text-primary"></i></div>
          <h6>Level 3</h6>
          <p>₹200<br>Leadership</p>
        </div>
      </div>
      <!-- Step 4 -->
      <div class="col-md-2 col-sm-6" data-aos="zoom-in" data-aos-delay="300">
        <div class="comp-step-card glass p-4">
          <div class="step-icon mb-2"><i class="bi bi-star-fill fs-2 text-info"></i></div>
          <h6>Level 4</h6>
          <p>₹100<br>Deep Income</p>
        </div>
      </div>
      <!-- Step 5 -->
      <div class="col-md-2 col-sm-6" data-aos="zoom-in" data-aos-delay="400">
        <div class="comp-step-card glass p-4">
          <div class="step-icon mb-2"><i class="bi bi-gem fs-2 text-danger"></i></div>
          <h6>Level 5</h6>
          <p>₹50<br>Royalty</p>
        </div>
      </div>
    </div>
    <p class="mt-4 text-muted">Updated on <strong><?php echo date('d-m-Y'); ?></strong></p>
  </div>
</section>



<!-- How It Works -->
<section class="how-it-works-section py-5">
  <div class="container text-center">
    <h2 class="mb-5">How <span class="text-gradient">It Works</span></h2>
    <div class="row g-4 justify-content-center">
      <!-- Step 1 -->
      <div class="col-lg-3 col-md-6" data-aos="fade-up">
        <div class="how-modern-card">
          <div class="how-icon"><i class="bi bi-person-plus-fill"></i></div>
          <h5>Register</h5>
          <p>Sign up with referral & start your journey.</p>
        </div>
      </div>
      <!-- Step 2 -->
      <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
        <div class="how-modern-card">
          <div class="how-icon"><i class="bi bi-share-fill"></i></div>
          <h5>Invite</h5>
          <p>Share your referral link to grow network.</p>
        </div>
      </div>
      <!-- Step 3 -->
      <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
        <div class="how-modern-card">
          <div class="how-icon"><i class="bi bi-currency-rupee"></i></div>
          <h5>Earn</h5>
          <p>Get instant income from team referrals.</p>
        </div>
      </div>
      <!-- Step 4 -->
      <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
        <div class="how-modern-card">
          <div class="how-icon"><i class="bi bi-graph-up-arrow"></i></div>
          <h5>Grow</h5>
          <p>Unlock levels, bonuses, and rewards.</p>
        </div>
      </div>
    </div>
  </div>
</section>



<!-- Testimonials -->
<section class="testimonial-section py-5">
  <div class="container text-center">
    <h2 class="mb-5 gradient-title">What Our <span>Members Say</span></h2>
    <div class="row g-4">
      <!-- Testimonial 1 -->
      <div class="col-md-4" data-aos="fade-up">
        <div class="testimonial-card">
          <img src="https://randomuser.me/api/portraits/men/32.jpg" class="testimonial-img" alt="User 1">
          <h5>Rahul Sharma</h5>
          <p class="testimonial-text">"Joining ANVMarket was the best decision of my life. I earned my first ₹10,000 in just two weeks!"</p>
        </div>
      </div>
      <!-- Testimonial 2 -->
      <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
        <div class="testimonial-card">
          <img src="https://randomuser.me/api/portraits/women/44.jpg" class="testimonial-img" alt="User 2">
          <h5>Neha Rani</h5>
          <p class="testimonial-text">"The referral system is super powerful and simple. I'm now a team leader with monthly bonuses!"</p>
        </div>
      </div>
      <!-- Testimonial 3 -->
      <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
        <div class="testimonial-card">
          <img src="https://randomuser.me/api/portraits/men/51.jpg" class="testimonial-img" alt="User 3">
          <h5>Amit Das</h5>
          <p class="testimonial-text">"Excellent support and timely payouts. I highly recommend it to everyone who wants passive income."</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Statistics -->
<section class="stats-section py-5">
  <div class="container text-center">
    <h2 class="mb-5 gradient-title">Our <span>Achievements</span></h2>
    <div class="row g-4 justify-content-center">
      <!-- Stat 1 -->
      <div class="col-md-3 col-sm-6" data-aos="zoom-in-up">
        <div class="stats-card glow-effect">
          <div class="stats-circle">
            <i class="bi bi-people-fill stats-icon text-primary"></i>
          </div>
          <h3 class="counter" data-count="5000">0</h3>
          <p>Total Members</p>
        </div>
      </div>
      <!-- Stat 2 -->
      <div class="col-md-3 col-sm-6" data-aos="zoom-in-up" data-aos-delay="100">
        <div class="stats-card glow-effect">
          <div class="stats-circle">
            <i class="bi bi-currency-rupee stats-icon text-success"></i>
          </div>
          <h3 class="counter" data-count="1000000">0</h3>
          <p>Total Payouts</p>
        </div>
      </div>
      <!-- Stat 3 -->
      <div class="col-md-3 col-sm-6" data-aos="zoom-in-up" data-aos-delay="200">
        <div class="stats-card glow-effect">
          <div class="stats-circle">
            <i class="bi bi-trophy-fill stats-icon text-warning"></i>
          </div>
          <h3 class="counter" data-count="250">0</h3>
          <p>Top Earners</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- STATS SECTION END -->

<!-- FAQ SECTION START -->
<section class="faq-section py-5 bg-light">
  <div class="container">
    <h2 class="text-center mb-5 gradient-title">Frequently Asked <span>Questions</span></h2>
    <div class="accordion" id="faqAccordion">
      <!-- Question 1 -->
      <div class="accordion-item">
        <h2 class="accordion-header" id="faq1">
          <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
            How do I register with ANVMarket?
          </button>
        </h2>
        <div id="collapse1" class="accordion-collapse collapse show" aria-labelledby="faq1" data-bs-parent="#faqAccordion">
          <div class="accordion-body">
            Simply click on the "Register" button, fill out your details, and join using a referral ID.
          </div>
        </div>
      </div>
      <!-- Question 2 -->
      <div class="accordion-item">
        <h2 class="accordion-header" id="faq2">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
            How does the referral system work?
          </button>
        </h2>
        <div id="collapse2" class="accordion-collapse collapse" aria-labelledby="faq2" data-bs-parent="#faqAccordion">
          <div class="accordion-body">
            When someone joins using your referral code, you earn commission instantly and help grow your team.
          </div>
        </div>
      </div>
      <!-- Question 3 -->
      <div class="accordion-item">
        <h2 class="accordion-header" id="faq3">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
            How are payments made?
          </button>
        </h2>
        <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="faq3" data-bs-parent="#faqAccordion">
          <div class="accordion-body">
            Payouts are processed manually through UPI and bank transfers once your earnings reach the minimum threshold.
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- FAQ SECTION END -->


<!-- NEWSLETTER SECTION START -->
<section class="newsletter-section py-5">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8 text-center">
        <h2 class="gradient-title mb-3">Stay <span>Connected</span></h2>
        <p class="mb-4">Get weekly updates, business tips & exclusive MLM opportunities in your inbox.</p>
        <form class="newsletter-form d-flex flex-column flex-md-row justify-content-center align-items-center">
          <input type="email" class="form-control email-input mb-3 mb-md-0 me-md-3" placeholder="Enter your email" required>
          <button type="submit" class="subscribe-btn">Subscribe Now</button>
        </form>
      </div>
    </div>
  </div>
</section>
<!-- NEWSLETTER SECTION END -->

<!-- FOOTER SECTION START -->
<footer class="footer-section text-white py-5">
  <div class="container">
    <div class="row gy-4 align-items-start text-center text-md-start">
      <div class="col-md-4">
        <h4 class="footer-logo mb-2">ANVMarket</h4>
        <p class="small">Join India’s fast-growing MLM platform and unlock real earning potential through teamwork and opportunity.</p>
      </div>
      <div class="col-md-4">
        <h5 class="mb-3">Quick Links</h5>
        <ul class="list-unstyled">
          <li><a href="#" class="footer-link">Home</a></li>
          <li><a href="#" class="footer-link">About</a></li>
          <li><a href="#" class="footer-link">Plans</a></li>
          <li><a href="terms-privacy.php" class="footer-link">Terms & Privacy</a></li>
        </ul>
      </div>
      <div class="col-md-4">
        <h5 class="mb-3">Follow Us</h5>
        <div class="social-icons">
          <a href="#"><i class="bi bi-facebook"></i></a>
          <a href="#"><i class="bi bi-instagram"></i></a>
          <a href="#"><i class="bi bi-twitter-x"></i></a>
          <a href="#"><i class="bi bi-youtube"></i></a>
        </div>
      </div>
    </div>
    <hr class="border-light my-4">
    <p class="text-center small mb-0">&copy; 2025 ANVMarket. All rights reserved.</p>
  </div>
  <button onclick="scrollToTop()" id="scrollTopBtn" title="Go to top">↑</button>
</footer>
<!-- FOOTER SECTION END -->

<!-- JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="script.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>AOS.init();</script>

</body>
</html>
