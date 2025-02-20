document.addEventListener("DOMContentLoaded", () => {
  const sidebar = document.getElementById("sidebar");
  const sidebarToggle = document.getElementById("sidebarToggle");
  const darkModeToggle = document.getElementById("darkModeToggle");
  const body = document.body;

  // Sidebar Toggle Functionality
  if (sidebarToggle) {
    sidebarToggle.addEventListener("click", () => {
      sidebar.classList.toggle("active"); // Toggle active class on sidebar
      document.querySelector(".main-content").classList.toggle("sidebar-active"); // Adjust main content margin
    });
  }

  // Dark Mode Toggle Functionality
  if (darkModeToggle) {
    darkModeToggle.addEventListener("click", () => {
      body.classList.toggle("dark-mode"); // Toggle dark mode class on body
      localStorage.setItem("darkMode", body.classList.contains("dark-mode")); // Save preference to localStorage
      updateDarkModeIcon(); // Update the icon (moon/sun)
    });

    // Check for saved dark mode preference in localStorage
    if (localStorage.getItem("darkMode") === "true") {
      body.classList.add("dark-mode");
    }
    updateDarkModeIcon(); // Initialize the icon based on saved preference
  }

  // Submenu Toggle Functionality
  const submenuToggles = document.querySelectorAll(".sidebar-link");
  let currentlyOpenSubmenu = null; // Track the currently open submenu

  submenuToggles.forEach((toggle) => {
    toggle.addEventListener("click", function (e) {
      const submenu = this.nextElementSibling; // Get the next sibling (submenu)

      // If the clicked link has a submenu
      if (submenu && submenu.classList.contains("sidebar-submenu")) {
        e.preventDefault(); // Prevent default link behavior

        // Close the currently open submenu (if any)
        if (currentlyOpenSubmenu && currentlyOpenSubmenu !== submenu) {
          currentlyOpenSubmenu.classList.remove("active");
          currentlyOpenSubmenu.previousElementSibling.classList.remove("active");
        }

        // Toggle the clicked submenu
        const isActive = submenu.classList.toggle("active");
        this.classList.toggle("active");

        // Update the currently open submenu reference
        currentlyOpenSubmenu = isActive ? submenu : null;
      }
    });
  });

  // Set Active Menu Item Based on Current Page
  const currentPage = window.location.pathname;
  const menuItems = document.querySelectorAll(".sidebar-link");
  menuItems.forEach((item) => {
    if (item.getAttribute("href") === currentPage) {
      item.classList.add("active"); // Add active class to current page link
      const parentSubmenu = item.closest(".sidebar-submenu");
      if (parentSubmenu) {
        parentSubmenu.classList.add("active"); // Expand parent submenu
        parentSubmenu.previousElementSibling.classList.add("active"); // Highlight parent link
      }
    }
  });

  // Function to Update Dark Mode Icon
  function updateDarkModeIcon() {
    const icon = darkModeToggle.querySelector("i");
    if (body.classList.contains("dark-mode")) {
      icon.classList.remove("fa-moon");
      icon.classList.add("fa-sun");
    } else {
      icon.classList.remove("fa-sun");
      icon.classList.add("fa-moon");
    }
  }
});
