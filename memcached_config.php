<?php
/**
 * Created by PhpStorm.
 * User: oleksandrkolpakov
 * Date: 06.05.16
 * Time: 13:44
 */
/**
 * Memcached configuration block
 * @see https://github.com/php-memcached-dev/php-memcached/blob/master/memcached.ini
 */
ini_set('memcached.compression_factor', 1.3);
ini_set('memcached.compression_threshold', 2000);
ini_set('memcached.compression_type', 'fastlz');
ini_set('memcached.serializer', 'igbinary');
ini_set('memcached.store_retry_count', 2);
ini_set('memcached.use_sasl', ''); //Changeable: PHP_INI_SYSTEM
/**
 * Memcached session configuration block
 */
ini_set('memcached.sess_binary', '');
ini_set('memcached.sess_connect_timeout', 1000);
ini_set('memcached.sess_consistent_hash', '');
ini_set('memcached.sess_lock_expire', 0);
ini_set('memcached.sess_lock_max_wait', 1);
ini_set('memcached.sess_lock_wait', 150);
ini_set('memcached.sess_locking', 1);
ini_set('memcached.sess_number_of_replicas', 0);
ini_set('memcached.sess_prefix', 'memc.sess.key.');
ini_set('memcached.sess_randomize_replica_read', '');
ini_set('memcached.sess_remove_failed', 1);
ini_set('memcached.sess_sasl_password', '');
ini_set('memcached.sess_sasl_username', '');


const SESSION_NAME = 'test_name';
session_module_name('memcached');
ini_set('session.save_path', '127.0.0.1:11211');
