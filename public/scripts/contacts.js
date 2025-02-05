const contactForm = document.querySelector("#contactForm");
const submitButton = document.querySelector("#submitButton");

contactForm.addEventListener("submit", () => {
  submitButton.textContent = "Submitting...";
  submitButton.disabled = true;
});
