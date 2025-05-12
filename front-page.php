<?php get_header(); ?>
        <main class="main">
            <section class="hero">
                <div class="container">
                    <div class="hero-top">
                        <div class="text">
                            <h1>
                                Надёжная транспортная компания для бизнеса и частных клиентов
                            </h1>
                            <p>
                                Быстрая доставка сборных грузов, товаров, посылок и документов по всей России
                            </p>
                            <button class="main-btn white-btn call-popup">
                                Стать клиентом
                            </button>
                        </div>
                        <div class="img">
                            <img src="<?php echo get_template_directory_uri(  ) . '/'; ?>assets/img/hero.svg" alt="">
                        </div>
                    </div>
                    <div class="hero-calc">
                        <div class="hero-calc__title">
                            <span>Калькулятор</span>
                        </div>
                        <form class="hero-calc__form">

                            <label class="form-item arrow-decor">
                                <select name="from">
                                    <option value="none">Откуда</option>
                                    <option value="Москва">Москва</option>
                                    <option value="Санкт-петербург">Санкт-петербург</option>
                                    <option value="Воронеж">Воронеж</option>
                                    <option value="Тверь">Тверь</option>
                                </select>
                            </label>
                            <label class="form-item arrow-decor">
                                <select name="to">
                                    <option value="none">Откуда</option>
                                    <option value="Москва">Москва</option>
                                    <option value="Санкт-петербург">Санкт-петербург</option>
                                    <option value="Воронеж">Воронеж</option>
                                    <option value="Тверь">Тверь</option>
                                </select>
                            </label>
                            <label class="form-item arrow-decor">
                                <select name="transport">
                                    <option value="none">Вид транспорта</option>
                                    <option value="Легковой">Легковой</option>
                                    <option value="Минивен">Минивен</option>
                                    <option value="Автобус">Автобус</option>
                                    <option value="Газель">Газель</option>
                                </select>
                            </label>
                            <div class="action form-item">
                                <button class="main-btn call-popup">Рассчитать стоимость</button>
                            </div>
                        </form>
                        <div class="hero-calc__info">
                            <span>
                                От 700 руб.
                            </span>
                            <span>
                                От 2-х дней
                            </span>
                        </div>
                    </div>
                </div>
            </section>
            <section class="edge">
                <div class="container">
                    <div class="edge__swiper swiper">
                        <div class="edge__wrap swiper-wrapper">
                            <div class="edge__item swiper-slide">
                                <div class="img">
                                    <img src="<?php echo get_template_directory_uri(  ) . '/'; ?>assets/img/edge1.png" alt="">
                                </div>
                                <div class="text">
                                    <h2>
                                        Широкая география
                                    </h2>
                                    <p>
                                        доставка по всей России
                                    </p>
                                </div>
                            </div>
                            <div class="edge__item swiper-slide">
                                <div class="img">
                                    <img src="<?php echo get_template_directory_uri(  ) . '/'; ?>assets/img/edge2.png" alt="">
                                </div>
                                <div class="text">
                                    <h2>
                                        Большой опыт
                                    </h2>
                                    <p>
                                        более 11 лет в логистике, страхование грузов
                                    </p>
                                </div>
                            </div>
                            <div class="edge__item swiper-slide">
                                <div class="img">
                                    <img src="<?php echo get_template_directory_uri(  ) . '/'; ?>assets/img/edge3.png" alt="">
                                </div>
                                <div class="text">
                                    <h2>
                                        Индивидуальный подход
                                    </h2>
                                    <p>
                                        персональный менеджер и логист на связи 24/7
                                    </p>
                                </div>
                            </div>
                            <div class="edge__item swiper-slide">
                                <div class="img">
                                    <img src="<?php echo get_template_directory_uri(  ) . '/'; ?>assets/img/edge4.png" alt="">
                                </div>
                                <div class="text">
                                    <h2>
                                        Гибкие условия
                                    </h2>
                                    <p>
                                        удобные финансовые решения для партнёров
                                    </p>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </section>

            <section class="services">
                <div class="container">
                    <div class="services__top">
                        <div class="title">
                            <h2>
                                Услуги
                            </h2>
                        </div>
                        <div class="services__tabs">
                            <button class="main-btn active">Внутрироссийские перевозки</button>
                            <button class="main-btn">Международные перевозки</button>
                        </div>
                    </div>
                    <div class="services__items">
                        <article class="services__item">
                            <div class="text">
                                <h3>
                                    Автомобильные перевозки
                                </h3>
                                <p>
                                    Доставка грузов авто: быстро, надёжно, по всей России
                                </p>
                            </div>
                            <div class="img">
                                <img src="<?php echo get_template_directory_uri(  ) . '/'; ?>assets/img/s1.png" alt="">
                            </div>
                        </article>
                        <article class="services__item">
                            <div class="text">
                                <h3>
                                    Малотоннажные перевозки
                                </h3>
                                <p>
                                    Малотоннажные перевозки: оперативная доставка грузов до 5 тонн
                                </p>
                            </div>
                            <div class="img">
                                <img src="<?php echo get_template_directory_uri(  ) . '/'; ?>assets/img/s2.png" alt="">
                            </div>
                        </article>
                        <article class="services__item">
                            <div class="text">
                                <h3>
                                    Международные контейнерные перевозки
                                </h3>
                                <p>
                                    Контейнерные перевозки: импортно-экспортные
                                </p>
                            </div>
                            <div class="img">
                                <img src="<?php echo get_template_directory_uri(  ) . '/'; ?>assets/img/s3.png" alt="">
                            </div>
                        </article>
                        <article class="services__item">
                            <div class="text">
                                <h3>
                                    Рефрижераторы
                                </h3>
                                <p>
                                    Рефрижераторные перевозки: быстрая доставка продуктов и медикаментов
                                </p>
                            </div>
                            <div class="img">
                                <img src="<?php echo get_template_directory_uri(  ) . '/'; ?>assets/img/s4.png" alt="">
                            </div>
                        </article>
                        <article class="services__item">
                            <div class="text">
                                <h3>
                                    Авиаперевозки
                                </h3>
                                <p>
                                    Авиаперевозки: срочная доставка грузов по России и миру
                                </p>
                            </div>
                            <div class="img">
                                <img src="<?php echo get_template_directory_uri(  ) . '/'; ?>assets/img/s5.png" alt="">
                            </div>
                        </article>
                        <article class="services__item">
                            <div class="text">
                                <h3>
                                    Железнодорожные перевозки
                                </h3>
                                <p>
                                    ЖД перевозки: надёжная доставка грузов по России и СНГ
                                </p>
                            </div>
                            <div class="img">
                                <img src="<?php echo get_template_directory_uri(  ) . '/'; ?>assets/img/s6.png" alt="">
                            </div>
                        </article>
                        <article class="services__item">
                            <div class="text">
                                <h3>
                                    Негабаритные перевозки
                                </h3>
                                <p>
                                    Негабаритные перевозки: доставка сложных и крупногабаритных грузов
                                </p>
                            </div>
                            <div class="img">
                                <img src="<?php echo get_template_directory_uri(  ) . '/'; ?>assets/img/s7.png" alt="">
                            </div>
                        </article>
                    </div>
                </div>
            </section>

            <section class="transport">
                <div class="container">
                    <div class="transport__wrapper">
                        <div class="transport__title">
                            <h2>
                                Список собственного транспорта
                            </h2>
                        </div>
                        <div class="swiper-navigation">
                            <button class="swiper-prev nav-btn"><svg width="24.000000" height="24.000000"
                                    viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <defs />
                                    <rect id="Iconly/Light/Arrow - Right 3" rx="0.000000" width="23.000000"
                                        height="23.000000" transform="matrix(1 0 0 -1 0.5 24.5)" fill="#FFFFFF"
                                        fill-opacity="0" />
                                    <path id="Stroke 2" d="M15.5 19L8.5 12L15.5 5" stroke="#000000"
                                        stroke-opacity="1.000000" stroke-width="1.500000" stroke-linejoin="round"
                                        stroke-linecap="round" />
                                </svg>
                            </button>
                            <button class="swiper-next nav-btn"><svg width="24.000000" height="24.000000"
                                    viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <defs />
                                    <rect id="Iconly/Light/Arrow - Right 3" rx="0.000000" width="23.000000"
                                        height="23.000000" transform="matrix(1 0 0 -1 0.5 24.5)" fill="#FFFFFF"
                                        fill-opacity="0" />
                                    <path id="Stroke 2" d="M15.5 19L8.5 12L15.5 5" stroke="#000000"
                                        stroke-opacity="1.000000" stroke-width="1.500000" stroke-linejoin="round"
                                        stroke-linecap="round" />
                                </svg>
                            </button>
                        </div>
                        <div class="transport__swiper swiper">

                            <div class="transport__swiper-wrapper swiper-wrapper">
                                <div class="transport__swpier-slide swiper-slide">
                                    <div class="img">
                                        <img src="<?php echo get_template_directory_uri(  ) . '/'; ?>assets/img/t1.png" alt="">
                                    </div>
                                    <div class="text">
                                        <h3>
                                            Sinotruk Sitrak C7H, 2024
                                        </h3>
                                        <p>
                                            Надёжные и мощные машины для дальних перевозок
                                        </p>
                                    </div>
                                    <div class="action">
                                        <button class="main-btn">Выбрать</button>
                                    </div>
                                </div>
                                <div class="transport__swpier-slide swiper-slide">
                                    <div class="img">
                                        <img src="<?php echo get_template_directory_uri(  ) . '/'; ?>assets/img/t1.png" alt="">
                                    </div>
                                    <div class="text">
                                        <h3>
                                            Sinotruk Sitrak C7H, 2024
                                        </h3>
                                        <p>
                                            Надёжные и мощные машины для дальних перевозок
                                        </p>
                                    </div>
                                    <div class="action">
                                        <button class="main-btn">Выбрать</button>
                                    </div>
                                </div>
                                <div class="transport__swpier-slide swiper-slide">
                                    <div class="img">
                                        <img src="<?php echo get_template_directory_uri(  ) . '/'; ?>assets/img/t1.png" alt="">
                                    </div>
                                    <div class="text">
                                        <h3>
                                            Sinotruk Sitrak C7H, 2024
                                        </h3>
                                        <p>
                                            Надёжные и мощные машины для дальних перевозок
                                        </p>
                                    </div>
                                    <div class="action">
                                        <button class="main-btn">Выбрать</button>
                                    </div>
                                </div>
                                <div class="transport__swpier-slide swiper-slide">
                                    <div class="img">
                                        <img src="<?php echo get_template_directory_uri(  ) . '/'; ?>assets/img/t1.png" alt="">
                                    </div>
                                    <div class="text">
                                        <h3>
                                            Sinotruk Sitrak C7H, 2024
                                        </h3>
                                        <p>
                                            Надёжные и мощные машины для дальних перевозок
                                        </p>
                                    </div>
                                    <div class="action">
                                        <button class="main-btn">Выбрать</button>
                                    </div>
                                </div>
                                <div class="transport__swpier-slide swiper-slide">
                                    <div class="img">
                                        <img src="<?php echo get_template_directory_uri(  ) . '/'; ?>assets/img/t1.png" alt="">
                                    </div>
                                    <div class="text">
                                        <h3>
                                            Sinotruk Sitrak C7H, 2024
                                        </h3>
                                        <p>
                                            Надёжные и мощные машины для дальних перевозок
                                        </p>
                                    </div>
                                    <div class="action">
                                        <button class="main-btn">Выбрать</button>
                                    </div>
                                </div>
                                <div class="transport__swpier-slide swiper-slide">
                                    <div class="img">
                                        <img src="<?php echo get_template_directory_uri(  ) . '/'; ?>assets/img/t1.png" alt="">
                                    </div>
                                    <div class="text">
                                        <h3>
                                            Sinotruk Sitrak C7H, 2024
                                        </h3>
                                        <p>
                                            Надёжные и мощные машины для дальних перевозок
                                        </p>
                                    </div>
                                    <div class="action">
                                        <button class="main-btn">Выбрать</button>
                                    </div>
                                </div>
                            </div>
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

            <section class="information">
                <div class="container">
                    <div class="information__title">
                        <h2>
                            Заказать перевозку в 3 шага
                        </h2>
                    </div>

                    <div class="information__items">
                        <div class="information__item">
                            <div class="num">
                                <span>01</span>
                            </div>
                            <div class="text">
                                <h3>
                                    Оформление заявки
                                </h3>
                                <p>
                                    заполняете простую форму, оставляете свои контакты, а мы вам перезваниваем
                                    и расчитываем стоимость и сроки
                                </p>
                                <button>Оформить заявку</button>
                            </div>
                        </div>
                        <div class="information__item">
                            <div class="num">
                                <span>02</span>
                            </div>
                            <div class="text">
                                <h3>
                                    Персональный менеджер
                                </h3>
                                <p>
                                    уточним детали, предложим маршрут и рассчитыем стоимость
                                </p>
                                <button>Оформить заявку</button>
                            </div>
                        </div>
                        <div class="information__item">
                            <div class="num">
                                <span>03</span>
                            </div>
                            <div class="text">
                                <h3>
                                    Организуется доставка
                                </h3>
                                <p>
                                    доставим груз в оговоренные сроки с учётом типа груза и требований клиента
                                </p>
                                <button>Оформить заявку</button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="back">
                <div class="container">
                    <div class="back__title">
                        <h2>
                            Почему клиенты доверяют нам грузоперевозки
                        </h2>
                    </div>
                    <div class="back__wrapper">
                        <div class="back__text">
                            <p>
                                Доставка грузов – задача, требующая профессионального подхода. Транспортная компания
                                «Трэвэллинг Бокс» предлагает широкий спектр услуг, обеспечивая надежность, удобство и
                                точное соблюдение сроков.
                                <br><br>
                                Почему выбирают «Трэвэллинг Бокс»?
                            </p>
                            <ol>
                                <li>
                                    Широкий спектр услугМы доставляем грузы разного типа: от документов до
                                    крупногабаритных
                                    отправлений.
                                </li>
                                <li>
                                    Прозрачность тарифовСтоимость груза рассчитывается с учетом всех параметров
                                    отправления,
                                    что исключает скрытые платежи.

                                </li>
                                <li>
                                    Индивидуальный подходМаршрут, транспортное средство и дополнительные услуги
                                    подбираются
                                    в соответствии с требованиями клиента.
                                </li>
                            </ol>
                            <p class="hidden-text">
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatum perspiciatis
                                accusantium debitis voluptas! Fugit voluptates quasi id mollitia distinctio consectetur?
                            </p>
                            <button class="more-read">Читать далее</button>
                        </div>
                        <div class="back__img">
                            <img src="<?php echo get_template_directory_uri(  ) . '/'; ?>assets/img/bottom.png" alt="">
                        </div>
                    </div>
                </div>
            </section>

            <section class="bottom-calc">
                <div class="container">
                    <div class="bottom-calc__wrap">
                        <div class="bottom-calc__title">
                            <h2>
                                Калькулятор
                            </h2>
                        </div>
                        <form class="hero-calc__form">

                            <label class="form-item arrow-decor">
                                <select name="from">
                                    <option value="none">Откуда</option>
                                    <option value="Москва">Москва</option>
                                    <option value="Санкт-петербург">Санкт-петербург</option>
                                    <option value="Воронеж">Воронеж</option>
                                    <option value="Тверь">Тверь</option>
                                </select>
                            </label>
                            <label class="form-item arrow-decor">
                                <select name="to">
                                    <option value="none">Откуда</option>
                                    <option value="Москва">Москва</option>
                                    <option value="Санкт-петербург">Санкт-петербург</option>
                                    <option value="Воронеж">Воронеж</option>
                                    <option value="Тверь">Тверь</option>
                                </select>
                            </label>
                            <label class="form-item arrow-decor">
                                <select name="transport">
                                    <option value="none">Вид транспорта</option>
                                    <option value="Легковой">Легковой</option>
                                    <option value="Минивен">Минивен</option>
                                    <option value="Автобус">Автобус</option>
                                    <option value="Газель">Газель</option>
                                </select>
                            </label>
                            <div class="action form-item">
                                <button class="main-btn call-popup">Рассчитать стоимость</button>
                            </div>
                        </form>
                        <div class="hero-calc__info">
                            <span>
                                От 700 руб.
                            </span>
                            <span>
                                От 2-х дней
                            </span>
                        </div>
                    </div>
                </div>
            </section>
        </main>
  <?php get_footer(); ?>