// ✅ 1. Smooth scrolling for all nav links
// Highlight active nav link on click
document.querySelectorAll('.nav-link').forEach(link => {
    link.addEventListener('click', function () {
        document.querySelectorAll('.nav-link').forEach(nav => nav.classList.remove('active'));
        this.classList.add('active');
    });
});


// ✅ 2. Auto-scroll to top on page load
window.addEventListener('load', () => {
    window.scrollTo({ top: 0, behavior: 'smooth' });
});

// ✅ 3. Show alert on successful newsletter subscription (Handled in PHP but can enhance with JS)
const urlParams = new URLSearchParams(window.location.search);
if (urlParams.get("subscribed") === "true") {
    alert("Thank you for subscribing to our newsletter!");
}

// ✅ 4. Future: Show button when scroll reaches bottom
window.addEventListener("scroll", () => {
    const scrollTop = window.scrollY;
    const docHeight = document.body.offsetHeight;
    const winHeight = window.innerHeight;

    if (scrollTop + winHeight >= docHeight - 20) {
        console.log("You've reached the bottom!");
        // Optionally show a "Back to Top" button here
    }
});


// Counter animation
const counters = document.querySelectorAll('.counter');
const speed = 200;

counters.forEach(counter => {
  const animate = () => {
    const value = +counter.getAttribute('data-count');
    const data = +counter.innerText;
    const time = value / speed;
    if(data < value) {
      counter.innerText = Math.ceil(data + time);
      setTimeout(animate, 20);
    } else {
      counter.innerText = value.toLocaleString();
    }
  }

  const observer = new IntersectionObserver(entries => {
    if (entries[0].isIntersecting) animate();
  }, { threshold: 0.6 });

  observer.observe(counter);
});


// ✅ 5. Placeholder for Join Button Alert (optional enhancement)
const joinBtn = document.querySelector("button[onclick*='#join']");
if (joinBtn) {
    joinBtn.addEventListener("click", () => {
        console.log("Join Now clicked");
    });
}
// Scroll to Top Button
const scrollTopBtn = document.getElementById("scrollTopBtn");
window.onscroll = function() {
  scrollTopBtn.style.display = document.documentElement.scrollTop > 100 ? "block" : "none";
};
function scrollToTop() {
  window.scrollTo({ top: 0, behavior: 'smooth' });
}