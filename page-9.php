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
</main>
<?php get_footer(); ?>