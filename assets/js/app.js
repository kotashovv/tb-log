document.addEventListener('DOMContentLoaded', () => {

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
            430: {
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


    const docsSlider = new Swiper('.docs__slider-swiper', {
        slidesPerView: 4,
        spaceBetween: 20,
        navigation: {
            prevEl: ".docs__navigation .prev-el",
            nextEl: ".docs__navigation .next-el",
        },
        breakpoints: {
            0: {
                slidesPerView: 1.2,
            },
            430: {
                slidesPerView: 2.2,
            },
            560: {
                slidesPerView: 3.2,
            },
            920: {
                slidesPerView: 4,
            },

        }
    })

    Fancybox.bind("[data-fancybox]", {
        // Your custom options
    });


    const faqBtns = document.querySelectorAll('.faq-q');
    if (faqBtns.length != 0) {
        faqBtns.forEach(item=>{
            item.addEventListener('click', (e)=>{   

                if (!e.target.closest('.faq__item').classList.contains('active')) {
                    CloseAllFaqBtns();
                    e.target.closest('.faq__item').classList.add('active');
                } else {
                    CloseAllFaqBtns();
                }
                
            })
        })

        function CloseAllFaqBtns(){ 
            faqBtns.forEach(item=>{
                item.closest('.faq__item').classList.remove('active');
            })
        }
    }
})