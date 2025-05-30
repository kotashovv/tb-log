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

    if (document.querySelector("[data-fancybox]")) {
        Fancybox.bind("[data-fancybox]", {
            // Твои кастомные опции
        });
    }



    const faqBtns = document.querySelectorAll('.faq-q');
    if (faqBtns.length != 0) {
        faqBtns.forEach(item => {
            item.addEventListener('click', (e) => {

                if (!e.target.closest('.faq__item').classList.contains('active')) {
                    CloseAllFaqBtns();
                    e.target.closest('.faq__item').classList.add('active');
                } else {
                    CloseAllFaqBtns();
                }

            })
        })

        function CloseAllFaqBtns() {
            faqBtns.forEach(item => {
                item.closest('.faq__item').classList.remove('active');
            })
        }
    }


    const burgerBtn = document.querySelectorAll('.burger-btn');
    const mobileMenu = document.querySelector('.mobile-menu');
    const closeMenuBtn = document.querySelector('.close-btn');

    if (burgerBtn.length != 0) {
        burgerBtn.forEach(item => {
            item.addEventListener('click', () => {
                OpenMenu();
            })
        })
    }

    if (closeMenuBtn) {
        closeMenuBtn.addEventListener('click', () => {
            CloseMenu();
        })
    }

    function OpenMenu() {
        mobileMenu.classList.add('active');
    }

    function CloseMenu() {
        mobileMenu.classList.remove('active');
    }

    const hiddenTextbtn = document.querySelector('.more-read');
    if (hiddenTextbtn) {
        hiddenTextbtn.addEventListener('click', (e)=>{
            hiddenTextbtn.style.display = 'none';
            hiddenTextbtn.previousElementSibling.classList.remove('hidden-text');
        })
    }

    const popupParent = document.querySelector('.popup');
    const popupForm = document.querySelector('.popup__item.popup-form');
    const callPopupBtns = document.querySelectorAll('.call-popup');
    const closePopupBtns = document.querySelectorAll('.call-close-popup');


    if (callPopupBtns.length != 0) {
        callPopupBtns.forEach(item => {
            item.addEventListener('click', (e) => {
                e.preventDefault();
                OpenPopupForm();
            })
        })
        closePopupBtns.forEach(item => {
            item.addEventListener('click', () => {
                ClosePopup();
            })
        })
    }

    function OpenPopupForm() {
        popupParent.classList.add('active');
        popupForm.classList.add('active');

        setTimeout(() => {
            document.addEventListener('click', handleOutsideClick);
        }, 0);
    }

    function ClosePopup() {
        popupParent.classList.remove('active');
        document.querySelector('.popup-form').classList.remove('active');
        document.querySelector('.popup-success').classList.remove('active');

        document.removeEventListener('click', handleOutsideClick);
    }

    function handleOutsideClick(e) {
        if (!e.target.closest('.popup__item')) {
            ClosePopup();
        }
    }


    function SuccessForm() {
        document.querySelector('.popup-form').classList.remove('active');
        document.querySelector('.popup-success').classList.add('active');
    }

})