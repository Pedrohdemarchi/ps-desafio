let count = 1;
document.getElementById("radio1").checked = true ;

setInterval(function(){
    nextImage();
},5000)

function nextImage(){
    count++;
    if(count>3){
        count=1;
    }

    document.getElementById("radio"+count).checked = true ;
}

function openPage(link){
window.open(link, "_blank").focus();
}

const cards = document.querySelectorAll('.each-product')
const janela = document.querySelectorAll('.janela-modal')
for(card of cards){
    card.addEventListener('click', function(e){
        var cardId = "janela-modal"+this.id
        var idNumber = this.id
        janela.forEach(e => {
            if(e.id == cardId){
                e.classList.add('abrir')
                var id ="fechar" + idNumber
                document.getElementById(id).addEventListener('click', () => {
                    e.classList.remove('abrir')
                })
            }
        });
    })
}

