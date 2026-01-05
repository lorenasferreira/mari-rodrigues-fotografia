export function initNav() {
  const menuToggle = document.querySelector(".menu-toggle");
  const navLinks = document.querySelector(".nav-links");

  menuToggle?.addEventListener("click", () => {
    navLinks.classList.toggle("open");
  });

  const langBtn = document.querySelector(".lang-current");
  const langDropdown = document.querySelector(".lang-dropdown");

  langBtn?.addEventListener("click", () => {
    langDropdown.classList.toggle("open");
  });
}
