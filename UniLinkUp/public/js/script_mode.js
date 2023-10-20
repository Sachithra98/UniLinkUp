const darkLightToggle = document.querySelector("#darkLight");
const body = document.body;

darkLightToggle.addEventListener("change", () => {
  if (darkLightToggle.checked) {
    body.classList.add("dark");
    // Additional logic for enabling dark mode
  } else {
    body.classList.remove("dark");
    // Additional logic for enabling light mode
  }
});


// Set the initial mode based on user preferences or a default mode
const initialMode = "light"; // or "dark"
const lightModeLink = document.getElementById("light-mode");
const darkModeLink = document.getElementById("dark-mode");

if (initialMode === "dark") {
  darkModeLink.removeAttribute("disabled");
  lightModeLink.setAttribute("disabled", true);
  body.classList.add("dark");
}
