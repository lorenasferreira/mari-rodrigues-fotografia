export function initNavScroll() {
  const header = document.querySelector(".site-header");

  if (!header) return;

  window.addEventListener("scroll", () => {
    if (window.scrollY > 80) {
      header.classList.add("is-visible");
    } else {
      header.classList.remove("is-visible");
    }
  });
}
