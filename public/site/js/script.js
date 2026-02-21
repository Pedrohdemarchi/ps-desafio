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