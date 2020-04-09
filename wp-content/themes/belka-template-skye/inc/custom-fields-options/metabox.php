<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

/* HOME PAGE BEGIN */
if (!file_exists(get_template_directory() . '/templates/home-page.php')) {   
    echo get_template_directory() . '/templates/home-page.php';                         
}
Container::make( 'post_meta', 'Настройки главной страницы' )
    ->show_on_template(get_template_directory() . '/templates/home-page.php')
    ->add_fields(array(
        Field::make('image', 'home_image', 'Большая иллюстрация')->set_value_type('url')->set_width(25),
        Field::make('text', 'home_welcome_title', 'Заголовок h1')->set_width(25),
        Field::make('text', 'home_welcome_btn', 'Текст кнопки под заголовком')->set_width(25),
        Field::make('text', 'home_info_title', 'Текст справа от кнопки')->set_width(25),
        Field::make('text', 'home_features_title', 'Заголовок Features')->set_width(25),
        Field::make('text', 'home_features_text', 'Текст Features')->set_width(20),

        Field::make('complex', 'home_features', 'Features Items')->set_width(100)->add_fields([
            Field::make('image', 'image', 'Изображение')->set_value_type('url'),
            Field::make('text', 'text', 'Текст'),
        ]),
        Field::make('text', 'home_pricing_title', 'Заголовок Pricing')->set_width(50),
        Field::make('text', 'home_pricing_text', 'Текст Pricing')->set_width(50),
        Field::make('complex', 'home_currency', 'Валюты')->set_width(100)->add_fields([
            Field::make('text', 'text', 'Валюта'),
            Field::make('text', 'ico', 'Иконка валюты'),
        ]),
        Field::make('complex', 'home_pricing', 'Pricing Items')->set_width(100)->add_fields([
            Field::make('image', 'image', 'Изображение')->set_value_type('url'),
            Field::make('text', 'title', 'Название тарифа'),
            Field::make('text', 'duration', 'Длительность тарифа'),
            Field::make('text', 'price', 'Цена'),
        ]),
        Field::make('text', 'home_devices_title', 'Заголовок Devices')->set_width(100),

        Field::make('complex', 'home_devices', 'Девайсы')->set_width(100)->add_fields([
            Field::make('image', 'big_image', 'Большое Изображение')->set_value_type('url'),
            Field::make('image', 'ico', 'Иконка')->set_value_type('url'),
            Field::make('text', 'title', 'Заголовок'),
            Field::make('text', 'description', 'Описание'),
            Field::make('checkbox', 'select', 'Выбран по-умолчанию'),
        ]),
        Field::make('image', 'app_store', 'App Store')->set_value_type('url')->set_width(50),
        Field::make('text', 'app_store_url', 'App Store Url')->set_width(50),
        Field::make('image', 'google_play', 'Google Play')->set_value_type('url')->set_width(50),
        Field::make('text', 'google_play_url', 'Google Play Url')->set_width(50),
    ));
/* HOME PAGE END */

/* EVENTS BEGIN */
Container::make('post_meta', 'Настройки Расценок')
    ->show_on_post_type('pricing')
    ->add_fields([
        Field::make('image', 'pricing_image', 'Изображение')->set_value_type('url')->set_width(33),
        Field::make('text', 'pricing_plane', 'Длительность тарифа')->set_width(33),
        Field::make('text', 'pricing_price', 'Стоимость по умолчанию')->set_width(33),
        Field::make('complex', 'pricing_dels', 'Зачеркнутые строки')->set_width(100)->add_fields([
            Field::make('text', 'del', 'Зачеркнутая строка'),
        ]),
        Field::make('complex', 'pricing_strings', 'строки')->set_width(100)->add_fields([
            Field::make('text', 'str', 'Строка'),
        ]),

        Field::make('complex', 'pricing_cur', 'Цены и валюты')->set_width(100)->add_fields([
            Field::make('text', 'cur', 'Валюта'),
            Field::make('text', 'price', 'Цена'),
        ]),

        Field::make('text', 'pricing_btn_text', 'Текст кнопки')->set_width(33),
        Field::make('checkbox', 'pricing_selected', 'Выделить блок')->set_width(33),
    ]);
/* EVENTS END */