<?php get_header(); ?>
        <main class="main">

            <div class="breadcrumbs white-style">
                <div class="container">
                    <div class="breadcrumbs__items">
                        <a href="#">
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
                        <a href="#">Услуги</a>
                    </div>
                </div>
            </div>


            <section class="calc-page">
                <div class="container">
                    <div class="calc-page__wrapper">
                        <div class="hero-calc">
                            <form class="hero-calc__form col-2">

                                <label class="form-item arrow-decor">
                                    <span class="form-subtitle">
                                        Откуда
                                    </span>
                                    <select name="from">
                                        <option value="none">Откуда</option>
                                        <option value="Москва">Москва</option>
                                        <option value="Санкт-петербург">Санкт-петербург</option>
                                        <option value="Воронеж">Воронеж</option>
                                        <option value="Тверь">Тверь</option>
                                    </select>
                                </label>
                                <label class="form-item arrow-decor">
                                    <span class="form-subtitle">
                                        Куда
                                    </span>
                                    <select name="to">
                                        <option value="none">Откуда</option>
                                        <option value="Москва">Москва</option>
                                        <option value="Санкт-петербург">Санкт-петербург</option>
                                        <option value="Воронеж">Воронеж</option>
                                        <option value="Тверь">Тверь</option>
                                    </select>
                                </label>
                                <label class="form-item arrow-decor">
                                    <span class="form-subtitle">Тип транспорта</span>
                                    <select name="transport">
                                        <option value="Легковой">Малотоннажный</option>
                                        <option value="Минивен">Минивен</option>
                                        <option value="Автобус">Автобус</option>
                                        <option value="Газель">Газель</option>
                                    </select>
                                </label>
                                <label class="form-item arrow-decor half">
                                    <span class="form-subtitle">Характер груза</span>
                                    <select name="transport">
                                        <option value="none">Характер груза</option>
                                        <option value="Легковой">Легковой</option>
                                        <option value="Минивен">Минивен</option>
                                        <option value="Автобус">Автобус</option>
                                        <option value="Газель">Газель</option>
                                    </select>
                                </label>
                                <label class="form-item arrow-decor half">
                                    <span class="form-subtitle">Вес</span>
                                    <select name="transport">
                                        <option value="none">500 - 2000 кг</option>
                                        <option value="Легковой">Легковой</option>
                                        <option value="Минивен">Минивен</option>
                                        <option value="Автобус">Автобус</option>
                                        <option value="Газель">Газель</option>
                                    </select>
                                </label>
                                <div class="action form-item">
                                    <button class="main-btn">Рассчитать стоимость</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
        </main>
<?php get_footer(); ?>