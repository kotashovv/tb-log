<footer class="footer">
    <div class="container">
        <div class="footer__wrapper">
            <div class="footer__pops">
                <p class="footer-title">
                    Популярные запросы
                </p>
                <div class="items">
                    <span>
                        Транспортная компания
                    </span>
                    <span>
                        Грузоперевозки
                    </span>
                    <span>
                        Доставка
                    </span>
                    <span>
                        Транспортировка </span>
                    <span>
                        Сборных грузов </span>
                    <span>
                        Перевозки коммерческих грузов </span>
                </div>
            </div>
            <div class="footer__nav">
                <p class="footer-title">
                    Структура
                </p>

                <nav>
                    <?php
                    wp_nav_menu([
                        'menu' => 'Основное',
                        'container' => null,
                        'menu_class' => 'menu',
                        'echo' => true,
                        'fallback_cb' => 'wp_page_menu',
                        'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                        'depth' => 0,
                    ]);
                    ?>
                </nav>
            </div>

            <div class="footer__contacts">
                <p class="footer-title">
                    Контакты
                </p>
                <a href="tel:+7 (499) 638-63-38">+7 (499) 638-63-38</a>
                <a href="maiito:info@tb-log.ru">info@tb-log.ru</a>
            </div>

            <div class="footer__action">
                <a class="main-btn call-popup" href="#">
                    Заказать звонок
                </a>
                <a class="main-btn trans-btn" href="#">
                    Рассчитать стоимость
                </a>
            </div>
        </div>
        <div class="footer__bottom">
            <a class="label-link" href="https://milksite.ru/" target="_blank">
                site by moloko69
            </a>
            <a href="#">Политика конфиденциальности</a>
        </div>
    </div>
</footer>

<div class="popup">
    <div class="popup__body">
        <div class="popup__item popup-form">
            <button class="close-btn call-close-popup">

            </button>
            <div class="popup__title">
                <h2>
                    Укажите контакт, куда прислать расчёт
                </h2>
                <p>
                    С Вами свяжется наш менеджер для уточнения деталей и подготовки коммерческого предложения
                </p>
            </div>
            <form class="popup__form">
                <label>
                    <input type="text" placeholder="Имя">
                </label>
                <label>
                    <input type="tel" placeholder="Номер телефона">
                </label>
                <label>
                    <input type="email" placeholder="Электронная почта">
                </label>
                <div class="action">
                    <button class="main-btn">Получить расчёт</button>
                </div>
                <input type="hidden" name="from" value="">
                <input type="hidden" name="to" value="">
                <input type="hidden" name="transport" value="">
                <input type="hidden" name="weight" value="">
                <input type="hidden" name="type" value="">
            </form>
        </div>
        <div class="popup__item popup-success">
            <button class="close-btn call-close-popup">
            </button>
            <div class="popup__title">
                <h2>
                    Спасибо за обращение!
                </h2>
            </div>
            <div class="action">
                <a href="#" class="main-btn">Закрыть</a>
            </div>
        </div>
    </div>
</div>
</div>

<?php wp_footer(); ?>
</body>

</html>