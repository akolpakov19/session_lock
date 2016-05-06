<?php
/**
 *
 * The file contains all configuration values related to the session process
 *
 */

/**
 * Session configuration block
 * @see http://php.net/manual/en/session.configuration.php
 */
ini_set('session.auto_start', 'Off');
ini_set('session.cache_expire', 180);
ini_set('session.cache_limiter', 'nocache');
ini_set('session.cookie_domain', '');
ini_set('session.cookie_httponly', 'Off');
ini_set('session.cookie_lifetime', 0);
ini_set('session.cookie_path', '/');
ini_set('session.cookie_secure', 'Off');
ini_set('session.entropy_file', '/dev/urandom');
ini_set('session.entropy_length', 32);
ini_set('session.gc_divisor', 1000);
ini_set('session.gc_maxlifetime', 1440);
ini_set('session.gc_probability', 1);
ini_set('session.hash_bits_per_character', 5);
ini_set('session.hash_function', 0);
ini_set('session.name', 'PHPSESSID');
ini_set('session.referer_check', '');
ini_set('session.save_handler', 'files');//will be changed for tests to 'memcached'
ini_set('session.save_path', '');
ini_set('session.serialize_handler', 'php');
ini_set('session.upload_progress.cleanup', 'On');
ini_set('session.upload_progress.enabled', 'On');
ini_set('session.upload_progress.freq', '1%');//not sure, that I've set it correctly @TODO
ini_set('session.upload_progress.min_freq', 1);
ini_set('session.upload_progress.name', 'PHP_SESSION_UPLOAD_PROGRESS');
ini_set('session.upload_progress.prefix', 'upload_progress_');
ini_set('session.use_cookies', 'On');
ini_set('session.use_only_cookies', 'On');
ini_set('session.use_strict_mode', 'Off');
ini_set('session.use_trans_sid', 0);

