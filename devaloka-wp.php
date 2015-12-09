<?php
/*
Plugin Name: Devaloka WP
Description: Provides WordPress objects as services
Version: 0.5.0
Author: Whizark
Author URI: http://whizark.com
License: GPL-2.0+
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Text Domain: devaloka-wp
Domain Path: /languages
Network: true
*/

if (!defined('ABSPATH')) {
    exit;
}

use Devaloka\WordPress\Provider\WordPressProvider;

/** @var Devaloka\Devaloka $devaloka */
call_user_func(
    function () use ($devaloka) {
        $container = $devaloka->getContainer();

        /** @var Composer\Autoload\ClassLoader $loader */
        $loader = $container->get('loader');

        $loader->addPsr4('Devaloka\\WordPress\\', __DIR__ . '/src/', true);

        $devaloka->register(new WordPressProvider());
    }
);
