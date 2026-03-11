function openPage(link){
    window.location.href = link;
}

document.addEventListener("DOMContentLoaded", function() {

    UnicornStudio.init();

});

window.addEventListener("scroll", function() {
    const header = document.querySelector(".header");

    if (window.scrollY > 850) {
        header.classList.add("scrolled");
    } else {
        header.classList.remove("scrolled");
    }
});

document.addEventListener("DOMContentLoaded", function() {

    const menuItems = document.querySelectorAll(".b1 .menu-item");
    const dropdown = document.querySelector(".dropdown");

    const layerA = document.getElementById("layerA");
    const layerB = document.getElementById("layerB");

    const imageA = document.getElementById("imageA");
    const imageB = document.getElementById("imageB");

    let activeLayer = 0;
    let activeImage = 0;

    const layers = [layerA, layerB];
    const images = [imageA, imageB];

    const showcases = JSON.parse(
        document.getElementById("showcases-data").dataset.showcases
    );

    function updateB2(index){

        const showcase = showcases[index];

        const current = layers[activeLayer];
        const next = layers[1 - activeLayer];

        const currentImg = images[activeImage];
        const nextImg = images[1 - activeImage];

        // monta novo conteúdo
        next.innerHTML = `
            <a href="#" class="title-b2">${showcase.subtitle_showcase}</a>

            <a href="#" class="description-drop">
                ${showcase.subdescription_showcase}
            </a>

            <div class="tag_block">

                <div class="tag_blockL">
                    ${showcase.tag_showcase
                        .slice(0,3)
                        .map(tag => `<a href="#">${tag}</a>`)
                        .join("")}
                </div>

                <div class="tag_blockR">
                    ${showcase.tag_showcase
                        .slice(3,6)
                        .map(tag => `<a href="#">${tag}</a>`)
                        .join("")}
                </div>

            </div>
        `;

        nextImg.src = "/storage/" + showcase.image_showcase;

        current.classList.remove("active");
        next.classList.add("active");

        currentImg.classList.remove("active");
        nextImg.classList.add("active");

        activeLayer = 1 - activeLayer;
        activeImage = 1 - activeImage;
    }

    menuItems.forEach((item, index) => {
        item.addEventListener("click", (e) => {

            e.preventDefault();

            updateB2(index);

            menuItems.forEach(i => i.classList.remove("active"));
            item.classList.add("active");

        });
    });

    // 🔧 CORREÇÃO DO DELAY AO FECHAR DROPDOWN
    dropdown.addEventListener("mouseleave", () => {

        layers.forEach(layer => {
            layer.style.transition = "none";
        });

        images.forEach(img => {
            img.style.transition = "none";
        });

        // força reflow e reativa animação
        setTimeout(() => {
            layers.forEach(layer => {
                layer.style.transition = "";
            });

            images.forEach(img => {
                img.style.transition = "";
            });
        }, 10);

    });

});