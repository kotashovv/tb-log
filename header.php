<!DOCTYPE html>
<html lang="ru">

<head>
    <?php wp_head(); ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?></title>
</head>

<body>
    <div class="wrapper">
        <header class="header">
            <div class="header-top">
                <div class="container">
                    <div class="header-top__wrap">
                        <div class="header-top__city">
                            <div class="city-text">
                                Московская область
                            </div>
                        </div>
                        <div class="header-top__news">
                            <span>
                                Lorem ipsum dolor sit amet.
                            </span>
                        </div>
                        <div class="header-top__actions">
                            <a href="tel:+7 (499) 638-63-38">+7 (499) 638-63-38</a>
                            <a href="mailto:info@tb-log.ru">info@tb-log.ru</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-bot">
                <div class="container">
                    <div class="header-bot__wrap">
                        <a href="<?php echo get_home_url(); ?>">
                            <img src="<?php echo get_template_directory_uri() . '/'; ?>assets/img/logo.svg" alt="">
                            <span>
                                Трэвэллинг Бокс
                            </span>
                        </a>
                        <div class="header-bot__nav">
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
                        </div>
                        <div class="header-bot__action">
                            <button class="main-btn call-popup">Заказать звонок</button>
                            <span>
                                Перезвоним в течении 15 минут
                            </span>
                        </div>
                        <div class="header-bot__burger">
                            <button class="burger-btn">
                                <span></span>
                            </button>
                        </div>
                    </div>

                </div>
            </div>
        </header>
        <div class="mobile-menu">
            <button class="close-btn"></button>
            
            <div class="nav">
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
            </div>
            <div class="contacts">
                <a href="tel:+7 (499) 638-63-38">+7 (499) 638-63-38</a>
                <a href="mailto:info@tb-log.ru">info@tb-log.ru</a>
            </div>
            <div class="city">
                <div class="city-text">
                    Московская область
                </div>
            </div>
            <div class="action">
                <button class="call-popup main-btn">Заказать звонок</button>
                <span>Перезвоним в течении 15 минут</span>
            </div>
        </div>