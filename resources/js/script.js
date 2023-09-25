const swiper = new Swiper('.sample-slider', {
    effect: "cards",    //added
    grabCursor: true,   //added
    pagination: {
        el: '.swiper-pagination',
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    loop: true,
    autoplay: {
        delay: 1,
        pauseOnMouseEnter: true,        // added
        disableOnInteraction: false,    // added
    },
    speed: 3000,
    }
)


// Ottieni il riferimento agli elementi con gli ID
const buttonEdit = document.getElementById('button-edit');
const formEdit = document.getElementById('form-edit');

// Aggiungi un gestore di eventi al click sul bottone
buttonEdit.addEventListener('click', function() {
    // Verifica lo stato corrente del contenitore
    if (formEdit.style.display === 'none' || formEdit.style.display === '') {
        // Se è nascosto, mostra il contenitore
        formEdit.style.display = 'block';
    } else {
        // Altrimenti, nascondi il contenitore
        formEdit.style.display = 'none';
    }
});



