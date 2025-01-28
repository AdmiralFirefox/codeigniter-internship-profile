const initialTextAnimation = document.querySelector("#initialTextAnimation");

function removeElement() {
  initialTextAnimation.classList.add("removed");

  document.getElementsByTagName("body")[0].style.overflowY = "scroll";
}

initialTextAnimation.addEventListener("transitionend", () => {
  initialTextAnimation.remove();
});

setTimeout(removeElement, 2800);

const parallaxEffect = () => {
  const rellax = new Rellax(".hero-title", {
    speed: -6,
    center: false,
    wrapper: null,
    round: true,
    vertical: true,
    horizontal: false,
  });

  return rellax;
};

parallaxEffect();
