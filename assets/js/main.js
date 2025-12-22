import { initNavScroll } from "./nav/nav-scroll.js";
import { initHeroRotator } from "./hero/hero-rotator.js";

initHeroRotator();

document.addEventListener("DOMContentLoaded", () => {
  initNavScroll();
  initHeroRotator();
});
