<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки базы данных
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'workflow_kotsegub' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'root' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', '' );

/** Имя сервера базы данных */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'C]I0c&JQ}#3mnt2^6$2ZH?Se`>!jjW:QCB7/r2GDjsC[!)dp2DI&cNPY+<(FB6.L' );
define( 'SECURE_AUTH_KEY',  'Oe($eW`#U)J!RbrpL>vu}0e,^:@BlTY1:DEUlcpRwh,QU)Zvb~kB>$y-!/h!|`Me' );
define( 'LOGGED_IN_KEY',    '[]_gR,-~UW_nO6_Gl:3~b&:/uI+Lq%E7zNn07J2kY/PMNt.}_s^$3@c<k!laz0ej' );
define( 'NONCE_KEY',        'u1`4dTLuA)Q8+!@.$hTe3mr07,qR-dI*OKJ s&v#(%/8;Mj5<>DsNS2-yQohGV|u' );
define( 'AUTH_SALT',        '|xEHq#nBAi;7o}*ZtBm~ iFvHMz:5 6cAzMux>8+.Tz0meCAH UK+H$;W.(@U0aU' );
define( 'SECURE_AUTH_SALT', '}*^U*MaWeES`L0dP82w|JvC y@X%7{eT1]6<3JRfxa97%E?)F{V6Z$W$YLyv_.EP' );
define( 'LOGGED_IN_SALT',   'It_oV,0Met2]-Ye6wU&XzeV`#Tjg>(Q~c<kR8Og}&1@ 9o,uJ40;@43P|r[xcA7,' );
define( 'NONCE_SALT',       'WsK-d5DNdV-s}0X9$~x) r[U%H`hs[us/a~_tab|XNi_S6pk>]ifVm7?ymSd3B1#' );

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
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
