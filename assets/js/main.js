import { initNav } from "./nav.js";
import { initHeroRotator } from "./hero/hero-rotator.js";
import { initPackagesCarousel } from "./packages.js";
import { initContactForm } from "./contact.js";

document.addEventListener("DOMContentLoaded", () => {
  initNav();
  initHeroRotator();
  initPackagesCarousel();
  initContactForm();
});
