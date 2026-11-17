function openPage(link){
    window.location.href = link;
}

/* ========================================
   CARROSSEL DE PROJETOS
======================================== */

document.addEventListener('DOMContentLoaded', function () {

    const slides = document.querySelectorAll('.projeto-slide');
    const indicadores = document.querySelectorAll('.indicador');

    if (!slides.length || !indicadores.length) return;

    let slideAtual = 0;
    let intervalo;

    function mostrarSlide(indice) {

        slides[slideAtual].classList.remove('active');
        indicadores[slideAtual].classList.remove('active');

        slideAtual = indice;

        slides[slideAtual].classList.add('active');
        indicadores[slideAtual].classList.add('active');
    }

    function proximoSlide() {

        let proximo = (slideAtual + 1) % slides.length;

        mostrarSlide(proximo);
    }

    function iniciarCarrossel() {

        clearInterval(intervalo);

        intervalo = setInterval(proximoSlide, 5000);
    }

    indicadores.forEach(function (indicador) {

        indicador.addEventListener('click', function () {

            const indice = Number(this.dataset.slide);

            if (indice === slideAtual) {
                iniciarCarrossel();
                return;
            }

            mostrarSlide(indice);
            iniciarCarrossel();

        });

    });

    iniciarCarrossel();

});