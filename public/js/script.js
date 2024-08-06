$(document).ready(function () {
  // Load home page by default
  loadPage("home");

  // Handle navigation clicks
  $("a[data-page]").on("click", function (e) {
    e.preventDefault();
    let page = $(this).data("page");
    loadPage(page);
  });

  function loadPage(page) {
    $.ajax({
      url: "../src/pages/" + page + ".php",
      method: "GET",
      success: function (response) {
        $("#main-content").html(response);

        // Set the title based on the page name
        let pageTitle = page.charAt(0).toUpperCase() + page.slice(1);
        document.title = pageTitle + " - Sunbelt Computer Software";
        if (page === "services" && isDark) {
          applyServiceImages();
        }
      },
      error: function () {
        $("#main-content").html("<p>Error loading content.</p>");
      },
    });
  }

  // Initialize dark mode
  let isDark = localStorage.getItem("isDark") || "false";
  if (isDark === "false") {
    isDark = false;
  } else {
    isDark = true;
    $("body").addClass("dark-mode");
    $(".form-check-input").prop("checked", true);
  }

  //  Toggle dark mode event handler
  $("#darkModeSwitch").on("change", function () {
    applyDarkMode();
  });

  function applyDarkMode() {
    isDark = !isDark; // Toggle the dark mode state
    localStorage.setItem("isDark", isDark);
    $("body").toggleClass("dark-mode", isDark);
    applyServiceImages();
  }

  // Apply styling to images on services page
    function applyServiceImages() {
    let serviceImages = $(".service-image");
    let isMixClass = $(".service-image").hasClass("mix");
    serviceImages.each(function () {
      if (isDark && isMixClass) {
        $(this).removeClass("mix");
      } else {
        $(this).addClass("mix");
      }
    });
  }
});
