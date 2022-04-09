<?php
/**
 * Plugin Name: Buku Induk
 * Plugin URI: https://github.com/drajathasan/slims-buku-induk
 * Description: Ini adalah plugin buku induk
 * Version: 1.0.0
 * Author: Heru Subekti & M.Zaemakhrus
 * Author URI: -
 */

// get plugin instance
$plugin = \SLiMS\Plugins::getInstance();

// registering menus or hook
$plugin->registerMenu("reporting", "Buku Induk", __DIR__ . "/index.php");