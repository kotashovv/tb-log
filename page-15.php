<?php get_header(); ?>
<main class="main">
    <div class="breadcrumbs">
        <div class="container">
            <div class="breadcrumbs__items">
                <a href="<?php echo get_home_url(); ?>">
                    <svg width="18.000000" height="17.988770" viewBox="0 0 18 17.9888" fill="none"
                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <defs />
                        <path id="Vector"
                            d="M12.75 13.48L12.75 17.98L15.75 17.98C16.99 17.98 18 16.98 18 15.73L18 8.89C18 8.5 17.84 8.13 17.57 7.85L11.2 0.96C10.07 -0.26 8.18 -0.33 6.96 0.79C6.9 0.85 6.85 0.9 6.79 0.96L0.43 7.85C0.15 8.13 0 8.51 0 8.9L0 15.73C0 16.98 1 17.98 2.25 17.98L5.25 17.98L5.25 13.48C5.26 11.44 6.91 9.77 8.9 9.72C10.96 9.67 12.73 11.37 12.75 13.48Z"
                            fill="#B0B1B6" fill-opacity="1.000000" fill-rule="nonzero" />
                        <path id="Vector"
                            d="M9 11.23C7.75 11.23 6.75 12.24 6.75 13.48L6.75 17.98L11.25 17.98L11.25 13.48C11.25 12.24 10.24 11.23 9 11.23Z"
                            fill="#B0B1B6" fill-opacity="1.000000" fill-rule="nonzero" />
                    </svg>

                </a>
                <a href="<?php echo get_page_uri(); ?>"><?php echo get_the_title(); ?></a>
            </div>
        </div>
    </div>
    <section class="about">
        <div class="container">
            <div class="about__wrapper">
                <div class="text">
                    <h1>
                        "Трэвэллинг Бокс" – профессиональная логистическая компания с 11-летним опытом
                    </h1>
                    <p>
                        Мы предоставляем полный комплекс логистических услуг для бизнеса и частных клиентов.
                        Организуем автомобильные перевозки грузов, железнодорожные перевозки, авиационные
                        доставки и импортно-экспортные перевозки по всей России и за её пределами.
                    </p>
                    <p>
                        Наша компания специализируется на перевозке негабаритных грузов, предоставлении
                        спецтехники и разработке индивидуальных логистических решений. Более 11 лет мы
                        обеспечиваем быструю, безопасную и удобную доставку, сохраняя репутацию надёжного
                        партнёра в транспортной логистике.
                    </p>
                </div>
                <div class="img">
                    <img src="<?php echo get_template_directory_uri(  ) . '/'; ?>assets/img/map.png" alt="">
                </div>
            </div>
        </div>
    </section>
    <section class="about-info">
        <div class="container">
            <div class="about-info__title">
                <h2>
                    О компании в цифрах
                </h2>
            </div>
            <div class="about-info__items">
                <article class="about-info__item">
                    <span>
                        11 лет
                    </span>
                    <p>
                        перевозим грузы для B2B.
                    </p>
                </article>
                <article class="about-info__item">
                    <span>
                        10 898
                    </span>
                    <p>
                        выполненных заказов
                        за 2023 год. </p>
                </article>
                <article class="about-info__item">
                    <span>
                        163 470 000 кг </span>
                    <p>
                        грузов перевезено
                        в 2023 году. </p>
                </article>
                <article class="about-info__item">
                    <span>
                        30+ </span>
                    <p>
                        транспортных средств
                        загружаем каждый день. </p>
                </article>
                <article class="about-info__item">
                    <span>
                        600+ </span>
                    <p>
                        действующих договоров
                        с партнерами (2023 год). </p>
                </article>
                <article class="about-info__item">
                    <span>
                        24/7 </span>
                    <p>
                        Персональный менеджер
                        на связи </p>
                </article>
            </div>

            <div class="about-info__years">
                <div class="about-info__year">
                    <span>
                        2013 год
                    </span>
                    <p>
                        Компания ООО "Трэвэллинг Бокс" начала свою деятельность в 2013 году как экспедиционная
                        организация, специализирующаяся на автоперевозках по России. В первые годы мы
                        сосредоточились на внутренних перевозках, создав и расширив собственный автопарк
                    </p>
                </div>
                <div class="about-info__year">
                    <span>
                        2018 год
                    </span>
                    <p>С 2018 года компания расширила услуги на международные направления, внедрив
                        мультимодальные схемы доставки, включающие авиационные, автомобильные, железнодорожные и
                        морские перевозки. Это позволило нам предлагать клиентам надёжные и быстрые решения для
                        доставки грузов в любую точку мира.</p>
                </div>
                <div class="about-info__year">
                    <span>
                        Сегодня </span>
                    <p>Сегодня "Трэвэллинг Бокс" – это надёжный партнёр в сфере транспортной логистики,
                        предоставляющий комплексные решения и гарантируя безопасность на всех этапах. Наша
                        репутация построена на ответственности и профессионализме.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="partners">
        <div class="container">
            <div class="partners__title">
                <h2>
                    Партнеры
                </h2>
            </div>
            <div class="partners__slider">
                <div class="partners__navigation">
                    <button class="nav-btn nav-next">
                        <svg width="44.000000" height="44.000000" viewBox="0 0 44 44" fill="none"
                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <defs />
                            <g opacity="0.800000">
                                <rect id="arrow" rx="21.500000" width="43.000000" height="43.000000"
                                    transform="translate(44.500000 44.500000) rotate(180.000000)" fill="#FFFFFF"
                                    fill-opacity="1.000000" />
                                <rect id="Iconly/Light/Arrow - Right 3" rx="0.000000" width="23.000000"
                                    height="23.000000" transform="matrix(1 0 0 -1 10.5 34.5)" fill="#FFFFFF"
                                    fill-opacity="0" />
                                <path id="Stroke 1" d="M18.5 29L25.5 22L18.5 15" stroke="#333333"
                                    stroke-opacity="1.000000" stroke-width="1.500000" stroke-linejoin="round"
                                    stroke-linecap="round" />
                            </g>
                        </svg>

                    </button>
                    <button class="nav-btn nav-prev">
                        <svg width="44.000000" height="44.000000" viewBox="0 0 44 44" fill="none"
                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <defs />
                            <g opacity="0.800000">
                                <rect id="arrow" rx="21.500000" width="43.000000" height="43.000000"
                                    transform="translate(44.500000 44.500000) rotate(180.000000)" fill="#FFFFFF"
                                    fill-opacity="1.000000" />
                                <rect id="Iconly/Light/Arrow - Right 3" rx="0.000000" width="23.000000"
                                    height="23.000000" transform="matrix(1 0 0 -1 10.5 34.5)" fill="#FFFFFF"
                                    fill-opacity="0" />
                                <path id="Stroke 1" d="M18.5 29L25.5 22L18.5 15" stroke="#333333"
                                    stroke-opacity="1.000000" stroke-width="1.500000" stroke-linejoin="round"
                                    stroke-linecap="round" />
                            </g>
                        </svg>

                    </button>
                </div>
                <div class="partners__swiper swiper">
                    <div class="partners__swiper-wrapper swiper-wrapper">
                        <div class="partners__swiper-slide swiper-slide">
                            <img src="<?php echo get_template_directory_uri(  ) . '/'; ?>assets/img/p1.png" alt="">
                        </div>
                        <div class="partners__swiper-slide swiper-slide">
                            <img src="<?php echo get_template_directory_uri(  ) . '/'; ?>assets/img/p2.png" alt="">
                        </div>
                        <div class="partners__swiper-slide swiper-slide">
                            <img src="<?php echo get_template_directory_uri(  ) . '/'; ?>assets/img/p3.png" alt="">
                        </div>
                        <div class="partners__swiper-slide swiper-slide">
                            <img src="<?php echo get_template_directory_uri(  ) . '/'; ?>assets/img/p4.png" alt="">
                        </div>
                        <div class="partners__swiper-slide swiper-slide">
                            <img src="<?php echo get_template_directory_uri(  ) . '/'; ?>assets/img/p5.png" alt="">
                        </div>
                        <div class="partners__swiper-slide swiper-slide">
                            <img src="<?php echo get_template_directory_uri(  ) . '/'; ?>assets/img/p2.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="docs">
        <div class="container">
            <div class="docs__title">
                <h2>
                    Благодарственные письма
                </h2>
            </div>
            <div class="docs__slider">
                <div class="docs__navigation">
                    <button class="nav-btn prev-el">
                        <svg width="44.000000" height="44.000000" viewBox="0 0 44 44" fill="none"
                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <defs />
                            <g opacity="0.800000">
                                <rect id="arrow" rx="21.500000" width="43.000000" height="43.000000"
                                    transform="translate(44.500000 44.500000) rotate(180.000000)" fill="#FFFFFF"
                                    fill-opacity="1.000000" />
                                <rect id="Iconly/Light/Arrow - Right 3" rx="0.000000" width="23.000000"
                                    height="23.000000" transform="matrix(1 0 0 -1 10.5 34.5)" fill="#FFFFFF"
                                    fill-opacity="0" />
                                <path id="Stroke 1" d="M18.5 29L25.5 22L18.5 15" stroke="#333333"
                                    stroke-opacity="1.000000" stroke-width="1.500000" stroke-linejoin="round"
                                    stroke-linecap="round" />
                            </g>
                        </svg>
                    </button>
                    <button class="nav-btn next-el">
                        <svg width="44.000000" height="44.000000" viewBox="0 0 44 44" fill="none"
                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <defs />
                            <g opacity="0.800000">
                                <rect id="arrow" rx="21.500000" width="43.000000" height="43.000000"
                                    transform="translate(44.500000 44.500000) rotate(180.000000)" fill="#FFFFFF"
                                    fill-opacity="1.000000" />
                                <rect id="Iconly/Light/Arrow - Right 3" rx="0.000000" width="23.000000"
                                    height="23.000000" transform="matrix(1 0 0 -1 10.5 34.5)" fill="#FFFFFF"
                                    fill-opacity="0" />
                                <path id="Stroke 1" d="M18.5 29L25.5 22L18.5 15" stroke="#333333"
                                    stroke-opacity="1.000000" stroke-width="1.500000" stroke-linejoin="round"
                                    stroke-linecap="round" />
                            </g>
                        </svg>
                    </button>
                </div>
                <div class="docs__slider-swiper swiper">
                    <div class="docs__slider-wrapper swiper-wrapper">
                        <a href="assets/img/doc.png" data-fancybox="docs" class="docs__slider-slide swiper-slide">
                            <img src="<?php echo get_template_directory_uri(  ) . '/'; ?>assets/img/doc.png" alt="">
                        </a>
                        <a href="assets/img/doc.png" data-fancybox="docs" class="docs__slider-slide swiper-slide">
                            <img src="<?php echo get_template_directory_uri(  ) . '/'; ?>assets/img/doc.png" alt="">
                        </a>
                        <a href="assets/img/doc.png" data-fancybox="docs" class="docs__slider-slide swiper-slide">
                            <img src="<?php echo get_template_directory_uri(  ) . '/'; ?>assets/img/doc.png" alt="">
                        </a>
                        <a href="assets/img/doc.png" data-fancybox="docs" class="docs__slider-slide swiper-slide">
                            <img src="<?php echo get_template_directory_uri(  ) . '/'; ?>assets/img/doc.png" alt="">
                        </a>
                        <a href="assets/img/doc.png" data-fancybox="docs" class="docs__slider-slide swiper-slide">
                            <img src="<?php echo get_template_directory_uri(  ) . '/'; ?>assets/img/doc.png" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="cases">
        <div class="container">
            <div class="cases__title">
                <h2>
                    Кейсы
                </h2>
            </div>
            <div class="cases__items">
                <div class="cases__item">
                    <div class="img">
                        <img src="<?php echo get_template_directory_uri(  ) . '/'; ?>assets/img/case.png" alt="">
                    </div>
                    <div class="info">
                        <div class="info-title">
                            Задача:
                        </div>
                        <div class="info-text">
                            Доставка спецтехники и оборудования
                        </div>

                        <div class="info-title">
                            Направление:
                        </div>
                        <div class="info-way">
                            <span>Видное</span>
                            <span>Мамакан</span>
                        </div>
                        <div class="info-title">
                            Характеристики груза:
                        </div>
                        <div class="info-text">
                            11.5х2.5х3.9 вездеходный манипулятор + 12х2.5х2.8 контейнер с оборудованием
                        </div>
                    </div>
                    <div class="date">
                        <div class="info-title">
                            Период:
                        </div>
                        <div class="info-text">
                            2021 год - 2022 год
                        </div>
                    </div>
                </div>
                <div class="cases__item">
                    <div class="img">
                        <img src="<?php echo get_template_directory_uri(  ) . '/'; ?>assets/img/case.png" alt="">
                    </div>
                    <div class="info">
                        <div class="info-title">
                            Задача:
                        </div>
                        <div class="info-text">
                            Доставка спецтехники и оборудования
                        </div>

                        <div class="info-title">
                            Направление:
                        </div>
                        <div class="info-way">
                            <span>Видное</span>
                            <span>Мамакан</span>
                        </div>
                        <div class="info-title">
                            Характеристики груза:
                        </div>
                        <div class="info-text">
                            11.5х2.5х3.9 вездеходный манипулятор + 12х2.5х2.8 контейнер с оборудованием
                        </div>
                    </div>
                    <div class="date">
                        <div class="info-title">
                            Период:
                        </div>
                        <div class="info-text">
                            2021 год - 2022 год
                        </div>
                    </div>
                </div>
                <div class="cases__item">
                    <div class="img">
                        <img src="<?php echo get_template_directory_uri(  ) . '/'; ?>assets/img/case.png" alt="">
                    </div>
                    <div class="info">
                        <div class="info-title">
                            Задача:
                        </div>
                        <div class="info-text">
                            Доставка спецтехники и оборудования
                        </div>

                        <div class="info-title">
                            Направление:
                        </div>
                        <div class="info-way">
                            <span>Видное</span>
                            <span>Мамакан</span>
                        </div>
                        <div class="info-title">
                            Характеристики груза:
                        </div>
                        <div class="info-text">
                            11.5х2.5х3.9 вездеходный манипулятор + 12х2.5х2.8 контейнер с оборудованием
                        </div>
                    </div>
                    <div class="date">
                        <div class="info-title">
                            Период:
                        </div>
                        <div class="info-text">
                            2021 год - 2022 год
                        </div>
                    </div>
                </div>
            </div>
            <div class="cases__more-btn">
                <button class="more-btn">Смотреть ещё</button>
            </div>
        </div>
    </section>

    <section class="faq">
        <div class="container">
            <div class="faq__title">
                <h2>
                    Часто задаваемые вопросы
                </h2>
            </div>

            <div class="faq__items">
                <div class="faq__item">
                    <button class="faq-q">С каким видом транспорта работаете? Есть ли транспорт в
                        собственности?</button>
                    <div class="faq-a">
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium dignissimos
                            exercitationem sunt eligendi accusamus enim maiores perferendis. Ea, accusantium
                            vel.
                        </p>
                    </div>
                </div>
                <div class="faq__item">
                    <button class="faq-q">В каких регионах у Вас есть транспорт?</button>
                    <div class="faq-a">
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium dignissimos
                            exercitationem sunt eligendi accusamus enim maiores perferendis. Ea, accusantium
                            vel.
                        </p>
                    </div>
                </div>
                <div class="faq__item">
                    <button class="faq-q">Есть ли у Вас полис страхования грузов и полис ответственности
                        экспедитора?</button>
                    <div class="faq-a">
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium dignissimos
                            exercitationem sunt eligendi accusamus enim maiores perferendis. Ea, accusantium
                            vel.
                        </p>
                    </div>
                </div>
                <div class="faq__item">
                    <button class="faq-q">Сколько Вам нужно времени на постановку транспорта на рейс?</button>
                    <div class="faq-a">
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium dignissimos
                            exercitationem sunt eligendi accusamus enim maiores perferendis. Ea, accusantium
                            vel.
                        </p>
                    </div>
                </div>
                <div class="faq__item">
                    <button class="faq-q">Из каких стран Вы осуществляете импортную доставку груза?</button>
                    <div class="faq-a">
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium dignissimos
                            exercitationem sunt eligendi accusamus enim maiores perferendis. Ea, accusantium
                            vel.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>