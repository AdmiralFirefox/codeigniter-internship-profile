const titleSlide = document.querySelectorAll("#title-slide");

const slideObserver = new IntersectionObserver(
  (entries) => {
    entries.forEach((entry) => {
      const intersecting = entry.isIntersecting;
      entry.target.classList.toggle("title-slide", intersecting);

      if (entry.isIntersecting) {
        slideObserver.unobserve(entry.target);
      }
    });
  },
  {
    threshold: 0.8,
  }
);

titleSlide.forEach((element) => {
  slideObserver.observe(element);
});
