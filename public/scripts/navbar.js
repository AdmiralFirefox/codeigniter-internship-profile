const navIcon = document.querySelector("#check");
const mobileNavbar = document.querySelector("#mobile-navbar");
const webLogo = document.querySelector("#weblogo");
const navbarOverlay = document.querySelector("#navbar-overlay");

// Toggle Navbar
const toggleNavbar = () => {
  mobileNavbar.classList.toggle("navbar-active");
  navbarOverlay.classList.toggle("navbar-overlay-active");

  if (!mobileNavbar.classList.contains("navbar-active")) {
    document.getElementsByTagName("body")[0].style.overflow = "unset";

    navIcon.checked = false;
  } else {
    document.getElementsByTagName("body")[0].style.overflow = "hidden";

    // Web Logo
    // webLogo.addEventListener("click", () => {
    //   document.getElementsByTagName("body")[0].style.overflow = "unset";

    //   mobileNavbar.classList.remove("navbar-active");
    //   navbarOverlay.classList.remove("navbar-overlay-active");

    //   navIcon.checked = false;
    // });
  }
};

navIcon.addEventListener("click", toggleNavbar);

// Navbar Links
// for (const child of mobileNavbar.children) {
//   child.addEventListener("click", toggleNavbar);
// }

// Navbar Overlay
navbarOverlay.addEventListener("click", toggleNavbar);