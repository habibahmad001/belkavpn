<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

Container::make( 'theme_options', 'Настройки темы' )
    ->set_icon('dashicons-carrot')
    ->add_tab( 'Шапка', array(
        Field::make( 'image', 'header_logo', 'Логотип' )
            ->set_width(20)
            ->set_value_type('url'),
        Field::make('text', 'footer_under_logo1', 'Текст под логотипом')->set_width(20),
        Field::make('text', 'footer_under_logo2', 'Текст ссылки под логотипом')->set_width(20),
        Field::make('text', 'footer_under_logo2_url', 'Андрес ссылки под логотипом')->set_width(20),
    ) )
    ->add_tab( 'Подвал', array(
        Field::make( 'image', 'footer_logo', 'Логотип' )
            ->set_width(100)
            ->set_value_type('url'),
        Field::make('text', 'footer_first_title', 'Заголовок первой колонки')->set_width(50),
        Field::make('text', 'footer_second_title', 'Заголовок второй колонки')->set_width(50),
        Field::make('complex', 'footer_first', 'Первая колонка')->set_width(50)->add_fields([
            Field::make('text', 'text_item', 'Текстовый элемент'),
        ]),
        Field::make('complex', 'footer_second', 'Вторая колонка')->set_width(50)->add_fields([
            Field::make('text', 'text_item', 'Текстовый элемент'),
        ]),

        Field::make('text', 'footer_social_title', 'Заголовок социальные сети')->set_width(30),
        Field::make('complex', 'footer_social', 'Социальные сети')->set_width(50)->add_fields([
            Field::make('text', 'url', 'Ссылка')->set_width(50),
            Field::make( 'image', 'ico', 'Иконка' )
                ->set_value_type('url')->set_width(50),
        ]),
    ) )    ->add_tab( 'Чат', array(
        Field::make('checkbox', 'is_show_chat', 'Показать чат?'),
        Field::make( 'image', 'chat_ava', 'Изображение профиля' )
            ->set_width(20)
            ->set_value_type('url'),
        Field::make('text', 'chat_title', 'Заголовок')->set_width(20),
        Field::make('text', 'chat_text', 'Текст под заголовком')->set_width(20),
    ) );