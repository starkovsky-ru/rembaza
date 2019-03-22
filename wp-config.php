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
define('DB_NAME', 'starkovsky_rembz');

/** Имя пользователя MySQL */
define('DB_USER', 'starkovsky_rembz');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'db553410');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '3U3|1tMZwzob=kllx2hoMaqL6A9tSnIhZG!nb#:UkcOsIQ[54QG:0Axh==w7LiBK');
define('SECURE_AUTH_KEY',  '|7z+}|xSo)5tS<z$UaSC~BT+J#sUW/v3xXGS#woiI^.X[WGTo+X&WyO:<auBX1`1');
define('LOGGED_IN_KEY',    'GKzIT&UKw;7,R-_(F>V?+_a:cq&rsxp.cpQvk1BNdMTEiIm2HQ(< z@4ka^dabg-');
define('NONCE_KEY',        't!~X1XXM#gIoa:^*PBin@FHQp+)2APbQ5z>rqs>bZotXx:Lr-8[84j/{vI4hBc=.');
define('AUTH_SALT',        'iWszX_*HvK[;z (H,ZD6lT4HCY_bw@0/:4|E z2@4xo(QZq.YV;fC,,~RElFczo)');
define('SECURE_AUTH_SALT', 'i>&6c>_Ny5!i<*>StXJ@y+#~<0ODnBWPyayQx!28?qhVj**?l?_K<~2HWmm>But)');
define('LOGGED_IN_SALT',   'd{1./YjE3T}nejH<j9~nI`8RuM}*Td;2F1_8{[c0oRjo~^N9<[.IP(4d;)B<n:$-');
define('NONCE_SALT',       '$3nJi^8JO2]U4wt/o5aS#eR*|ax^Y6/)8=!Pz[ Q{=xdIm:l(y|GpV=HVh=yN!pG');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
