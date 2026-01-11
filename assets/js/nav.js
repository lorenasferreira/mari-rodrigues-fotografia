export function initNav() {
  const menuToggle = document.querySelector(".menu-toggle");
  const navLinks = document.querySelector(".nav-links");

  const langBtn = document.querySelector(".lang-current");
  const langDropdown = document.querySelector(".lang-dropdown");

  menuToggle?.addEventListener("click", (e) => {
    e.stopPropagation();

    langDropdown?.classList.remove("open");

    navLinks.classList.toggle("open");
  });

  langBtn?.addEventListener("click", (e) => {
    e.stopPropagation();

    navLinks?.classList.remove("open");

    langDropdown.classList.toggle("open");
  });

  document.addEventListener("click", (e) => {
    const clickedInsideMenu =
      navLinks?.contains(e.target) || menuToggle?.contains(e.target);

    const clickedInsideLang =
      langDropdown?.contains(e.target) || langBtn?.contains(e.target);

    if (!clickedInsideMenu) {
      navLinks?.classList.remove("open");
    }

    if (!clickedInsideLang) {
      langDropdown?.classList.remove("open");
    }
  });

  navLinks?.querySelectorAll("a").forEach((link) => {
    link.addEventListener("click", () => {
      navLinks.classList.remove("open");
    });
  });
}
