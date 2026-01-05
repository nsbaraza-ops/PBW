const menuBar = document.querySelector(".menu-bar");
const menuNav = document.querySelector(".menu-navigation");

menuBar.addEventListener("click", function(){
 menuNav.classList.toggle("menu-active");
});

// Tutup menu saat link diklik  
const navLinks = document.querySelectorAll(".menu-navigation ul li a");
navLinks.forEach(link => {
    link.addEventListener('click', () => {
        // Hanya tutup jika menu sedang aktif
        if (menuNav.classList.contains('menu-active')) {
            menuNav.classList.remove('menu-active');
        }
    });
});