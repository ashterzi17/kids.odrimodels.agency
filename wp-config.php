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
define('DB_NAME', 'odrikids');

/** Имя пользователя MySQL */
define('DB_USER', 'ashterzi');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'ULTRAnumb4117');

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
define('AUTH_KEY',         '7X@qTI^E8<UamP|dl}8DO1 /.[2AjzNkIR{$}ONmHRl269&T$|ES[&)N;: !(B1r');
define('SECURE_AUTH_KEY',  'M0xV.?CDzzZNh1[u+IpC^K`0:Z;NZlHHO5qt1uv5AeAkx(2j{Y9<`Md5ChwxK9je');
define('LOGGED_IN_KEY',    'hXHGN[+XEm7?5ZXwsW(#5>!_2Q5^er(qYo @/H//%t@[Q[iHD ~n4#^I8M33Q#1`');
define('NONCE_KEY',        'qOE[&^203=ybMxEzBcvflV~l@lE5{yk`xfa,%a= =i!4*1[[Oa_J]wGAf5MPfpv?');
define('AUTH_SALT',        'A=rdk0%,JwEFd7(?,{1J4;Ra*(]nX12p:H7X`Df[.;$y~gRxg5;rDSM2PD7*= Gk');
define('SECURE_AUTH_SALT', ')HG.;fq61Bj2|:T*E8Z|Z@ (N1s[<<.ztaXc`~l_%xRqw4Q$1OpY+N|^I_0E7rke');
define('LOGGED_IN_SALT',   ';cBndWs}I0Ak#UERN~8v#6m#1a/!$oWZrPq})iWg1@V:j(Ir]QbMG&P2q<2g#arP');
define('NONCE_SALT',       'kz*{2lAvnQ=[[CWoF/T:$b6Z @IxIf9%(iaS}rEX#5OfUDdInU&>N]J7=R%S.akV');

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
