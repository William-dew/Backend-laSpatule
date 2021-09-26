<?php

namespace LaSpatule;

/**
 * Plugin Name: La Spatule
 * Version: 1.0
 * Author: William
 * Description: Plugin pour le projet la Spatule 
 */

require __DIR__ . '/vendor/autoload.php';

define('LA_SPATULE_PLUGIN_FILE', __FILE__);

Plugin::run();
// var_dump(get_role('administrator'));
