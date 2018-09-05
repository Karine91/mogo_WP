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
define('DB_NAME', 'e99657p8_mogo');

/** Имя пользователя MySQL */
define('DB_USER', 'e99657p8_mogo');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '1Z6@U{*j');

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
define('AUTH_KEY',         '8u1xF:YwG<I.&cGY&Za[>`S9IyD`cagD6.!N8LTg= {!{>Ew(nxDcH5A:r/OE@CQ');
define('SECURE_AUTH_KEY',  'eClnKFa>h%xcZpD%PqD(,V=$_JZl7JMmBkCH+sIW]7AdF~A-,pL%Sm9Y@Y&.lu<]');
define('LOGGED_IN_KEY',    'oJ_NW*LF@.X L%#S,F[(mn^#X?at_^yq+4fU%Yw=3+Q&nH6SL|M<kD$M%weC<L7b');
define('NONCE_KEY',        'Y9[wyXuktD-s/@`~#POl{G]y788q&cFYu*m+X|VU C2CdrS])]9a/)WoU&j)9g?K');
define('AUTH_SALT',        'e`WFAF:dM}_Zvf[B({>{T>-Cd=]=_/C}U2eF%|=rbu,OGb~_3(U(~V#>>[R%c5w*');
define('SECURE_AUTH_SALT', ', $ypx5YRV,^|k31;227ys9}4@<SgnUpE>L77,i]<RG~*]{}9AClf$2~4&`M%:hF');
define('LOGGED_IN_SALT',   'l^N*8HW3DDpa>S`VA{vuBEL8x8gPgHoQW$pXCFhrPQj$f<ELrdCW.M8yL:PgLp}y');
define('NONCE_SALT',       '.[5N03aC2p7~yb3H %[eO)c:YC9kx_]v@p7K%I}hP#.BI-_zz9a|`1aR8!=TN_/4');

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
