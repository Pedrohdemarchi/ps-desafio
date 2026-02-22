function openPage(link){
    window.location.href = link;
}

window.addEventListener("scroll", function() {
    const header = document.querySelector(".header");

    if (window.scrollY > 850) {
        header.classList.add("scrolled");
    } else {
        header.classList.remove("scrolled");
    }
});

document.addEventListener("DOMContentLoaded", function () {

    const sections = document.querySelectorAll(".card-showcase");
    const navLinks = document.querySelectorAll(".nav-item");

    function activateLink() {
        let scrollY = window.scrollY + 150;

        sections.forEach((section, index) => {
            const sectionTop = section.offsetTop;
            const sectionHeight = section.offsetHeight;

            if (scrollY >= sectionTop && scrollY < sectionTop + sectionHeight) {
                navLinks.forEach(link => link.classList.remove("active"));
                navLinks[index].classList.add("active");
            }
        });
    }

    window.addEventListener("scroll", activateLink);
});