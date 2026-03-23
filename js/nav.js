window.addEventListener("DOMContentLoaded", () => {
  const nav = document.querySelector(".nav");
  const shadow = document.querySelector(".shadow");

  shadow.style.opacity = 0;

  setTimeout(() => {
    shadow.style.transition = "opacity 1s ease";
    shadow.style.opacity = 1;
    nav.classList.add("show");
  }, 500);
});
