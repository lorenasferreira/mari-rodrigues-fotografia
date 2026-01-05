import { initNav } from "./nav.js";
import { initHeroRotator } from "./hero/hero-rotator.js";
import { initPackagesCarousel } from "./packages.js";

document.addEventListener("DOMContentLoaded", () => {
  initNav();
  initHeroRotator();
  initPackagesCarousel();
});
