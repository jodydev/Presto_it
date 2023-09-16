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
})

