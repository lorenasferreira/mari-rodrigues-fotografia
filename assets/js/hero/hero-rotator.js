export function initHeroRotator() {
  const heroImage = document.querySelector(".hero-image");
  const dotsContainer = document.querySelector(".hero-dots");
  const prevBtn = document.querySelector(".hero-arrow.prev");
  const nextBtn = document.querySelector(".hero-arrow.next");

  if (!heroImage) return;

  const mobileQuery = window.matchMedia("(max-width: 768px)");

  function getImages() {
    return mobileQuery.matches
      ? [
          "./assets/images/hero-mobile/hero-01.jpg",
          "./assets/images/hero-mobile/hero-02.jpg",
          "./assets/images/hero-mobile/hero-03.jpg",
          "./assets/images/hero-mobile/hero-04.jpg",
          "./assets/images/hero-mobile/hero-05.jpg",
          "./assets/images/hero-mobile/hero-06.jpg",
          "./assets/images/hero-mobile/hero-07.jpg",
        ]
      : [
          "./assets/images/hero-desktop/hero-01.jpg",
          "./assets/images/hero-desktop/hero-02.jpg",
          "./assets/images/hero-desktop/hero-03.jpg",
          "./assets/images/hero-desktop/hero-04.jpg",
          "./assets/images/hero-desktop/hero-05.jpg",
          "./assets/images/hero-desktop/hero-06.jpg",
        ];
  }

  let images = getImages();
  let currentIndex = 0;
  let intervalId;

  function updateHero() {
    heroImage.src = images[currentIndex];
    document.querySelectorAll(".hero-dot").forEach((dot, index) => {
      dot.classList.toggle("active", index === currentIndex);
    });
  }

  function createDots() {
    if (!dotsContainer) return;
    dotsContainer.innerHTML = "";

    images.forEach((_, index) => {
      const dot = document.createElement("span");
      dot.classList.add("hero-dot");
      dot.classList.toggle("active", index === currentIndex);

      dot.addEventListener("pointerup", () => {
        currentIndex = index;
        updateHero();
        resetAutoplay();
      });

      dotsContainer.appendChild(dot);
    });
  }

  function nextSlide() {
    currentIndex = (currentIndex + 1) % images.length;
    updateHero();
  }

  function prevSlide() {
    currentIndex = (currentIndex - 1 + images.length) % images.length;
    updateHero();
  }

  function startAutoplay() {
    intervalId = setInterval(nextSlide, 5000);
  }

  function resetAutoplay() {
    clearInterval(intervalId);
    startAutoplay();
  }

  nextBtn?.addEventListener("pointerup", () => {
    nextSlide();
    resetAutoplay();
  });

  prevBtn?.addEventListener("pointerup", () => {
    prevSlide();
    resetAutoplay();
  });

  mobileQuery.addEventListener("change", () => {
    images = getImages();
    currentIndex = 0;
    heroImage.src = images[0];
    createDots();
    resetAutoplay();
  });

  heroImage.src = images[0];
  createDots();
  startAutoplay();
}
