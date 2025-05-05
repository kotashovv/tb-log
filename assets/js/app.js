document.addEventListener('DOMContentLoaded', ()=>{
    
    const edgeSlider = new Swiper('.edge__swiper', {
        slidesPerView: 4,
        spaceBetween: 10,
        breakpoints: {
            0: {
                slidesPerView: 1.2,
            },
            560: {
                slidesPerView: 1.5,

            },
            768: {
                slidesPerView: 2.2,
            }, 
            920: {
                slidesPerView: 3.2,

            },
            1200: {
                slidesPerView: 4,
            }
        }
    })

    const transportSlider = new Swiper(".transport__swiper", {
        slidesPerView: 4,
        spaceBetween: 10,
        navigation: {
            prevEl: '.transport .swiper-prev',
            nextEl: '.transport .swiper-next'
        },
        breakpoints: {
            0: {
                slidesPerView: 1.2,
            },
            560: {
                slidesPerView: 2,

            },
            920: {
                slidesPerView: 3,
            }, 
            1200: {
                slidesPerView: 4,
            }
        }
    })

    const partSlider = new Swiper('.partners__swiper', {
        slidesPerView: 5,
        spaceBetween: 10,
        navigation: {
            prevEl: "",
            nextEl: "",
        },
        breakpoints: {
            0: {
                slidesPerView: 1.2,
            },
            420:{
                slidesPerView: 2.2,
            },
            560: {
                slidesPerView: 3.2,
            },
            920: {
                slidesPerView: 4.2,

            },
            1200: {
                slidesPerView: 5,

            }
        }
    })
})