export function initPackagesCarousel() {
  const track = document.querySelector('.packages-track');
  const prev = document.querySelector('.carousel-arrow.prev');
  const next = document.querySelector('.carousel-arrow.next');

  // se não estiver na página de packages, sai silenciosamente
  if (!track || !prev || !next) return;

  const scrollAmount = track.querySelector('.package-card')?.offsetWidth || 360;

  next.addEventListener('click', () => {
    track.scrollBy({
      left: scrollAmount,
      behavior: 'smooth'
    });
  });

  prev.addEventListener('click', () => {
    track.scrollBy({
      left: -scrollAmount,
      behavior: 'smooth'
    });
  });
}
