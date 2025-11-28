// Slider
document.addEventListener("DOMContentLoaded", function () {
  const swiper = new Swiper(".swiper", {
    direction: "horizontal",
    loop: true,
    speed: 800,
    autoplay: {
      delay: 5000,
    },
    //  pagination: {
    //    el: ".swiper-pagination",
    //    clickable: true,
    //  },
    navigation: {
      nextEl: ".slider-arrow.right",
      prevEl: ".slider-arrow.left",
    },
  });
});

// Simple form validation for contact us
document.addEventListener("DOMContentLoaded", function () {
  const form = document.querySelector(".wpcf7-form");

  form.addEventListener("submit", function (e) {
    let isValid = true;
    const requiredFields = form.querySelectorAll('[aria-required="true"]');

    requiredFields.forEach((field) => {
      if (!field.value.trim()) {
        isValid = false;
        field.style.borderColor = "red";
      } else {
        field.style.borderColor = "";
      }
    });

    if (!isValid) {
      e.preventDefault();
      alert("Please fill in all required fields.");
    }
  });
});

// Simple animation for stats counting
document.addEventListener("DOMContentLoaded", function () {
  const statNumbers = document.querySelectorAll(".stat-number");
  const statsSection = document.querySelector(".stats-bar");

  const options = {
    root: null,
    rootMargin: "0px",
    threshold: 0.5,
  };

  const observer = new IntersectionObserver(function (entries, observer) {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        statNumbers.forEach((stat) => {
          const target = parseInt(stat.textContent);
          let count = 0;
          const duration = 2000; // 2 seconds
          const increment = target / (duration / 20);

          const updateCount = () => {
            if (count < target) {
              count += increment;
              stat.textContent =
                Math.round(count) +
                (stat.textContent.includes("%") ? "%" : "+");
              setTimeout(updateCount, 20);
            } else {
              stat.textContent =
                target + (stat.textContent.includes("%") ? "%" : "+");
            }
          };

          updateCount();
        });
        observer.unobserve(entry.target);
      }
    });
  }, options);

  observer.observe(statsSection);
});

// responsive
// Display current screen width for testing
function updateScreenSize() {
  const width = window.innerWidth;
  document.getElementById("widthSize").textContent = `${width}px`;
}

// Initial call and event listener
updateScreenSize();
window.addEventListener("resize", updateScreenSize);

// nav bar
(function () {
  var btn = document.querySelector(".navbar .navbar-toggler");
  var target = document.getElementById("navbarNav");
  if (!btn || !target) return;

  btn.addEventListener("click", function () {
    // If Bootstrap hasn't attached a Collapse instance, toggle manually.
    if (!window.bootstrap || !bootstrap.Collapse.getInstance(target)) {
      target.classList.toggle("show");
    }
  });
})();



// testimonial from demo
document.addEventListener("DOMContentLoaded", function () {
  const testimonials = document.querySelectorAll(".testimonial-card");
  const dots = document.querySelectorAll(".dot");
  const prevBtn = document.querySelector(".prev");
  const nextBtn = document.querySelector(".next");
  let currentIndex = 0;
  const totalTestimonials = testimonials.length;

  // Function to update the carousel display
  function updateCarousel() {
    // Hide all testimonials
    testimonials.forEach((testimonial) => {
      testimonial.classList.remove("active");
    });

    // Show the current testimonial
    testimonials[currentIndex].classList.add("active");

    // Update dots
    dots.forEach((dot) => dot.classList.remove("active"));
    dots[currentIndex].classList.add("active");
  }

  // Next button event listener
  nextBtn.addEventListener("click", function () {
    currentIndex = (currentIndex + 1) % totalTestimonials;
    updateCarousel();
  });

  // Previous button event listener
  prevBtn.addEventListener("click", function () {
    currentIndex = (currentIndex - 1 + totalTestimonials) % totalTestimonials;
    updateCarousel();
  });

  // Dot navigation event listeners
  dots.forEach((dot) => {
    dot.addEventListener("click", function () {
      currentIndex = parseInt(this.getAttribute("data-index"));
      updateCarousel();
    });
  });

  // Auto-rotate the carousel every 5 seconds
  setInterval(function () {
    currentIndex = (currentIndex + 1) % totalTestimonials;
    updateCarousel();
  }, 5000);
});

// quality policy added new  // Carousel functionality with conflict prevention
// Carousel functionality with conflict prevention
document.addEventListener("DOMContentLoaded", function () {
  // Use a more specific selector to avoid conflicts
  const carousel = document.querySelector(".what-we-offer .owl-carousel");
  if (!carousel) {
    console.error("Carousel element not found");
    return;
  }

  // Get the correct elements based on your HTML structure
  const stage = carousel.querySelector(".owl-stage");
  const items = carousel.querySelectorAll(".owl-item");
  const prevBtn = carousel.querySelector(".owl-prev");
  const nextBtn = carousel.querySelector(".owl-next");
  const dots = document.querySelectorAll(".dots-custom .owl-dot");

  if (!stage || items.length === 0) {
    console.error("Carousel elements not properly initialized");
    return;
  }

  let currentIndex = 0;
  const itemCount = items.length;
  let itemsToShow =
    window.innerWidth < 768 ? 1 : window.innerWidth < 992 ? 4 : 5;
    

  // Set initial width for items based on items to show
  function setItemWidth() {
    itemsToShow = window.innerWidth < 768 ? 1 : window.innerWidth < 992 ? 4 : 5;
    items.forEach((item) => {
      item.style.width = `${100 / itemsToShow}%`;
    });
    updateCarousel();
  }

  function updateCarousel() {
    const translateValue = -currentIndex * (100 / itemsToShow) + "%";
    stage.style.transform = `translate3d(${translateValue}, 0px, 0px)`;

    // Update dots
    const activeDot = Math.floor(currentIndex / itemsToShow);
    if (dots.length > 0) {
      dots.forEach((dot, index) => {
        dot.classList.toggle("active", index === activeDot);
      });
    }

    // Update button states
    if (prevBtn) {
      prevBtn.classList.toggle("disabled", currentIndex === 0);
    }
    if (nextBtn) {
      nextBtn.classList.toggle(
        "disabled",
        currentIndex >= itemCount - itemsToShow
      );
    }
  }

  // Event listeners for navigation
  if (nextBtn) {
    nextBtn.addEventListener("click", function () {
      if (currentIndex < itemCount - itemsToShow) {
        currentIndex += itemsToShow;
        updateCarousel();
      }
    });
  }

  if (prevBtn) {
    prevBtn.addEventListener("click", function () {
      if (currentIndex > 0) {
        currentIndex -= itemsToShow;
        updateCarousel();
      }
    });
  }

  // Event listeners for dots
  if (dots.length > 0) {
    dots.forEach((dot, index) => {
      dot.addEventListener("click", function () {
        currentIndex = index * itemsToShow;
        updateCarousel();
      });
    });
  }

  // Auto play functionality
  const autoplayInterval = setInterval(function () {
    if (currentIndex < itemCount - itemsToShow) {
      currentIndex += itemsToShow;
    } else {
      currentIndex = 0;
    }
    updateCarousel();
  }, 4000);

  // Initialize carousel
  setItemWidth();

  // Responsive behavior
  window.addEventListener("resize", setItemWidth);

  // Clean up on page unload
  window.addEventListener("beforeunload", function () {
    clearInterval(autoplayInterval);
  });
});

// Add this at the beginning of your carousel script
console.log("Carousel script loaded");
console.log(
  "Carousel element:",
  document.querySelector(".what-we-offer .owl-carousel")
);
console.log(
  "Stage element:",
  document.querySelector(".what-we-offer .owl-carousel .owl-stage")
);
console.log(
  "Items found:",
  document.querySelectorAll(".what-we-offer .owl-carousel .owl-item").length
);
console.log(
  "Prev button:",
  document.querySelector(".what-we-offer .owl-carousel .owl-prev")
);
console.log(
  "Next button:",
  document.querySelector(".what-we-offer .owl-carousel .owl-next")
);
console.log(
  "Dots found:",
  document.querySelectorAll(".dots-custom .owl-dot").length
);

// mobile navbar button
document.addEventListener("DOMContentLoaded", function () {
  const closeBtn = document.getElementById("closeNavbar");
  const navbarCollapse = document.getElementById("navbarNav");

  closeBtn.addEventListener("click", function () {
    // Bootstrap's Collapse API
    const bsCollapse = bootstrap.Collapse.getInstance(navbarCollapse);
    if (bsCollapse) {
      bsCollapse.hide();
    }
  });
});

// new for vision mission




