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
define('DB_NAME', 'database1');
/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'qwer1234');
// define('WP_CACHE_KEY_SALT', 'rnancee.42.fr');
/** Имя сервера MySQL */
define('DB_HOST', 'db:3306');
// define('WP_HOME', 'https://localhost/wordpress'); 

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '36aYL]U$#Pr0wW(:`acr>3>3!spu;@rE nIY}rnrr_z$k*C*Qx-I{p+/>L6|?0IX');
define('SECURE_AUTH_KEY',  '36aYL]U$#Pr0wW(:`acr>3>3!spu;@rE nIY}rnrr_z$k*C*Qx-I{p+/>L6|?0IX');
define('LOGGED_IN_KEY',    '36aYL]U$#Pr0wW(:`acr>3>3!spu;@rE nIY}rnrr_z$k*C*Qx-I{p+/>L6|?0IX');
define('NONCE_KEY',        '36aYL]U$#Pr0wW(:`acr>3>3!spu;@rE nIY}rnrr_z$k*C*Qx-I{p+/>L6|?0IX');
define('AUTH_SALT',        '36aYL]U$#Pr0wW(:`acr>3>3!spu;@rE nIY}rnrr_z$k*C*Qx-I{p+/>L6|?0IX');
define('SECURE_AUTH_SALT', '36aYL]U$#Pr0wW(:`acr>3>3!spu;@rE nIY}rnrr_z$k*C*Qx-I{p+/>L6|?0IX');
define('LOGGED_IN_SALT',   '36aYL]U$#Pr0wW(:`acr>3>3!spu;@rE nIY}rnrr_z$k*C*Qx-I{p+/>L6|?0IX');
define('NONCE_SALT',       '36aYL]U$#Pr0wW(:`acr>3>3!spu;@rE nIY}rnrr_z$k*C*Qx-I{p+/>L6|?0IX');

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