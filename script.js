//scroll to about me section
$(document).ready(function () {
  $(".js--scroll-to-aboutme").click(function () {
    $("html, body").animate(
      { scrollTop: $(".js--section-aboutme").offset().top },
      1000
    );
  });

  const toggleButton = document.getElementsByClassName("toggle-button")[0];
  const navbarLinks = document.getElementsByClassName("navibar-links")[0];

  toggleButton.addEventListener("click", () => {
    navbarLinks.classList.toggle("active");
  });

  //Typing animation script

  var typed = new Typed(".typing", {
    strings: ["WELCOME TO MY WEBSITE", "I'm Bedru", "Enjoy your visit!"],
    typeSpeed: 13,
    backSpeed: 120,
    loop: true,
  });
});
