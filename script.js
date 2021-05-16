const toggleButton = document.getElementsByClassName('toggle-button')[0]
const navbarLinks = document.getElementsByClassName('navibar-links')[0]

toggleButton.addEventListener('click', () => {
    navbarLinks.classList.toggle('active')
});

//Typing animation script

var typed = new Typed(".typing",{
    strings: ["Welcome to my webpage", "I'm Bedru", "Enjoy your visit!"],
    typeSpeed: 100,
    backSpeed: 60,
    loop: true

});