<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'belkavpn' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'RM[sFA|cZ}X~cl/2KZK,}[lveCc1TCeLa=wAs<g@]A@-jA^%zro6|n%HNt&SEC@=' );
define( 'SECURE_AUTH_KEY',  'm%j>av=d/J*_1YG,0L><.UTCG-=|}B/gS8t|[Zy&3/eLDLRMt!`+Uy<zgger>{(&' );
define( 'LOGGED_IN_KEY',    'pF)x4Xdj* :Vw?nErS&uX%U]sk1T^EHgjpb[|As:&oOUVUImi]mL?(^Cdu~*S,Ox' );
define( 'NONCE_KEY',        '3aYq!Q,(l2JKG`07ghx1WND;cQ%b~nV4/^)TUefYBH)2F]Z(3d/]HBPBEO<=QYB?' );
define( 'AUTH_SALT',        '7h*rI?-Uw<->q@hgoF%_[Evv._KMpod4$42W3*fsMnfXd 7pA|K$?) (iW*3b.:W' );
define( 'SECURE_AUTH_SALT', 'u|w Hs7URA,6~?5pteLGO`:z0w!mrkJonh!Ie#@aX^<-Vc(*doeR!dI8pWJH_X/:' );
define( 'LOGGED_IN_SALT',   'iPQnyBC_6n578+#.zCw>{TIo*!U#M{GPn|O.gBf;YJE,&!/ xX<F%Bs?=k!OttyB' );
define( 'NONCE_SALT',       ',@g{jk}5eGU8rlZK7vMUux{)Wg|)erY-oaWJAM:MB6rh~yI~T94(G=uI6(1-vqBG' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );
