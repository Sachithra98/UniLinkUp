const body = document.querySelector("body");
const darkLight = document.querySelector("#darkLight");
const sidebar = document.querySelector(".sidebar");
const submenuItems = document.querySelectorAll(".submenu_item");
const sidebarOpen = document.querySelector("#sidebarOpen");
const sidebarClose = document.querySelector(".collapse_sidebar");
const sidebarExpand = document.querySelector(".expand_sidebar");

// Function to toggle sidebar visibility
function toggleSidebar() {
  sidebar.classList.toggle("close");
  if (sidebar.classList.contains("close")) {
    sidebar.classList.add("hoverable");
  } else {
    sidebar.classList.remove("hoverable");
  }
}

// Event listener for opening and closing the sidebar
sidebarOpen.addEventListener("click", toggleSidebar);
sidebarClose.addEventListener("click", toggleSidebar);
sidebarExpand.addEventListener("click", toggleSidebar);

// Event listener for submenu items
submenuItems.forEach((item, index) => {
  item.addEventListener("click", () => {
    item.classList.toggle("show_submenu");
    submenuItems.forEach((item2, index2) => {
      if (index !== index2) {
        item2.classList.remove("show_submenu");
      }
    });
  });
});

// Initially, hide the sidebar
sidebar.classList.add("close", "hoverable"); // Default to closed and hoverable state
sidebarExpand.style.display = "block"; // Show the expand button

// Event listener for window resize
window.addEventListener("resize", () => {
  if (window.innerWidth < 768) {
    sidebar.classList.add("close", "hoverable");
    sidebarExpand.style.display = "block";
  } else {
    sidebar.classList.remove("close", "hoverable");
    sidebarExpand.style.display = "none";
  }
});


sidebarClose.addEventListener("click", () => {
  sidebar.classList.add("close", "hoverable");
});
sidebarExpand.addEventListener("click", () => {
  sidebar.classList.remove("close", "hoverable");
});

sidebar.addEventListener("mouseenter", () => {
  if (sidebar.classList.contains("hoverable")) {
    sidebar.classList.remove("close");
  }
});
sidebar.addEventListener("mouseleave", () => {
  if (sidebar.classList.contains("hoverable")) {
    sidebar.classList.add("close");
  }
});


