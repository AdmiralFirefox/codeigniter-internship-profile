const fadeUpAnimate = document.querySelectorAll("#fade-up-animation");

const fadeObserver = new IntersectionObserver(
  (entries) => {
    entries.forEach((entry) => {
      const intersecting = entry.isIntersecting;
      entry.target.classList.toggle("fade-up-animate", intersecting);

      if (entry.isIntersecting) {
        fadeObserver.unobserve(entry.target);
      }
    });
  },
  {
    threshold: 0.8,
  }
);

fadeUpAnimate.forEach((element) => {
  fadeObserver.observe(element);
});
