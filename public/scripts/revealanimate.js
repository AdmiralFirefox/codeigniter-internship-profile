const revealOpacityAnimate = document.querySelectorAll(
  "#reveal-opacity-animation"
);
const revealAnimate = document.querySelectorAll("#reveal-animation");

// Reveal Opacity Animation
const revealOpacityObserver = new IntersectionObserver(
  (entries) => {
    entries.forEach((entry) => {
      const intersecting = entry.isIntersecting;
      entry.target.classList.toggle("reveal-opacity-animate", intersecting);

      if (entry.isIntersecting) {
        revealOpacityObserver.unobserve(entry.target);
      }
    });
  },
  {
    threshold: 0.8,
  }
);

revealOpacityAnimate.forEach((element) => {
  revealOpacityObserver.observe(element);
});

// Reveal Animation
const revealObserver = new IntersectionObserver(
  (entries) => {
    entries.forEach((entry) => {
      const intersecting = entry.isIntersecting;
      entry.target.classList.toggle("reveal-animate", intersecting);

      if (entry.isIntersecting) {
        revealObserver.unobserve(entry.target);
      }
    });
  },
  {
    threshold: 0.8,
  }
);

revealAnimate.forEach((element) => {
  revealObserver.observe(element);
});
