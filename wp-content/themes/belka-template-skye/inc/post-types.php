<?php

add_action( 'init', function () {
  register_post_type('pricing', [
    //передаем настройки
      'labels' => [
          'name' => 'Расценки',//отображается в админке. Основное название
          'singular_name' => 'Расценка',
          'add_new' => 'Добавить Расценку',
          'add_new_item' => 'Добавить Расценки',
          'edit_item' => 'Редактировать Расценку',
          'new_item' => 'Новая Расценка',
          'view_item' => 'Показать Расценку',
          'search_items' => 'Найти Расценкуу',
          'not_found' => 'Не найдено',
          'not_found_in_trash' => 'Not found in trash',
          'parent_item_colon' => '',
          'menu_name' => 'Расценки',
      ],
      'description' => '',
      'public' => true,
      'menu_position' => 29,
      'menu_icon' => 'dashicons-format-status',
      'hierarchical' => false,
      'supports' => array('title', 'thumbnail'),
      'taxonomies' => array(),
      'has_archive' => true
  ]);
  register_taxonomy('tariffs', array('pricing'), array(
      'labels' => array(
          'name' => 'Тарифы',
          'sungular_name' => 'Тариф',
          'search_items' => 'Найти Тариф',
          'all_items' => 'Все Тарифы',
          'view_item' => 'Просмотреть Тариф',
          'edit_item' => 'Редактировать Тариф',
          'update_item' => 'Обновить Тариф',
          'add_new_item' => 'Добавить Тариф',
          'new_item_name' => 'Добавить Новый',
          'menu_name' => 'Тарифы',
      ),
      'description' => '',
      'public' => true,
      'hierarchical' => true,
  ));

});
