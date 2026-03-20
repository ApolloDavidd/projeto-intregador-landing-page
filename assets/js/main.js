document.addEventListener("DOMContentLoaded", () => {
    
    const menuLinks = document.querySelectorAll(".nav-link");
    const navCollapse = document.getElementById("menuMobile");

    menuLinks.forEach(link => {
        link.addEventListener("click", () => {
            if (navCollapse.classList.contains("show")) {
                const bsCollapse = new bootstrap.Collapse(navCollapse, { toggle: false });
                bsCollapse.hide();
            }
        });
    });

    const navbar = document.getElementById("menu-principal");
    
    window.addEventListener("scroll", () => {
        if (window.scrollY > 50) {
            navbar.classList.add("shadow");
            navbar.classList.remove("shadow-sm");
        } else {
            navbar.classList.add("shadow-sm");
            navbar.classList.remove("shadow");
        }
    });

});